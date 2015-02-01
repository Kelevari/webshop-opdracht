<?php

namespace ProductBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ProductBundle\Entity\SausHot;
use ProductBundle\Form\SausHotType;

/**
 * SausHot controller.
 *
 * @Route("/saushot")
 */
class SausHotController extends Controller
{

    /**
     * Lists all SausHot entities.
     *
     * @Route("/", name="saushot")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductBundle:SausHot')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new SausHot entity.
     *
     * @Route("/", name="saushot_create")
     * @Method("POST")
     * @Template("ProductBundle:SausHot:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new SausHot();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('saushot_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a SausHot entity.
     *
     * @param SausHot $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SausHot $entity)
    {
        $form = $this->createForm(new SausHotType(), $entity, array(
            'action' => $this->generateUrl('saushot_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SausHot entity.
     *
     * @Route("/new", name="saushot_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SausHot();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a SausHot entity.
     *
     * @Route("/{id}", name="saushot_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductBundle:SausHot')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SausHot entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing SausHot entity.
     *
     * @Route("/{id}/edit", name="saushot_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductBundle:SausHot')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SausHot entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a SausHot entity.
    *
    * @param SausHot $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SausHot $entity)
    {
        $form = $this->createForm(new SausHotType(), $entity, array(
            'action' => $this->generateUrl('saushot_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SausHot entity.
     *
     * @Route("/{id}", name="saushot_update")
     * @Method("PUT")
     * @Template("ProductBundle:SausHot:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductBundle:SausHot')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SausHot entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('saushot_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a SausHot entity.
     *
     * @Route("/{id}", name="saushot_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductBundle:SausHot')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SausHot entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('saushot'));
    }

    /**
     * Creates a form to delete a SausHot entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('saushot_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

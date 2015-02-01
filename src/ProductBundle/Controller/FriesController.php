<?php

namespace ProductBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ProductBundle\Entity\Fries;
use ProductBundle\Form\FriesType;

/**
 * Fries controller.
 *
 * @Route("/fries")
 */
class FriesController extends Controller
{

    /**
     * Lists all Fries entities.
     *
     * @Route("/", name="fries")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProductBundle:Fries')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Fries entity.
     *
     * @Route("/", name="fries_create")
     * @Method("POST")
     * @Template("ProductBundle:Fries:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Fries();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fries_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Fries entity.
     *
     * @param Fries $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fries $entity)
    {
        $form = $this->createForm(new FriesType(), $entity, array(
            'action' => $this->generateUrl('fries_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fries entity.
     *
     * @Route("/new", name="fries_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Fries();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Fries entity.
     *
     * @Route("/{id}", name="fries_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductBundle:Fries')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fries entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Fries entity.
     *
     * @Route("/{id}/edit", name="fries_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductBundle:Fries')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fries entity.');
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
    * Creates a form to edit a Fries entity.
    *
    * @param Fries $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fries $entity)
    {
        $form = $this->createForm(new FriesType(), $entity, array(
            'action' => $this->generateUrl('fries_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fries entity.
     *
     * @Route("/{id}", name="fries_update")
     * @Method("PUT")
     * @Template("ProductBundle:Fries:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProductBundle:Fries')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fries entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fries_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Fries entity.
     *
     * @Route("/{id}", name="fries_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProductBundle:Fries')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fries entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fries'));
    }

    /**
     * Creates a form to delete a Fries entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fries_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

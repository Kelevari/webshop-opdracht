<?php

namespace BillingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BillingBundle\Entity\BillOrder;
use BillingBundle\Form\BillOrderType;

/**
 * BillOrder controller.
 *
 * @Route("/billorder")
 */
class BillOrderController extends Controller
{

    /**
     * Lists all BillOrder entities.
     *
     * @Route("/", name="billorder")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BillingBundle:BillOrder')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new BillOrder entity.
     *
     * @Route("/", name="billorder_create")
     * @Method("POST")
     * @Template("BillingBundle:BillOrder:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new BillOrder();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('billorder_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a BillOrder entity.
     *
     * @param BillOrder $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BillOrder $entity)
    {
        $form = $this->createForm(new BillOrderType(), $entity, array(
            'action' => $this->generateUrl('billorder_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BillOrder entity.
     *
     * @Route("/new", name="billorder_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new BillOrder();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a BillOrder entity.
     *
     * @Route("/{id}", name="billorder_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BillingBundle:BillOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BillOrder entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing BillOrder entity.
     *
     * @Route("/{id}/edit", name="billorder_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BillingBundle:BillOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BillOrder entity.');
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
    * Creates a form to edit a BillOrder entity.
    *
    * @param BillOrder $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BillOrder $entity)
    {
        $form = $this->createForm(new BillOrderType(), $entity, array(
            'action' => $this->generateUrl('billorder_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BillOrder entity.
     *
     * @Route("/{id}", name="billorder_update")
     * @Method("PUT")
     * @Template("BillingBundle:BillOrder:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BillingBundle:BillOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BillOrder entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('billorder_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a BillOrder entity.
     *
     * @Route("/{id}", name="billorder_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BillingBundle:BillOrder')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BillOrder entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('billorder'));
    }

    /**
     * Creates a form to delete a BillOrder entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('billorder_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

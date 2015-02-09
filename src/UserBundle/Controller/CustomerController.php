<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use UserBundle\Entity\Customer;
use UserBundle\Form\CustomerType;

/**
 * Customer controller.
 *
 * @Route("/")
 */
class CustomerController extends Controller
{

    /**
     * Lists all Customer entities.
     *
     * @Route("/", name="customer")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserBundle:Customer')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Customer entity.
     *
     * @Route("/new", name="customer_create")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createCreateForm($customer);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $found_city     = $this->get('app.Helper')->checkDatabase($customer->getCity());
            $found_customer = $this->get('app.Helper')->checkDatabase($customer);
            $found_email    = $this->get('app.Helper')->checkDatabase($customer->getEmail());
            $found_phone    = $this->get('app.Helper')->checkDatabase($customer->getPhone());

            $em = $this->getDoctrine()->getManager();

            if ($found_email != NULL) {

                // $this->get('app.Helper')->checkCombination($found_city, $found_customer, $found_email, $found_phone);

                $request->getSession()->getFlashBag()->add(
                    'notice',
                    'User already exists'
                );

                return $this->redirect($this->generateUrl('customer_create'), array('customer' => $customer));

            }elseif ($found_email == NULL && $customer->getEmail()->getEmail() != NULL) {
                if ($found_customer != NULL && $found_customer->getEmail() != NULL) {

                    return new Response('There is already a user registered with a different email address, maybe this is you? Login or check your submitted data');
                }else{

                    $em->persist($customer);
                    $em->flush();

                    return $this->redirect($this->generateUrl('customer_show', array('id' => $customer->getId())));
                }

            }elseif ($found_email == NULL && $customer->getEmail()->getEmail() == NULL) {

                if ($found_city != NULL) {
                    $customer->setCity($found_city);
                }

                if ($found_phone != NULL) {
                    $customer->setPhone($found_phone);
                }

                $customer->setEmail(NULL);
                $em->persist($customer);
                $em->flush();

                return $this->redirect($this->generateUrl('customer_show', array('id' => $customer->getId())));

            }
        }
        $request->getSession()->getFlashBag()->add(
            'notice',
            'somthing went wrong'
        );
        return $this->redirect($this->generateUrl('customer_new'), array('customer' => $customer));
    }

    /**
     * Creates a form to create a Customer entity.
     *
     * @param Customer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Customer $entity)
    {
        $form = $this->createForm(new CustomerType(), $entity, array(
            'action' => $this->generateUrl('customer_create'),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal'),
        ));

        $form->add('button', 'submit', array('label' => 'Order', 'attr' => array('class' => 'btn btn-success btn-lg btn-block')));

        return $form;
    }

    /**
     * Displays a form to create a new Customer entity.
     *
     * @Route("/new", name="customer_new")
     * @Method("GET")
     * @Template("UserBundle:Customer:new.html.twig")
     */
    public function newAction()
    {
        $customer = new Customer();
        $form   = $this->createCreateForm($customer);

        return array(
            'entity' => $customer,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Customer entity.
     *
     * @Route("/{id}", name="customer_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Customer entity.
     *
     * @Route("/{id}/edit", name="customer_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
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
    * Creates a form to edit a Customer entity.
    *
    * @param Customer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Customer $entity)
    {
        $form = $this->createForm(new CustomerType(), $entity, array(
            'action' => $this->generateUrl('customer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Customer entity.
     *
     * @Route("/{id}", name="customer_update")
     * @Method("PUT")
     * @Template("UserBundle:Customer:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('customer_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Customer entity.
     *
     * @Route("/{id}", name="customer_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UserBundle:Customer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Customer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('customer'));
    }

    /**
     * Creates a form to delete a Customer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('customer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use UserBundle\Entity\City;
use UserBundle\Entity\Customer;
use UserBundle\Entity\Email;
use UserBundle\Entity\Phone;
use UserBundle\Entity\Profile;
use UserBundle\Form\CustomerType;
use UserBundle\Classes\Helper;

/**
 * Customer controller.
 *
 * @Route("/test")
 */
class TestController extends Controller
{
    /**
     * Creates a new Customer entity.
     *
     * @Route("/testroute", name="customer_create")
     * @Method("POST")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $customer = new Customer();
        $form = $this->createCreateForm($customer);
        $form->handleRequest($request);

        if ($form->isValid()) {
            // check if city is in db
            $found_city     = $this->get('app.Helper')->checkDatabase($customer->getCity());
            $found_customer = $this->get('app.Helper')->checkDatabase($customer);
            $found_email    = $this->get('app.Helper')->checkDatabase($customer->getEmail());
            $found_pfone    = $this->get('app.Helper')->checkDatabase($customer->getPhone());
            $found_profile  = $this->get('app.Helper')->checkDatabase($customer->getEmail()->getProfile());

            $city           = $this->get('app.Helper')->checkCombination($found_city, $found_customer, $found_pfone, $found_profile);
            // return $this->redirect($this->generateUrl('customer_show', array('id' => $customer->getId())));
            return new Response(var_dump($city));
        }

        return $this->redirect($this->generateUrl('customer_new', array('error' => 'somthing went wrong' )));
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
     * @Route("/testroute", name="customer_new")
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
     * test.
     *
     * @Route("/functiontest")
     * @Method("GET")
     * @Template("UserBundle:Customer:new.html.twig")
     */
    public function testAction()
    {
        $city = 12;

            $check = $this->get('app.Helper')->checkDatabase($customer->getCity());

        return new Response($check);
    }


}

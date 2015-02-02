<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Template("SiteBundle:Layout:index.html.twig")
     */
    public function indexAction()
    {
        $em             = $this->getDoctrine()->getManager();

        $fries          = $em->getRepository('ProductBundle:Fries')->findAll();
        $snacks         = $em->getRepository('ProductBundle:Snacks')->findAll();
        $drinks         = $em->getRepository('ProductBundle:Drinks')->findAll();
        $sausCold       = $em->getRepository('ProductBundle:SausCold')->findAll();
        $sausHot        = $em->getRepository('ProductBundle:SausHot')->findAll();
        $size           = $em->getRepository('ProductBundle:Size')->findAll();
        $cart           = array(array('name' => "test", "quantity" => 3, "price" => 9.5),array('name' => "test", "quantity" => 3, "price" => 9.5),array('name' => "test", "quantity" => 3, "price" => 9.5));
        return array(
            'fries'     => $fries,
            'snacks'    => $snacks,
            'drinks'    => $drinks,
            'sausCold'  => $sausCold,
            'sausHot'   => $sausHot,
            'size'      => $size,
            'cart'      => $cart,
        ); 
    }

    /**
     * @Route("/cart")
     * @Template("SiteBundle:Cart:cart.html.twig")
     */
    public function cartAction()
    {
        $em             = $this->getDoctrine()->getManager();

        $fries          = $em->getRepository('ProductBundle:Fries')->findAll();
        $snacks         = $em->getRepository('ProductBundle:Snacks')->findAll();
        $drinks         = $em->getRepository('ProductBundle:Drinks')->findAll();
        $sausCold       = $em->getRepository('ProductBundle:SausCold')->findAll();
        $sausHot        = $em->getRepository('ProductBundle:SausHot')->findAll();
        $size           = $em->getRepository('ProductBundle:Size')->findAll();
        $cart           = array(array('name' => "test", "quantity" => 3, "price" => 9.5),array('name' => "test", "quantity" => 3, "price" => 9.5),array('name' => "test", "quantity" => 3, "price" => 9.5));
        return array(
            'fries'     => $fries,
            'snacks'    => $snacks,
            'drinks'    => $drinks,
            'sausCold'  => $sausCold,
            'sausHot'   => $sausHot,
            'size'      => $size,
            'cart'      => $cart,
        ); 
    }

    /**
     * @Route("/bill")
     * @Template("SiteBundle:Forms:register.html.twig")
     */
    public function billAction()
    {
        $em             = $this->getDoctrine()->getManager();

        $fries          = $em->getRepository('ProductBundle:Fries')->findAll();
        $snacks         = $em->getRepository('ProductBundle:Snacks')->findAll();
        $drinks         = $em->getRepository('ProductBundle:Drinks')->findAll();
        $sausCold       = $em->getRepository('ProductBundle:SausCold')->findAll();
        $sausHot        = $em->getRepository('ProductBundle:SausHot')->findAll();
        $size           = $em->getRepository('ProductBundle:Size')->findAll();
        $cart           = array(array('name' => "test", "quantity" => 3, "price" => 9.5),array('name' => "test", "quantity" => 3, "price" => 9.5),array('name' => "test", "quantity" => 3, "price" => 9.5));
        return array(
            'fries'     => $fries,
            'snacks'    => $snacks,
            'drinks'    => $drinks,
            'sausCold'  => $sausCold,
            'sausHot'   => $sausHot,
            'size'      => $size,
            'cart'      => $cart,
        ); 
    }

}

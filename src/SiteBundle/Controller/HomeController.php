<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/menus")
     * @Template()
     */
    public function menuAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/frites")
     * @Template()
     */
    public function friteAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/drinks")
     * @Template()
     */
    public function drinkAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/saus")
     * @Template()
     */
    public function sausAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/snacks")
     * @Template()
     */
    public function snackAction()
    {
        return array(
                // ...
            );    }

}

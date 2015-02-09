<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraints\Null;
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
     * @Route("/testroute", name="login")
     * @Method("POST")
     * @Template("UserBundle:Login:login.html.twig")
     */
    public function loginAction(Request $request)
    {
        $email = isset($_POST["email"]) ? $_POST["email"] : NULL;
        $password = isset($_POST["password"]) ? $_POST["password"] : NULL;

        $em = $this->getDoctrine()->getManager();
        $found_email = $em->getRepository('UserBundle:Email')->findOneBy(array('email' => $email));
        $profile = $em->getRepository('UserBundle:Profile')->findOneBy(array('password' => $password));
        if($profile != Null && $found_email != Null) {
            if ($profile->getId() == $found_email->getProfile()->getId()) {
                $customer = $em->getRepository('UserBundle:Customer')->findOneBy(array('email' => $found_email->getId()));
                return new Response(
                    $customer->getFirstname()
                );
            }
        }else{
            return new Response('not found');
        };
    }

    /**
     * @Route("/testroute", name="login_form")
     * @Method("GET")
     * @Template()
     */
    public function createAction(Request $request)
    {
        return $this->render("UserBundle:Login:login.html.twig");
    }


}

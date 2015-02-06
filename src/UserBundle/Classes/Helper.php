<?php 

namespace UserBundle\Classes;

use Doctrine\ORM\EntityManager;
use UserBundle\Entity\City;
use UserBundle\Entity\Customer;
use UserBundle\Entity\Email;
use UserBundle\Entity\Phone;
use UserBundle\Entity\Profile;
use UserBundle\Form\CustomerType;
use Symfony\Component\HttpFoundation\Response;
/**
* 
*/
class Helper
{
	private $em;

	public function __construct(EntityManager $em)
	{
		return $this->em = $em;
	}

/*	public function checkCity($obj)
	{
		if (is_object($obj)) {
			$found = $this->em->getRepository('UserBundle:City')->findOneBy(array(
				'name' 	=> $obj->getName(),
				'zip' 	=> $obj->getZip()
			));
			if ($found) {
				return $found;
			}else{
				return $obj;
			}
		}else{
			return new Response('function checkCity() expects an an object, a '.gettype($obj).' was given.');
		}
	}*/

	public function checkDatabase($obj)
	{
		if (is_object($obj)) {
			// check if function exists
			$class = get_class($obj);
			switch ($class) {
				case 'UserBundle\Entity\City':
					$found = $this->em->getRepository('UserBundle:City')->findOneBy(array(
						'name' 	=> $obj->getName(),
						'zip' 	=> $obj->getZip()
					));
					if ($found) {
						return $found->getId();
					}else{
						return NULL;
					}
					break;
					
				case 'UserBundle\Entity\Customer':
					$found = $this->em->getRepository('UserBundle:Customer')->findOneBy(array(
						'firstname' 		=> $obj->getFirstname(),
						'lastname' 			=> $obj->getLastname(),
						'address_line_1' 	=> $obj->getAddressLine1()
					));
					if ($found) {
						return $found->getId();
					}else{
						return NULL;
					}
					break;
					
				case 'UserBundle\Entity\Email':
					$found = $this->em->getRepository('UserBundle:Email')->findOneBy(array(
						'email' => $obj->getEmail()
					));
					if ($found) {
						return $found->getId();
					}else{
						return NULL;
					}
					break;
					
				case 'UserBundle\Entity\Phone':
					$found = $this->em->getRepository('UserBundle:Phone')->findOneBy(array(
						'number' => $obj->getNumber()
					));
					if ($found) {
						return $found->getId();
					}else{
						return NULL;
					}
					break;
					
				case 'UserBundle\Entity\Profile':
					$found = $this->em->getRepository('UserBundle:Profile')->findOneBy(array(
						'id' => $obj->getId()
					));
					if ($found) {
						return $found->getId();
					}else{
						return NULL;
					}
					break;
			}
		}else{
			return new Response('function checkCity() expects an an object, a '.gettype($obj).' was given.');
		}
	}

	public function checkCombination($city, $customer, $email, $phone)
	{
		$user = $this->em->getRepository('UserBundle:Customer')
						->findOneBy(array(
								'id' 	=> $customer,
								'phone' => $phone,
								'city' 	=> $city,
								'email' => $email
							));
		if ($user != NULL) {
			return $user;
		}else{
			return array('city' => $city, 'customer' => $customer, 'phone' => $phone);
		}
	}
}

?>
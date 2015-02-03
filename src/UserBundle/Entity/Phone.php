<?php
namespace UserBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Phone
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(nullable=true)
     */
    private $number;

    /**
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="phone",cascade={"persist"})
     */
    private $customer;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Add customer
     *
     * @param \UserBundle\Entity\Customer $customer
     * @return Phone
     */
    public function addCustomer(\UserBundle\Entity\Customer $customer)
    {
        $this->customer[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \UserBundle\Entity\Customer $customer
     */
    public function removeCustomer(\UserBundle\Entity\Customer $customer)
    {
        $this->customer->removeElement($customer);
    }

    /**
     * Get customer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
<?php
namespace UserBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Phone
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(nullable=true)
     */
    private $number;

    /**
<<<<<<< HEAD
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Customer", mappedBy="phone")
=======
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="phone",cascade={"persist"})
>>>>>>> 779872154d1a439f1cbfb5edcece2526972669a6
     */
    private $customer;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Add customer
     *
     * @param \UserBundle\Entity\Customer $customer
     * @return Phone
     */
    public function addCustomer(\UserBundle\Entity\Customer $customer)
    {
        $this->customer[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \UserBundle\Entity\Customer $customer
     */
    public function removeCustomer(\UserBundle\Entity\Customer $customer)
    {
        $this->customer->removeElement($customer);
    }

    /**
     * Get customer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}

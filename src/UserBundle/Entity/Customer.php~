<?php
namespace UserBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $address_line_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address_line_2;

    /**
     * @ORM\OneToOne(targetEntity="Profile", mappedBy="customer",cascade={"persist"})
     */
    private $profile;

    /**
     * @ORM\OneToMany(targetEntity="BillingBundle\Entity\Bill", mappedBy="customer",cascade={"persist"})
     */
    private $bill;

    /**
     * @ORM\ManyToOne(targetEntity="Phone", inversedBy="customer",cascade={"persist"})
     * @ORM\JoinColumn(name="phone_id", referencedColumnName="id")
     */
    private $phone;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="customer",cascade={"persist"})
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bill = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     * @return Customer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Customer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set address_line_1
     *
     * @param string $addressLine1
     * @return Customer
     */
    public function setAddressLine1($addressLine1)
    {
        $this->address_line_1 = $addressLine1;

        return $this;
    }

    /**
     * Get address_line_1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    /**
     * Set address_line_2
     *
     * @param string $addressLine2
     * @return Customer
     */
    public function setAddressLine2($addressLine2)
    {
        $this->address_line_2 = $addressLine2;

        return $this;
    }

    /**
     * Get address_line_2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    /**
     * Set profile
     *
     * @param \UserBundle\Entity\Profile $profile
     * @return Customer
     */
    public function setProfile(\UserBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \UserBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Add bill
     *
     * @param \BillingBundle\Entity\Bill $bill
     * @return Customer
     */
    public function addBill(\BillingBundle\Entity\Bill $bill)
    {
        $this->bill[] = $bill;

        return $this;
    }

    /**
     * Remove bill
     *
     * @param \BillingBundle\Entity\Bill $bill
     */
    public function removeBill(\BillingBundle\Entity\Bill $bill)
    {
        $this->bill->removeElement($bill);
    }

    /**
     * Get bill
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Set phone
     *
     * @param \UserBundle\Entity\Phone $phone
     * @return Customer
     */
    public function setPhone(\UserBundle\Entity\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return \UserBundle\Entity\Phone 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set city
     *
     * @param \UserBundle\Entity\City $city
     * @return Customer
     */
    public function setCity(\UserBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \UserBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}

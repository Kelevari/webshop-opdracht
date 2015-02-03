<?php
namespace BillingBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bill")
 */
class Bill
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="BillingBundle\Entity\BillOrder", mappedBy="bill")
     */
    private $billProducts;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $payed;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Customer", inversedBy="bill")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billProducts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Bill
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add billProducts
     *
     * @param \BillingBundle\Entity\BillOrder $billProducts
     * @return Bill
     */
    public function addBillProduct(\BillingBundle\Entity\BillOrder $billProducts)
    {
        $this->billProducts[] = $billProducts;

        return $this;
    }

    /**
     * Remove billProducts
     *
     * @param \BillingBundle\Entity\BillOrder $billProducts
     */
    public function removeBillProduct(\BillingBundle\Entity\BillOrder $billProducts)
    {
        $this->billProducts->removeElement($billProducts);
    }

    /**
     * Get billProducts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBillProducts()
    {
        return $this->billProducts;
    }

    /**
     * Set payed
     *
     * @param boolean $payed
     * @return Saus_hot
     */
    public function setPayed($payed)
    {
        $this->payed = $payed;

        return $this;
    }

    /**
     * Get payed
     *
     * @return boolean 
     */
    public function getPayed()
    {
        return $this->payed;
    }

    /**
     * Set customer
     *
     * @param \UserBundle\Entity\Customer $customer
     * @return Bill
     */
    public function setCustomer(\UserBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \UserBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}

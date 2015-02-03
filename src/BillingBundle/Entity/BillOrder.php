<?php
namespace BillingBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bill_order")
 */
class BillOrder
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="BillingBundle\Entity\Bill", inversedBy="billProducts")
     * @ORM\JoinColumn(name="bill_id", referencedColumnName="id")
     */
    private $bill;

    /**
     * @ORM\ManyToOne(targetEntity="BillingBundle\Entity\Order", inversedBy="billOrder")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $order;

    /**
     * Set bill
     *
     * @param \BillingBundle\Entity\Bill $bill
     * @return BillOrder
     */
    public function setBill(\BillingBundle\Entity\Bill $bill = null)
    {
        $this->bill = $bill;

        return $this;
    }

    /**
     * Get bill
     *
     * @return \BillingBundle\Entity\Bill 
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Set order
     *
     * @param \BillingBundle\Entity\Order $order
     * @return BillOrder
     */
    public function setOrder(\BillingBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \BillingBundle\Entity\Order 
     */
    public function getOrder()
    {
        return $this->order;
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
}

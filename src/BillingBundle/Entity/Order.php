<?php
namespace BillingBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="order")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="object", nullable=false)
     */
    private $order_item;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="BillOrder", mappedBy="order")
     */
    private $billOrder;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billOrder = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set order_item
     *
     * @param \stdClass $orderItem
     * @return Order
     */
    public function setOrderItem($orderItem)
    {
        $this->order_item = $orderItem;

        return $this;
    }

    /**
     * Get order_item
     *
     * @return \stdClass 
     */
    public function getOrderItem()
    {
        return $this->order_item;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Order
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
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
     * Add billOrder
     *
     * @param \BillingBundle\Entity\BillOrder $billOrder
     * @return Order
     */
    public function addBillOrder(\BillingBundle\Entity\BillOrder $billOrder)
    {
        $this->billOrder[] = $billOrder;

        return $this;
    }

    /**
     * Remove billOrder
     *
     * @param \BillingBundle\Entity\BillOrder $billOrder
     */
    public function removeBillOrder(\BillingBundle\Entity\BillOrder $billOrder)
    {
        $this->billOrder->removeElement($billOrder);
    }

    /**
     * Get billOrder
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBillOrder()
    {
        return $this->billOrder;
    }
}

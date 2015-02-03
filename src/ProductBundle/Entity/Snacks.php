<?php
namespace ProductBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="snacks")
 */
class Snacks
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=50, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=false)
     */
    private $price;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $special;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $special_price;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $available;

    /**
     * @ORM\OneToMany(targetEntity="ProductBundle\Entity\Menu", mappedBy="snacks")
     */
    private $menu;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menu = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Snacks
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Snacks
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set special
     *
     * @param boolean $special
     * @return Snacks
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return boolean 
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set special_price
     *
     * @param float $specialPrice
     * @return Snacks
     */
    public function setSpecialPrice($specialPrice)
    {
        $this->special_price = $specialPrice;

        return $this;
    }

    /**
     * Get special_price
     *
     * @return float 
     */
    public function getSpecialPrice()
    {
        return $this->special_price;
    }

    /**
     * Add menu
     *
     * @param \ProductBundle\Entity\Menu $menu
     * @return Snacks
     */
    public function addMenu(\ProductBundle\Entity\Menu $menu)
    {
        $this->menu[] = $menu;

        return $this;
    }

    /**
     * Remove menu
     *
     * @param \ProductBundle\Entity\Menu $menu
     */
    public function removeMenu(\ProductBundle\Entity\Menu $menu)
    {
        $this->menu->removeElement($menu);
    }

    /**
     * Get menu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return Snacks
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }
}

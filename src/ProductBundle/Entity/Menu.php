<?php
namespace ProductBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="menu")
 */
class Menu
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $available;

    /**
     * @ORM\ManyToOne(targetEntity="ProductBundle\Entity\Drinks", inversedBy="menu")
     * @ORM\JoinColumn(name="drink_id", referencedColumnName="id")
     */
    private $drinks;

    /**
     * @ORM\ManyToOne(targetEntity="ProductBundle\Entity\Fries", inversedBy="menu")
     * @ORM\JoinColumn(name="fries_id", referencedColumnName="id")
     */
    private $fries;

    /**
     * @ORM\ManyToOne(targetEntity="ProductBundle\Entity\SausCold", inversedBy="menu")
     * @ORM\JoinColumn(name="saus_cold_id", referencedColumnName="id")
     */
    private $sausCold;

    /**
     * @ORM\ManyToOne(targetEntity="ProductBundle\Entity\Size", inversedBy="menu")
     * @ORM\JoinColumn(name="size_id", referencedColumnName="id")
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity="ProductBundle\Entity\Snacks", inversedBy="menu")
     * @ORM\JoinColumn(name="snacks_id", referencedColumnName="id")
     */
    private $snacks;

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
     * @return Menu
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
     * @return Menu
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
     * Set drinks
     *
     * @param \ProductBundle\Entity\Drinks $drinks
     * @return Menu
     */
    public function setDrinks(\ProductBundle\Entity\Drinks $drinks = null)
    {
        $this->drinks = $drinks;

        return $this;
    }

    /**
     * Get drinks
     *
     * @return \ProductBundle\Entity\Drinks 
     */
    public function getDrinks()
    {
        return $this->drinks;
    }

    /**
     * Set fries
     *
     * @param \ProductBundle\Entity\Fries $fries
     * @return Menu
     */
    public function setFries(\ProductBundle\Entity\Fries $fries = null)
    {
        $this->fries = $fries;

        return $this;
    }

    /**
     * Get fries
     *
     * @return \ProductBundle\Entity\Fries 
     */
    public function getFries()
    {
        return $this->fries;
    }

    /**
     * Set sausCold
     *
     * @param \ProductBundle\Entity\Saus_cold $sausCold
     * @return Menu
     */
    public function setSausCold(\ProductBundle\Entity\Saus_cold $sausCold = null)
    {
        $this->sausCold = $sausCold;

        return $this;
    }

    /**
     * Get sausCold
     *
     * @return \ProductBundle\Entity\Saus_cold 
     */
    public function getSausCold()
    {
        return $this->sausCold;
    }

    /**
     * Set size
     *
     * @param \ProductBundle\Entity\Size $size
     * @return Menu
     */
    public function setSize(\ProductBundle\Entity\Size $size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return \ProductBundle\Entity\Size 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set snacks
     *
     * @param \ProductBundle\Entity\Snacks $snacks
     * @return Menu
     */
    public function setSnacks(\ProductBundle\Entity\Snacks $snacks = null)
    {
        $this->snacks = $snacks;

        return $this;
    }

    /**
     * Get snacks
     *
     * @return \ProductBundle\Entity\Snacks 
     */
    public function getSnacks()
    {
        return $this->snacks;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return Menu
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

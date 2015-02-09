<?php
namespace UserBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Email
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=50, nullable=true)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Customer", mappedBy="email",cascade={"all"})
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Profile", inversedBy="email",cascade={"persist"})
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profile;

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
     * Set email
     *
     * @param string $email
     * @return Email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add profile
     *
     * @param \UserBundle\Entity\Profile $profile
     * @return Email
     */
    public function addProfile(\UserBundle\Entity\Profile $profile)
    {
        $this->profile[] = $profile;

        return $this;
    }

    /**
     * Remove profile
     *
     * @param \UserBundle\Entity\Profile $profile
     */
    public function removeProfile(\UserBundle\Entity\Profile $profile)
    {
        $this->profile->removeElement($profile);
    }

    /**
     * Get profile
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set customer
     *
     * @param \UserBundle\Entity\Customer $customer
     * @return Email
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

    /**
     * Set profile
     *
     * @param \UserBundle\Entity\Profile $profile
     * @return Email
     */
    public function setProfile(\UserBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;
    
        return $this;
    }
}

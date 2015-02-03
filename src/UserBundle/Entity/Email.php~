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
     * @ORM\Column(type="string", unique=true, length=50, nullable=false)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="Profile", mappedBy="email",cascade={"persist"})
     */
    private $profile;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profile = new \Doctrine\Common\Collections\ArrayCollection();
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
}

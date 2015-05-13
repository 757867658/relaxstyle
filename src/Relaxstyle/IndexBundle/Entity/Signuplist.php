<?php

namespace Relaxstyle\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="SignuplistRepository")
 * @ORM\Table(name="signuplist")
 */
class Signuplist
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $signupid;
    
    /**
     *  @ORM\Column(type="string", length=100)
     */
    protected $accountemail;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $accountname;
    
     /**
     * @ORM\Column(type="string", length=50)
     */
    protected $accountpasswd;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('Male', 'Female')")
     */
    protected $accountsex;

    /**
     * @ORM\Column(type="integer", columnDefinition="ENUM('0', '1')")
     */
    protected $status;
    
    
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
     * Set signupid
     *
     * @param string $signupid
     * @return Signuplist
     */
    public function setSignupid($signupid)
    {
        $this->signupid = $signupid;

        return $this;
    }

    /**
     * Get signupid
     *
     * @return string 
     */
    public function getSignupid()
    {
        return $this->signupid;
    }

    /**
     * Set accountemail
     *
     * @param string $accountemail
     * @return Signuplist
     */
    public function setAccountemail($accountemail)
    {
        $this->accountemail = $accountemail;

        return $this;
    }

    /**
     * Get accountemail
     *
     * @return string 
     */
    public function getAccountemail()
    {
        return $this->accountemail;
    }

    /**
     * Set accountname
     *
     * @param string $accountname
     * @return Signuplist
     */
    public function setAccountname($accountname)
    {
        $this->accountname = $accountname;

        return $this;
    }

    /**
     * Get accountname
     *
     * @return string 
     */
    public function getAccountname()
    {
        return $this->accountname;
    }

    /**
     * Set accountpasswd
     *
     * @param string $accountpasswd
     * @return Signuplist
     */
    public function setAccountpasswd($accountpasswd)
    {
        $this->accountpasswd = $accountpasswd;

        return $this;
    }

    /**
     * Get accountpasswd
     *
     * @return string 
     */
    public function getAccountpasswd()
    {
        return $this->accountpasswd;
    }

    /**
     * Set accountsex
     *
     * @param string $accountsex
     * @return Signuplist
     */
    public function setAccountsex($accountsex)
    {
        $this->accountsex = $accountsex;

        return $this;
    }

    /**
     * Get accountsex
     *
     * @return string 
     */
    public function getAccountsex()
    {
        return $this->accountsex;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Signuplist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
}

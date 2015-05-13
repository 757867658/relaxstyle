<?php

namespace Relaxstyle\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AccountRepository")
 * @ORM\Table(name="account")
 */
class Account
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accountemail
     *
     * @param string $accountemail
     * @return Account
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
     * @return Account
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
     * @return Account
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
     * @return Account
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
}

<?php

namespace Relaxstyle\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="FindlistRepository")
 * @ORM\Table(name="findlist")
 */
class Findlist
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
    protected $accountfind;
    
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
     * Set accountemail
     *
     * @param string $accountemail
     * @return Findlist
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
     * Set accountfind
     *
     * @param string $accountfind
     * @return Findlist
     */
    public function setAccountfind($accountfind)
    {
        $this->accountfind = $accountfind;

        return $this;
    }

    /**
     * Get accountfind
     *
     * @return string 
     */
    public function getAccountfind()
    {
        return $this->accountfind;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Findlist
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

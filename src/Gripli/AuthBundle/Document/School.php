<?php
namespace Gripli\AuthBundle\Document;

use Gripli\AuthBundle\Document\Users;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class School extends Users
{


    /**
     * @var string $nameSchool
     */
    protected $nameSchool;
    
      /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $email
     */
    protected $email;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
       /**
     * Set nameCompany
     *
     * @param string $nameSchool
     * @return self
     */
    public function setNameSchool($nameSchool)
    {
        $this->nameSchool = $nameSchool;
        return $this;
    }
    
     /**
     * Get nameCompany
     *
     * @return string $nameCompany
     */
    public function getNameSchool()
    {
        return $this->nameSchool;
    }
    /**
     * @var string $lastname
     */
    protected $lastname;

    /**
     * @var string $firstname
     */
    protected $firstname;

    /**
     * @var string $facebookId
     */
    protected $facebookId;


    /**
     * Set lastname
     *
     * @param string $lastname
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return self
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string $facebookId
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }
    /**
     * @var timestamp $lastUpdate
     */
    protected $lastUpdate;


    /**
     * Set lastUpdate
     *
     * @param timestamp $lastUpdate
     * @return self
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return timestamp $lastUpdate
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
    /**
     * @var date $created
     */
    protected $created;


    /**
     * Set created
     *
     * @param date $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }
 


}

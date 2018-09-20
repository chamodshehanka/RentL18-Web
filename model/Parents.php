<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/15/2018
 * Time: 10:53 PM
 */

class Parents
{
    private $parentID;
    private $parentName;
    private $parentAddress;
    private $telephone;
    private $email;

    /**
     * Parents constructor.
     * @param $parentID
     * @param $parentName
     * @param $parentAddress
     * @param $telephone
     * @param $email
     */
    public function __construct($parentID, $parentName, $parentAddress, $telephone, $email)
    {
        $this->parentID = $parentID;
        $this->parentName = $parentName;
        $this->parentAddress = $parentAddress;
        $this->telephone = $telephone;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getParentID()
    {
        return $this->parentID;
    }

    /**
     * @param mixed $parentID
     */
    public function setParentID($parentID)
    {
        $this->parentID = $parentID;
    }

    /**
     * @return mixed
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * @param mixed $parentName
     */
    public function setParentName($parentName)
    {
        $this->parentName = $parentName;
    }

    /**
     * @return mixed
     */
    public function getParentAddress()
    {
        return $this->parentAddress;
    }

    /**
     * @param mixed $parentAddress
     */
    public function setParentAddress($parentAddress)
    {
        $this->parentAddress = $parentAddress;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
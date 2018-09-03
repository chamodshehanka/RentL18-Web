<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/2/2018
 * Time: 11:05 PM
 */

class Company
{
    private $companyID;
    private $companyName;
    private $addressLine1;
    private $addressLine2;
    private $contact;
    private $noOfVehiclesOwn;

    /**
     * Company constructor.
     * @param $companyID
     * @param $companyName
     * @param $addressLine1
     * @param $addressLine2
     * @param $contact
     * @param $noOfVehiclesOwn
     */
    public function __construct($companyID, $companyName, $addressLine1, $addressLine2, $contact, $noOfVehiclesOwn)
    {
        $this->companyID = $companyID;
        $this->companyName = $companyName;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->contact = $contact;
        $this->noOfVehiclesOwn = $noOfVehiclesOwn;
    }


}
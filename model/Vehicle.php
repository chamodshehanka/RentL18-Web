<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/2/2018
 * Time: 10:56 PM
 */

class Vehicle
{
    /**
     * @var
     */
    private $vehicleID;
    /**
     * @var
     */
    private $vehicleNumber;
    /**
     * @var
     */
    private $noOfSeats;
    /**
     * @var
     */
    private $availableSeats;
    /**
     * @var
     */
    private $chargePerKm;

    /**
     * Vehicle constructor.
     * @param $vehicleID
     * @param $vehicleNumber
     * @param $noOfSeats
     * @param $availableSeats
     * @param $chargePerKm
     */
    public function __construct($vehicleID, $vehicleNumber, $noOfSeats, $availableSeats, $chargePerKm)
    {
        $this->vehicleID = $vehicleID;
        $this->vehicleNumber = $vehicleNumber;
        $this->noOfSeats = $noOfSeats;
        $this->availableSeats = $availableSeats;
        $this->chargePerKm = $chargePerKm;
    }

    /**
     * @return mixed
     */
    public function getVehicleID()
    {
        return $this->vehicleID;
    }

    /**
     * @param mixed $vehicleID
     */
    public function setVehicleID($vehicleID)
    {
        $this->vehicleID = $vehicleID;
    }

    /**
     * @return mixed
     */
    public function getVehicleNumber()
    {
        return $this->vehicleNumber;
    }

    /**
     * @param mixed $vehicleNumber
     */
    public function setVehicleNumber($vehicleNumber)
    {
        $this->vehicleNumber = $vehicleNumber;
    }

    /**
     * @return mixed
     */
    public function getNoOfSeats()
    {
        return $this->noOfSeats;
    }

    /**
     * @param mixed $noOfSeats
     */
    public function setNoOfSeats($noOfSeats)
    {
        $this->noOfSeats = $noOfSeats;
    }

    /**
     * @return mixed
     */
    public function getAvailableSeats()
    {
        return $this->availableSeats;
    }

    /**
     * @param mixed $availableSeats
     */
    public function setAvailableSeats($availableSeats)
    {
        $this->availableSeats = $availableSeats;
    }

    /**
     * @return mixed
     */
    public function getChargePerKm()
    {
        return $this->chargePerKm;
    }

    /**
     * @param mixed $chargePerKm
     */
    public function setChargePerKm($chargePerKm)
    {
        $this->chargePerKm = $chargePerKm;
    }
}
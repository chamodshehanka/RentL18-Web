<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/15/2018
 * Time: 10:55 PM
 */

class Student{

	private $username;
	private $password;

	public function __construct($userName, $password)
    {
        $this->username = $username;
        $this->password = $password;

    }

}
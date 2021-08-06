<?php

class Customer
{
    public string $email;
    public string $street;
    public float  $streetnumber;
    public string $city;
    public float  $zipcode;


    public function __construct (string $email, string $street, float  $streetnumber, string $city, float  $zipcode)
    {
        $this -> email = $email;
        $this -> street = $street;
        $this -> streetnumber = $streetnumber;
        $this -> city = $city;
        $this -> zipcode = $zipcode;
    }
}
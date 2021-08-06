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

    public function confirmationMessage($productNames)
    {
        $message = 'Products : ' . implode(', ', $productNames);
        $message .= '<br>';
        $message .= 'Your email address : ' . $_POST['email'];
        $_SESSION['email'] = $_POST['email'];
        $message .= '<br>';
        $message .= 'Your address : ' . $_POST['street'] . ' ' . $_POST['streetnumber'] . ', ' . $_POST['zipcode'] . ' ' . $_POST['city'];
        $_SESSION['street'] = $_POST['street'];
        $_SESSION['streetnumber'] = $_POST['streetnumber'];
        $_SESSION['zipcode'] = $_POST['zipcode'];
        $_SESSION['city'] = $_POST['city'];

        // Return selected products and address data
        return "<div class='alert alert-success'>" . $this->confirmationMessage($productNames) . "</div>";    }
}
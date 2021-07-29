<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Form</title>
</head>
<body>


<form action="form.php" method="post">

    <label for="firstName">First name:</label>
    <input type="text" name="firstName" id="firstName">
    <label for="lastName">Last name:</label>
    <input type="text" name="lastName" id="lastName">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <label for="streetName">Street:</label>
    <input type="text" name="streetName" id="streetName">
    <label for="streetNumber">Street number:</label>
    <input type="number" name="streetNumber" id="streetNumber">
    <label for="zip">Zip code:</label>
    <input type="number" name="zip" id="zip">
    <label for="city">City:</label>
    <input type="text" name="city" id="city">
    <label for="country">Country:</label>
    <input type="text" name="country" id="country">

    <p class="selection"> Select products: </p>
    <input type="checkbox" id="product1" name="product1" value="Water">
    <label for="product1"> Water </label>
    <input type="checkbox" id="product2" name="product2" value="Fire">
    <label for="product2"> Fire</label>
    <input type="checkbox" id="product3" name="product3" value="Ice">
    <label for="product3"> Ice</label>


    <input class="submitButton" type="submit" name="submit" value="Place order">



</form>
</body>
</html>
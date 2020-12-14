<?php
require_once("./vendor/autoload.php");

\Stripe\Stripe::setApiKey("sk_test_51HvJhyAKyiNbhJfoktZacSvdyFLz7Fypt8ejdilbkN4uoTdRdQmzEePpJS6dIDfYApX8m0n6Ketzt30VvvqfNIfM00iCuOIOoS");

//Sanitize post array

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email_address'];
$token = $POST['stripeToken'];

//Create Customer in stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

//Charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "inr",
    "description" => "Intro to react course",
    "customer" => $customer->id
));

//redirect to successs

header("Location:success.php?tid=".$charge->id."&product=".$charge->description);
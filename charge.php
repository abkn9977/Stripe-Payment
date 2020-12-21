<?php

require_once("./vendor/autoload.php");
require_once("./config/db.php");
require_once("./lib/pdo_db.php");
require_once("./modals/Customer.php");
require_once("./modals/Transaction.php");

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
    "description" => "Our Product",
    "customer" => $customer->id
));

//instantiate customer
$customer = new Customer();

//customer data
$customerData = [
    'id' => $charge -> customer,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email
];

//call customer method
$customer -> addCustomer($customerData);

//instantiate transaction
$transaction = new Transaction();

//transaction data
$transactionData = [
    'id' => $charge -> id,
    'customer_id' => $charge -> customer,
    'product' => $charge -> description,
    'amount' => $charge -> amount,
    'currency' => $charge -> currency,
    'status' => $charge -> status
];

//call transaction method
$transaction -> addTransaction($transactionData);

//redirect to successs
header("Location:success.php?tid=" . $charge->id . "&product=" . $charge->description);

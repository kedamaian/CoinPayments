<?php 

require '../src/coinPayments/coinPayments.class.php';


$CP = new \MineSQL\coinPayments();


// Set your Merchant ID
$CP->setMerchantId('');
// Set your secret IPN Key (in Account Settings on Coinpayments)
$CP->setSecretKey('');

// Payment Validator. Usually you would call this  
// from a database to fetch the billing information based on the $_POST['custom'] variable
// 
if($CP->validatePayment(0.00005, 'btc')) {

	// The payment is successful and passed all security measures
	
}


// The payment for some reason did not successfully complete
// All the errors generated are gathered into an array and can be accessed by $CP->getErrors();

$file = fopen("ipn_log.txt", 'w');
fwrite($file, print_r($CP->getErrors()));
fclose($file);


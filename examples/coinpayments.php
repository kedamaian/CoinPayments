<?php 

require '../src/coinPayments/coinPayments.class.php';



// test httpauth and hmac then publish to github bb



// You need to set a callback URL if you want the IPN to work
$callbackUrl = '';

// Create an instance of the class
$CP = new \MineSQL\coinPayments();

// Set the merchant ID and secret key (can be found in account settings on CoinPayments.net)
$CP->setMerchantId('');
$CP->setSecretKey('');

// Create a payment button with item name, currency, cost, custom variable, and the callback URL
$form = $CP->createPayment('Test Product', 'btc', 0.00005, '123', $callbackUrl);

// Display the button 
echo $form;


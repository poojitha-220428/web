<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId("YOUR_CLIENT_ID");
$client->setClientSecret("YOUR_CLIENT_SECRET");
$client->setRedirectUri("http://localhost/mywebsite/google-callback.php");

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $name = $google_account_info->name;
    $email = $google_account_info->email;

    echo "Welcome " . $name . "<br>";
    echo "Email: " . $email;

    // Here you can insert into database if not exists
}
?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$to = "vlad2008202113@gmail.com";
$subject = "Mail From website";
$txt = "Name = ". $name ."\r\n Email = " . $email . "\r\n City =" . $city;

$headers = "From: vladdavimuka1@gmail.com" . "\r\n" . "CC: vlad2008202113@gmail.com";

if($email!=NULL){
    mail($to,$city,$txt,$headers);
}
header('Location:thanks.html')

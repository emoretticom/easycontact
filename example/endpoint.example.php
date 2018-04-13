<?php

//Include your contact form configuration
include_once (__DIR__ . DIRECTORY_SEPARATOR."config/config.example.php");

require_once (__DIR__ . DIRECTORY_SEPARATOR."core/Contact.php");
use emoretti\easycontact\Contact;

//Instanciate the Contact class
$myContact = new Contact();

//Call the execute method
return $myContact->execute();
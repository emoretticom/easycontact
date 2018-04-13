<?php

/**
 * CONTACT FORM DATA AND TYPES
 * 
 * type accepted (string, email, text, number)
 * 
 */

define ( "CONTACT_DATA", [ 
							[ "name", "string"],
							[ "email", "email" ],
							[ "phone_number", "string" ],
							[ "ticket_id", "number" ],
							[ "object", "string"],
							[ "message", "text" ]
						 ]);

define ("CONTACT_SUCCESS_MESSAGE","Message sent successfully!.");

define ("CONTACT_FAILED_MESSAGE","Impossible to send message!.");

//Set to false in production 
define ("SEND_DEBUG_ERROR", TRUE);

/**
 * REQUIRE_TYPE 
 * Il method con il quale arriveranno i dati
 * 
 * POSSIBLE VALUE (POST  GET)
 */
define("REQUIRE_TYPE","POST");

/**
 * AJAX
 * Verrà usato ajax per inviare i dati
 * 
 * POSSIBLE VALUE (TRUE FALSE)
 */
define("AJAX", FALSE);

/**
 * AJAX_RESPONSE
 * Quale tipo di response utilizzare in caso di utilizzo di ajax
 * 
 * 
 * POSSIBLE VALUE (JSON TEXT)
 */
define("AJAX_RESPONSE", "JSON");


/**
 * CONTACT_STORING
 * Il messaggio deve essere salvato in un db?
 * 
 * TRUE FALSE
 * @var unknown
 */

define("CONTACT_STORING", TRUE);

/**
 * DATABASE CONNECTION DATA
 * @var unknown
 */
define("CONTACT_DB_HOST", "localhost");
define("CONTACT_DB_NAME", "contact");
define("CONTACT_DB_TABLE", "received_contact");
define("CONTACT_DB_USER", "root");
define("CONTACT_DB_PWD", "root");

/**
 * SEND_EMAIL
 * deve essere inviata una email di ricezione del contatto?
 * 
 * @var unknown
 */
define("SEND_EMAIL", TRUE);

/**
 * EMAIL ADDRESSES AND OBJECT
 * @var unknown
 */
define("EMAIL_TO", "");
define("EMAIL_CC", "");
define("EMAIL_OBJECT", "");
define("EMAIL_HTML", TRUE);

/**
 * EMAIL_TEMPLATE
 * vuoi usare un template HTML per la mail?
 * 
 */

define("EMAIL_TEMPLATE","template/email.example.html");















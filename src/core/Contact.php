<?php
namespace emoretti\easycontact;

require_once(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."config.php");


class Contact {
	public function __construct() {
		echo "<pre>";
		print_r(CONTACT_DATA);
		exit;
	}


	public function execute(){
	}

}

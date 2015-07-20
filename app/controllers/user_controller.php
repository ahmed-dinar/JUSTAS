<?php

class user extends Controller{

	function __construct() {
        parent::__construct(); 
    }

    public function index(){
    	Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
    	require_once SITE_PATH.'/app/controllers/error_controller.php';
	    $control = new error();
	    $control->index();
	    return FALSE;
    }

    public function recoverpassword(){
    	echo "<h1>Under Construction!</h1>";
    }

}
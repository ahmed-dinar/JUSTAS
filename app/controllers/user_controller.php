<?php

class user extends Controller{

	function __construct() {
        parent::__construct(); 
    }

    public function index(){
    	return miscellaneous::Error();
    }

    public function recoverpassword(){
    	echo "<h1>Under Construction!</h1>";
    }

}
<?php

/*
* 
*/

class resister extends Controller{
	
	function __construct() {
        parent::__construct(); 
    }

    //the base index function of error controller
    public function index(){
    	$this->view->render("resister/index");
    }

  
    
	
}
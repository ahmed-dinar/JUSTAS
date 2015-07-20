<?php

class admissionform extends Controller{

	function __construct() {
        parent::__construct(); 
    }

	public function index(){
		$this->view->render("admissionform/index");
	}	

	public function run(){
		
	}

}
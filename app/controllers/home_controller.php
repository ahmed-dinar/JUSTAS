<?php

class home extends Controller{

	function __construct() {
        parent::__construct(); 
    }

	public function index(){
		$this->view->render("home/index");
	}

	public function test(){
		echo "Inside index test<br />";
	}

}
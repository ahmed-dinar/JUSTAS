<?php

class admissionform extends Controller{

	function __construct() {
        parent::__construct(); 
    }

	public function index(){
		$this->view->render("admissionform/index");
	}	

	public function run(){
		if( Input::exists('post') ){

            //check if form loaded propely
            if( Token::check(Input::get('token')) ){
                echo $this->model->process();


    
            	
            }
            else{
                return miscellaneous::Error();
            }

		}
		else{
			return miscellaneous::Error();
		}
	}

}
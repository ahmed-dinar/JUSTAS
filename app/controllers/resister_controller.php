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

    //run the resistration process
  	public function run(){

  		//check if the run request from submition form
  		if( Input::exists('post') ){

  			//check if form loaded propely
  			if( Token::check(Input::get('token')) ){
  				echo "Resitration Processing...";
  			}
  			else{
  				require_once SITE_PATH.'/app/controllers/error_controller.php';
	            $control = new error();
	            $control->index();
	            return FALSE;
  			}
  		}
  		else{
  			require_once SITE_PATH.'/app/controllers/error_controller.php';
            $control = new error();
            $control->index();
            return FALSE;
  		}

  	}
    
	
}
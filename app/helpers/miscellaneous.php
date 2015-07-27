<?php

class miscellaneous{

	public static function getYearList($count=3){
          $currentYear = date('Y');
          $earliest_year = $currentYear - $count;
          $ret = array();
          foreach (range(date('Y'), $earliest_year) as $x) {
              $ret[] = $x;
          }
          return $ret;
	}


	public static function errorPopup($message="",$bg="",$foreground="#fff"){
		$ret  = '<div id="flushes" ><h3 style="background: '.$bg.' none repeat scroll 0% 0%; color:'.$foreground.'">';
		$ret .= $message;
		$ret .= '</h3><img  class="pop-close" src="'. SITE_URL .'/public/img/close_icon.png" /></div>';
		return $ret;
	}

	public static function Error(){
		Session::flush('sure','404: Page does not exists!<br/>Are you sure what you are looking for?');
		require_once SITE_PATH.'/app/controllers/error_controller.php';
        $control = new error();
        $control->index();
        return FALSE;
	}


}
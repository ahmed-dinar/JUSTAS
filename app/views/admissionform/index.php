<?php 

$user  = new Users();
if(!$user->isLoggedIn()){
	Session::flush('signin-first','You need to log in to apply');
	header('Location: ' . SITE_URL . '/login');
	exit();
}

?>

	<script>
		jQuery(document).ready(function(){
			jQuery("#application-form").validationEngine();
			$("#application-form").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});
	</script>



  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>

<form action="#" id="" class="form-style">

  <!-- fieldsets -->
  <fieldset id="first">

    <div>
      <label for="">Full Name : </label>
      <div>
        <input name="" type="text" value="" size="8" tabindex="1">
      </div>
    </div>
      
    <div>
      <label for="">Email : </label>
      <div>
        <input name="" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
     </div>
    </div>
      
    <div>
      <label for="">Message : </label>
      <div>
        <textarea name="" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
      </div>
    </div>

    
    <div>
      <label for=""> Select a Choice : </label>
      <div>
        <select name="" tabindex="11"> 
          <option value="First Choice">First Choice</option>
          <option value="Second Choice">Second Choice</option>
          <option value="Third Choice">Third Choice</option>
        </select>
      </div>
    </div>
    
    <div>
      <div>
        <input type="button" name="" class="next_btn" value="Next" />
      </div>
    </div>
  </fieldset>


  <!-- fieldsets -->
  <fieldset>

    <div>
      <label for="">Roll : </label>
      <div>
        <input name="" type="text" value="" size="8" tabindex="1">
      </div>
    </div>
      
    <div>
      <label for="">Resistration : </label>
      <div>
        <input name="" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
     </div>
    </div>

    
    <div>
      <label for=""> Board : </label>
      <div>
        <select name="" tabindex="11"> 
          <option value="First Choice">First Choice</option>
          <option value="Second Choice">Second Choice</option>
          <option value="Third Choice">Third Choice</option>
        </select>
      </div>
    </div>
    
    <div>
      <div>
        <input type="button" name="previous" class="pre_btn" value="Previous" />
      </div>
    </div>
  </fieldset>


  
  
</form>
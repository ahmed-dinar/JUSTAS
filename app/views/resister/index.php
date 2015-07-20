<?php 

$user  = new Users();
if($user->isLoggedIn()){
	header('Location: ' . SITE_URL);
	exit();
}

?>


<div id="fs">

	<h3>Sign Up</h3>

	<script>
		jQuery(document).ready(function(){
			
			// binds form submission and fields to the validation engine
			jQuery("#resform").validationEngine();

			$("#resform").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })

		});
	</script>


	<form action="<?php echo SITE_URL; ?>/resister/run" id="resform" method="post" >

		<input value="" class="validate[required,maxSize[30],minSize[3],ajax[ajaxUserCallPhp]] in-fl" type="text" name="res-id" placeholder="User ID" id="r-id" />

		<input type="password" name="res-pass" placeholder="Password" class="validate[required,maxSize[20],minSize[6]] in-fl" id="pass" />
		<input type="password" name="res-con-pass" placeholder="Confirm Password" class="validate[required,equals[pass]] in-fl" data-prompt-position="bottomRight:0,12" />

		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" >

		<input type="submit" name="resister-b" class="res-button  action-button" value="Resister" />

	</form>



</div>
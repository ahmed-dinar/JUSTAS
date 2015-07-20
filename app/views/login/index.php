<?php 

$user  = new Users();
if($user->isLoggedIn()){
	$location = SITE_URL;
	header('Location: ' . $location);
	exit();
}
else{

	if(Session::exists('resSuccess')){
		echo '<div id="flushes" style="background: #4C9CDF;"><h3>';
		echo Session::flush('resSuccess');
		echo "</h3></div>";
	}
	
	if(Session::exists('error-login')){
		echo '<div id="flushes" style="background: red;"><h3>';
		echo Session::flush('error-login');
		echo "</h3></div>";
	}	

	if(Session::exists('signin-first')){
		echo '<div id="flushes" style="background: red;"><h3>';
		echo Session::flush('signin-first');
		echo "</h3></div>";
	}

?>

	

	<script>
		jQuery(document).ready(function(){
			jQuery("#logform").validationEngine();
			$("#logform").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});
	</script>


	<div id="fs" >
		<h3>Sign In</h3>
		<form action="<?php echo SITE_URL; ?>/login/run" id="logform" method="post" >
			<input type="text" name="log-id" placeholder="User ID" class="validate[required] in-fl" />
			<input type="password" name="log-password" placeholder="Password" class="validate[required] in-fl" />

				<input type="checkbox" name="remember"  /><label>Remember me</label>
				<span><a href="<?php echo SITE_URL; ?>/user/recoverpassword" >Forgot your password?</a></span>

			<br/>
			<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" >
			<input type="submit" name="log-b" class="action-button" value="Login" />
		</form>
	</div>

<?php
}
?>




<div id="fs" >
	<h3>Sign In</h3>
	<form id="logform">
		<input type="text" name="log-id" placeholder="User ID" class="validate[required] in-fl" />
		<input type="password" name="log-password" placeholder="Password" class="validate[required] in-fl" />

			<input type="checkbox" name="remember"  /><label>Remember me</label>
			<span><a href="" >Forgot your password?</a></span>

		<br/>
		<input type="button" name="next" class="log-b next action-button" value="Login" />
	</form>
	 <script type="text/javascript">
	 	$(".log-b").click(function(){  
	 		$("#logform").validationEngine('validate');
	 	});
	 </script>
</div>
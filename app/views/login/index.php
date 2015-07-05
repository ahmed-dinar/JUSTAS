<div id="fs">
	<h3>Sign In</h3>
	<form id="logform">
		<input type="text" name="log-email" placeholder="Email" class="validate[required] in-fl" />
		<input type="password" name="log-password" placeholder="Password" class="validate[required] in-fl" />
		<input type="button" name="next" class="log-b next action-button" value="Login" />
	</form>
	 <script type="text/javascript">
	 	$(".log-b").click(function(){  
	 		$("#logform").validationEngine('validate');
	 	});
	 </script>
</div>
<div id="fs">
	<h3>Sign Up</h3>
	<form id="resform">
		<input type="text" name="res-name" placeholder="Name" class="validate[required] in-fl" />
		<input type="text" name="res-email" placeholder="Email" class="validate[custom[email]] in-fl" />
		<input type="password" name="res-password" placeholder="Password" class="validate[required] in-fl" />
		<input type="password" name="res-con-password" placeholder="Confirm Password" class="validate[required] in-fl" />
		<input type="button" name="resister" class="res-button next action-button" value="Resister" />
	</form>
		<script type="text/javascript">
	 	$(".res-button").click(function(){  
	 		$("#resform").validationEngine('validate');
	 	});
	 	</script>
</div>



<div id="fs">

	<h3>Sign Up</h3>


	<script>
		jQuery(document).ready(function(){
			jQuery("#resform").validationEngine();

			jQuery("#resform").validationEngine('attach', {
				  onValidationComplete: function(form, status){
				    	if( status == false ){
				    		return 0;
				    	}

				    	var URL = "<?php echo SITE_URL; ?>" + '/user/check';
				    	var formData = {
				            'userid' : $('input[name=res-id]').val()
				        };

				    	$.ajax({
							type: "POST",
							url: URL,
							dataType  : 'json',
							data : formData,
							success: function (data) {
							   
								alert(data.msg);

						 	}
						});


				  }  
			});

			$("#resform").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});
	</script>
	

	<form action="<?php echo SITE_URL; ?>/resister/run" id="resform" method="post" >

		<input type="text" name="res-id" placeholder="User ID" class="validate[required,maxSize[20]] in-fl" />

		<input type="password" name="res-pass" placeholder="Password" class="validate[required] in-fl" />
		<input type="password" name="res-con-pass" placeholder="Confirm Password" class="validate[required] in-fl" />

		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" >





		<input type="submit" name="resister-b" class="res-button next action-button" value="Resister" />
		
	</form>



</div>
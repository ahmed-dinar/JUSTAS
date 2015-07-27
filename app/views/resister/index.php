<?php 

$user  = new Users();
if($user->isLoggedIn()){
	header('Location: ' . SITE_URL);
	exit();
}

?>


<div id="fs">

	<h3>Sign Up</h3>

	<script type="text/javascript">
		jQuery(document).ready(function(){
			
			// binds form submission and fields to the validation engine
			//jQuery("#resform").validationEngine();

		jQuery("#resform").validationEngine({ 'custom_error_messages': {
            '#recaptcha_response_field': {
                'required': {
                    'message': "********"
                }
            }
        }
        });




			$("#resform").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })

		});
		var RecaptchaOptions = {
			lang : 'en',
			theme : 'custom',
    		custom_theme_widget: 'recaptcha_widget'
		};


	</script>



	<form action="<?php echo SITE_URL; ?>/resister/run" id="resform" method="post" >

			<fieldset>
				<input value="" class="validate[required,maxSize[30],minSize[3],ajax[ajaxUserCallPhp]] in-fl" type="text" name="res-id" placeholder="User ID" id="r-id" />

				<input type="password" name="res-pass" placeholder="Password" class="validate[required,maxSize[20],minSize[6]] in-fl" id="pass" />
				
				<input type="password" name="res-con-pass" placeholder="Confirm Password" class="validate[required,equals[pass]] in-fl" data-prompt-position="bottomRight:0,12" />


				<!-- Google Recaptcha -->
					<div id="recaptcha_widget" style="display:none">
						<div id="recaptcha_image"></div>
						<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" placeholder="type the words above" class="validate[required,funcCall[checkHELLO]]" data-prompt-position="bottomRight:0,12" /><br/>
						<input type="button" value="I'm not a robot" class="v-btn" id="var-btn" />
						<a  title="Get a new challenge" href="javascript:Recaptcha.reload()"><img style="background:#0988CB;border-radius:3px;" src="<?php echo SITE_URL; ?>/public/img/reload.png" alt="Get a new challenge"></a>
						<a  href="javascript:Recaptcha.showhelp()"><img style="background:#0988CB;border-radius:3px;" src="<?php echo SITE_URL; ?>/public/img/help.png" alt="Get a new challenge"></a>
						<img src="http://www.google.com/recaptcha/api/img/clean/logo.png" id="recaptcha_logo" alt="" style="height:36px; width:71px; margin-left:50px;" />
					</div>

					 <script type="text/javascript"
					    src="http://www.google.com/recaptcha/api/challenge?k=6LeMXwoTAAAAAA0gW3cRzwrtlLT1tQmaCAkVynG5">
					 </script>
					 <noscript>
					   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeMXwoTAAAAAA0gW3cRzwrtlLT1tQmaCAkVynG5"height="300" width="500" frameborder="0"></iframe><br>
					   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
					   </textarea>
					   <input type="hidden" name="recaptcha_response_field"value="manual_challenge">
					 </noscript>
				<!--   ***********       -->


				<input type="hidden" name="token" value="<?php echo Token::generate(); ?>" >
				<input type="submit" name="resister-b" class="btn" value="Resister" style="margin-top:20px;" />

		</fieldset>
	</form>
	<script src="<?php echo SITE_URL; ?>/public/js/recaptcha_handler.js" type="text/javascript" ></script>


</div>
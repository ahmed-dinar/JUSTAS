		jQuery(document).ready(function(){

			$(document).on('click','#var-btn',function(){

				$(this).removeClass('v-btn');
				$(this).addClass('v-btn-loading');
				$(this).attr('value','Varifying..');


				$.ajax({
					url: 'http://localhost/justas/captcha',
	            	type: 'post',
	           		dataType : "json",
	           		timeout: 1000,
	           		data: $('#resform').serialize(),
					success: function(response) { 

						$("#var-btn").removeClass('v-btn-loading');
						$("#var-btn").addClass('v-btn');
						$("#var-btn").attr('value',"I'm not a robot");
						
					   	if(response){
					   		
					    	$("#recaptcha_widget").html('<div id="var-div"><img src="http://localhost/justas/public/img/ok.png" alt="You are not a robot!" width="40" height="40" ><h4>Varified! You\'re not a robot!</h4></div>');
					    }
					    else{
					    	Recaptcha.reload();
					    }
					 },
					 error: function(objAJAXRequest, strError) {
					 	$("#var-btn").removeClass('v-btn-loading');
						$("#var-btn").addClass('v-btn');
						$("#var-btn").attr('value',"I'm not a robot");
					  	alert(strError);
					}
				});


			});
		
		});

		function checkHELLO(field, rules, i, options){
     		return options.allrules.validate2fields.alertText;
		}
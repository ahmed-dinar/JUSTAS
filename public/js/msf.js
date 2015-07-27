		jQuery(document).ready(function(){


			$('.con-b').click(function() {	

				var html = "";
			    var i = 1;
			   $.each($('#application-form').serializeArray(), function(i, field) {
            if(field.name!='token'){
    					html += '<div><h4>' + 
    				      field.name +
    				      ' : </h4>' + 
    				      getf(i,field.value) +
    				    '</div>';
            }
				    i++;

			    });

			   	html += '<div class="btn-dv">' + 
					        '<input type="button" name="previous" class="btn prev-btn" value="Prev" />' +
					        '<input type="submit" name="" class="btn" value="Submit" />' +
					    '</div>';

			    $("#review").html(html);

			});

			$(document).on('click', '.next-btn', function(){ 
				$(this).parent().parent().next().fadeIn('slow');
				$(this).parent().parent().css({'display':'none'});
				$('.active').next().addClass('active');
			});
		
			$(document).on('click', '.prev-btn', function(){  
				$(this).parent().parent().prev().fadeIn('slow');
				$(this).parent().parent().css({'display':'none'});
				$('.active:last').removeClass('active');
			});

			
			jQuery("#application-form").validationEngine();
			$("#application-form").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});


		function getf(i,s){
			var ret = '';
			if(i>5 && i<8){
				ret += '<textarea readonly>' + s   + '</textarea>';
			}
			else{
				ret += '<input type="text" value=" '  + s  +  '" readonly />';
			}
			return ret;
		}

			$(function(){
				$( "#Datepicker" ).datepicker({
			
               		changeMonth:false,
               		changeYear:true,
               		dateFormat: 'yy-mm-dd'

				});
			});
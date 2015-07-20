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


			$('.con-b').click(function() {	

				var html = "";
			    var i = 1;
			   $.each($('#application-form').serializeArray(), function(i, field) {
					html += '<div><label for="">' + 
				      field.name +
				      ' : </label>' + 
				      '<div>' +
				      getf(i,field.value) +
				      '</div>' + 
				    '</div>';
				    i++;
			    });

			   	html += '<div>' + 
					      '<div>' + 
					        '<input type="button" name="previous" class="pre_btn" value="Previous" />' +
					        '<input type="submit" name="" class="" value="Submit" />' +
					      '</div>' +
					    '</div>';

			    $("#all-f").html(html);

			});

			$(document).on('click', '.next_btn', function(){ 
				$(this).parent().parent().parent().next().fadeIn('slow');
				$(this).parent().parent().parent().css({'display':'none'});
				$('.active').next().addClass('active');
			});
		
			$(document).on('click', '.pre_btn', function(){  
				$(this).parent().parent().parent().prev().fadeIn('slow');
				$(this).parent().parent().parent().css({'display':'none'});
				$('.active:last').removeClass('active');
			});

			
			jQuery("#application-form").validationEngine();
			$("#application-form").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});


		function getf(i,s){
			var ret = '';
			if(i>5 && i<8){
				ret += '<textarea rows="3" cols="65" border="1px solid #eee" readonly>' + s   + '</textarea>';
			}
			else{
				ret += '<input type="text" class="show-input"  value=" '  + s  +  '" readonly />';
			}
			return ret;
		}

	</script>



  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Detail</li>
    <li>Educational Detail</li>
    <li>Confirm</li>
  </ul>

  
<form action="<?php echo SITE_URL; ?>/admissionform/run" method ="post" id="application-form" class="form-style">

  <!-- fieldsets -->
  <fieldset id="first">

    <div>
      <label for="">Full Name : </label>
      <div>
      	<input type="text"  class="validate[required] input-field" name="Full-Name"   />
      </div>
    </div>    

    <div>
      <label for="">Father's Name : </label>
      <div>
        <input type="text"  class="validate[required] input-field" name="Father-Name"   />
      </div>
    </div>    

    <div>
      <label for="">Mother's Name : </label>
      <div>
        <input type="text"  class="validate[required] input-field" name="Mother-Name"   />
      </div>
    </div>

    <div>
      <label for="">Gender : </label>
      <div>
        <select name="Gender" class="validate[required] input-field"> 
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
    </div>
      
      
    <div>
      <label for="">Date of Birth : </label>
      <div>
        <input placeholder="YYYY-MM-DD" value="" class="validate[required,custom[date]] input-field" type="text" name="BirthDay" /> 
      </div>
    </div>    

    <div>
      <label for="">Nationality : </label>
      <div>
        	<select name="Nationality" class="sel-input" >
				<option value="Bangladeshi">Bangladeshi</option>
			</select>
      </div>
    </div>    

    <div>
      <label for="">Present Adress : </label>
      <div>
        <textarea rows="3" cols="50" name="Present-Adress" class="validate[required] input-field" ></textarea> 
      </div>
    </div> 

    <div>
      <label for="">Permanent Adress : </label>
      <div>
        <textarea rows="3" cols="50" name="Permanent-Adress" class="validate[required] input-field" ></textarea> 
      </div>
    </div>    

    <div>
      <label for="">Contact Number : </label>
      <div>
        <input type="text" name="Contact-Number"  class="validate[required,custom[phone]] input-field"  autocomplete="off" />
      </div>
    </div>

    
    <div>
      <label for="">Upload Photo (240x240) : </label>
      <div>
        <input type="file" name="Photo" onchange="readURL(this);" >
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

  <h3 class="e-heading">Secondary School Certificate (SSC)</h3>

  	 <div>
  	 <label for="">Roll : </label>
      <div>
        <input type="text" name="SSC-Roll"  class="validate[required,custom[integer]] input-field"  autocomplete="off" />
      </div>
    </div>  

    <div>
      <label for="">Board : </label>
      <div>
        <select name="SSC-Board" class="validate[required] input-field" >
			<option value="" selected>Select One</option>
			<option value="barisal">Barisal</option>
			<option value="chittagong">Chittagong</option>
			<option value="comilla">Comilla</option>
		    <option value="dhaka">Dhaka</option>
			<option value="dinajpur">Dinajpur</option>
			<option value="jessore">Jessore</option>
		    <option value="rajshahi">Rajshahi</option>
		    <option value="sylhet">Sylhet</option>
		    <option value="madrasah">Madrasah</option>
			<option value="tec">Technical</option>
			<option value="dibs">DIBS(Dhaka)</option>
		</select> 
      </div>
    </div>     


    <div>
      <label for="">Passing Year : </label>
      <div>
        <select name="SSC-Year" class="validate[required] input-field" >
								<option value="" selected>Select</option>
								<option value="2015" selected>2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
							</select>
      </div>
    </div>     

    <div>
      <label for="">Group : </label>
      <div>
        <select name="SS-CGroup" class="validate[required] input-field">
								<option value="" selected>Select</option>
								<option value="Science">Science</option>
								<option value="Arts">Arts</option>
								<option value="Commerce">Commerce</option>
							</select>
      </div>
    </div>    

    <div>
      <label for="">GPA : </label>
      <div>
        <input type="text" name="SSC-Gpa"  class="validate[required,custom[number]] input-field"  autocomplete="off" />
      </div>
    </div>   	 

    <h3 class="e-heading">Higher Secondary School Certificate (HSC)</h3>

    <!-- HSC -->
    <div>
  	 <label for="">Roll : </label>
      <div>
        <input type="text" name="HSC-Roll"  class="validate[required,custom[integer]] input-field"  autocomplete="off" />
      </div>
    </div>  

    <div>
      <label for="">Board : </label>
      <div>
        <select name="HSC-Board" class="validate[required] input-field" >
			<option value="" selected>Select One</option>
			<option value="barisal">Barisal</option>
			<option value="chittagong">Chittagong</option>
			<option value="comilla">Comilla</option>
		    <option value="dhaka">Dhaka</option>
			<option value="dinajpur">Dinajpur</option>
			<option value="jessore">Jessore</option>
		    <option value="rajshahi">Rajshahi</option>
		    <option value="sylhet">Sylhet</option>
		    <option value="madrasah">Madrasah</option>
			<option value="tec">Technical</option>
			<option value="dibs">DIBS(Dhaka)</option>
		</select> 
      </div>
    </div>     


    <div>
      <label for="">Passing Year : </label>
      <div>
        <select name="HSC-Year" class="validate[required] input-field" >
								<option value="" selected>Select</option>
								<option value="2015" selected>2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
							</select>
      </div>
    </div>     

    <div>
      <label for="">Group : </label>
      <div>
        <select name="HSC-Group" class="validate[required] input-field">
								<option value="" selected>Select</option>
								<option value="Science">Science</option>
								<option value="Arts">Arts</option>
								<option value="Commerce">Commerce</option>
							</select>
      </div>
    </div>    

    <div>
      <label for="">GPA : </label>
      <div>
        <input type="text" name="HSC-Gpa"  class="validate[required,custom[number]] input-field"  autocomplete="off" />
      </div>
    </div>  


    <div>
      <div>
        <input type="button" name="previous" class="pre_btn" value="Previous" />
        <input type="button" name="" class="next_btn con-b" value="Next" />
      </div>
    </div>

  </fieldset>


  <fieldset id="all-f">




  </fieldset>

  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" >
  
  
</form>
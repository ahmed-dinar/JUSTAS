<?php 

$user  = new Users();
if(!$user->isLoggedIn()){
  Session::flush('signin-first','You need to log in to apply');
  header('Location: ' . SITE_URL . '/login');
  exit();
}


?>

  <script type="text/javascript">

   /* jQuery(document).ready(function(){

      $("#step2Form").validationEngine();
      $("#step2Form").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) });

    });*/


  </script>


<form action="<?php echo SITE_URL; ?>/admissionform/step3" method="POST" id="step2Form" >

	<div>
        <h4>Applicant's Name</h4>
        <input type="text" value="<?php echo $admission_name; ?>"  class="validate[required]" name="name" />
      </div>      

      <div>
        <h4>Father's Name</h4>
        <input type="text" value="<?php echo $admission_father_name; ?>"  class="validate[required]" name="father_name" />
      </div>      

      <div>
        <h4>Mother's Name</h4>
        <input type="text" value="<?php echo $admission_mother_name; ?>"  class="validate[required]" name="mother_name" />
      </div>      

      <div>
        <h4>Gender</h4>
        <select name="gender" class="validate[required]">
            <option value="">Select One</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
      </div>      

      <div>
        <h4>Date of Birth</h4>
        <input type="text" value="<?php echo $admission_name; ?>" name="dob" class="validate[required,custom[date]]" id="Datepicker" /> 
      </div>      

      <div>
        <h4>Nationality</h4>
        <select name="nationality" class="validate[required]" >
          <option value="Bangladeshi">Bangladeshi</option>
        </select>
      </div>      

      <div>
        <h4>Present Adress</h4>
        <textarea rows="5" value="<?php echo $admission_preadress; ?>" name="pre_adress" class="validate[required] " >Xxa</textarea> 
      </div> 

      <div>
        <h4>Permanent Adress</h4>
        <textarea rows="5" value="<?php echo $admission_peradress; ?>"  name="per_adress" class="validate[required]" >ax</textarea>
      </div>      

      <div>
        <h4>Contact Number</h4>
        <input type="text" value="<?php echo $admission_contact; ?>" name="contact"  class="validate[required,custom[phone]]" />
      </div>      

      <div>
        <h4>Upload Photo(240x240)</h4>
        <!--<input type="file" value="515" name="photo" onchange="readURL(this);" class="validate[required]" >-->
      </div>   


	<div class="btn-dv">
	     <input onclick="window.location='<?php echo SITE_URL; ?>/admissionform/step1' " type="button" class="btn prev-btn" value="Prev" />
	     <input type="submit" class="btn con-b" value="Next" />
	</div>

</form>
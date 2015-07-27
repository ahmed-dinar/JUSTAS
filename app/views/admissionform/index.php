<?php 

$user  = new Users();
if(!$user->isLoggedIn()){
	Session::flush('redirect',SITE_URL . '/admissionform');
  Session::flush('signin-first','You need to log in to apply');
	header('Location: ' . SITE_URL . '/login');
	exit();
}

?>

  <script type="text/javascript" src="<?php echo SITE_URL; ?>/public/js/msf.js" charset="utf-8"></script>



  <!-- progressbar 
  <ul id="progressbar">
    <li class="active">Personal Detail</li>
    <li>Educational Detail</li>
    <li>Confirm</li>
  </ul>-->

  
<form action="<?php echo SITE_URL; ?>/admissionform/run" method ="post" id="application-form" class="con-form" >

    <!--FIELDSET-->
    <fieldset id="first">

     

      <div>
        <h4>Student's Name</h4>
        <input type="text"  class="validate[required]" name="Full-Name" />
      </div>      

      <div>
        <h4>Father's Name</h4>
        <input type="text"  class="validate[required]" name="Father-Name" />
      </div>      

      <div>
        <h4>Mother's Name</h4>
        <input type="text"  class="validate[required]" name="Mother-Name" />
      </div>      

      <div>
        <h4>Gender</h4>
        <select name="Gender" class="validate[required]"> 
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
      </div>      

      <div>
        <h4>Date of Birth</h4>
        <input type="text" name="Birthday" class="validate[required,custom[date]]" id="Datepicker" /> 
      </div>      

      <div>
        <h4>Nationality</h4>
        <select name="Nationality" class="validate[required]" >
          <option value="Bangladeshi">Bangladeshi</option>
        </select>
      </div>      

      <div>
        <h4>Present Adress</h4>
        <textarea rows="5" name="Present-Adress" class="validate[required] " ></textarea> 
      </div> 

      <div>
        <h4>Permanent Adress</h4>
        <textarea rows="5"  name="Permanent-Adress" class="validate[required]" ></textarea>
      </div>      

      <div>
        <h4>Contact Number</h4>
        <input type="text" name="Contact-Number"  class="validate[required,custom[phone]]" />
      </div>      

      <div>
        <h4>Upload Photo(240x240)</h4>
        <input type="file" name="Photo" onchange="readURL(this);" class="validate[required]" >
      </div>      


       <div class="btn-dv">
            <input type="button" class="btn next-btn" value="Next" />
        </div>
    </fieldset>   


    <!--FIELDSET-->
    <fieldset>

      <h5>Secondary School Certificate (SSC)</h5>

      <div>
        <h4>Roll</h4>
        <input type="text" name="SSC-Roll"  class="validate[required,custom[integer]]" />
      </div>   

      <div>
        <h4>Resistration</h4>
        <input type="text" name="SSC-Res"  class="validate[required,custom[integer]]" />
      </div>     

       <div>
        <h4>Session</h4>
        <input type="text" name="SSC-Session"  class="validate[required,custom[integer]]" />
      </div>         

      <div>
        <h4>Passing Year</h4>
        <input type="text" name="SSC-PY"  class="validate[required,custom[integer]]" />
      </div>     

      <div>
        <h4>Board</h4>
        <select name="SSC-Board" class="validate[required]" >
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

      <div>
        <h4>Group</h4>
        <select name="SSC-Group" class="validate[required]">
          <option value="" selected>Select</option>
          <option value="Science">Science</option>
          <option value="Arts">Arts</option>
          <option value="Commerce">Commerce</option>
        </select>
      </div>      

      <div>
        <h4>GPA</h4>
        <input type="text" name="SSC-Gpa"  class="validate[required,custom[number]]" />
      </div>      



      <h5 style="margin-top:40px;">Higher Secondary School Certificate (HSC)</h5>

      <div>
        <h4>Roll</h4>
        <input type="text" name="HSC-Roll"  class="validate[required,custom[integer]]" />
      </div>     

      <div>
        <h4>Resistration</h4>
        <input type="text" name="HSC-Res"  class="validate[required,custom[integer]]" />
      </div>     

       <div>
        <h4>Session</h4>
        <input type="text" name="HSC-Session"  class="validate[required,custom[integer]]" />
      </div>     

      <div>
        <h4>Passing Year</h4>
        <input type="text" name="HSC-PY"  class="validate[required,custom[integer]]" />
      </div>  

      <div>
        <h4>Board</h4>
        <select name="HSC-Board" class="validate[required]" >
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

      <div>
        <h4>Group</h4>
        <select name="HSC-Group" class="validate[required]">
          <option value="" selected>Select</option>
          <option value="Science">Science</option>
          <option value="Arts">Arts</option>
          <option value="Commerce">Commerce</option>
        </select>
      </div>      

      <div>
        <h4>GPA</h4>
        <input type="text" name="HSC-Gpa"  class="validate[required,custom[number]]" />
      </div> 
 

      <div class="btn-dv">
            <input type="button" class="btn prev-btn" value="Prev" />
            <input type="button" class="btn next-btn con-b" value="Next" />
      </div>
    </fieldset>

    <fieldset id="review"></fieldset>


  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
  
</form>
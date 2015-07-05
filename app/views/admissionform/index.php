<!-- multistep form -->
<div  class="mf-container">


	<form action="#" method ="get" id="application-form" >

		<div id="progressbar-container">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active-progressbar">Step 1</li>
				<li>Step 2</li>
				<li>Step 3</li>
			</ul>
		</div>

		
		<!-- fieldsets -->
		<fieldset id="mf-fs-first" class="mf-fs" >
			<legend>Personal Details</legend>

				
			<table id="af-tables" >
				<tbody>
					<tr>
						<th class="cell">Full Name</th> 
						<td class="cell"><input type="text"  class="validate[required] in-f" name="fullname"  autocomplete="off" /> </td>
					</tr>
					<tr>
						<th class="cell">Father's Name</th>
						<td class="cell"><input type="text" name="father's name"  class="validate[required] in-f"  autocomplete="off" /></td>
					</tr>					
					<tr>
						<th class="cell">Mother's Name</th>
						<td class="cell"><input type="text" name="mother's name"  class="validate[required] in-f"  autocomplete="off" /></td>
					</tr>
					<tr>
						<th class="cell">Gender</th>
						<td class="cell">				
							<select name="gender" class="sel-input">
								<option value="">Select</option>
								<option value="">Male</option>
								<option value="">Female</option>
							</select>
						</td>
					</tr>					
					<tr>
						<th class="cell">Date of Birth</th>
						<td class="cell">				
							<select name="birthday" class="validate[required] sel-input" >
								<option value="">Month</option>
								<option value="01">January</option>
								<option value="02">February</option>
								<option value="03" >March</option>
								<option value="04">April</option>
								<option value="05">May</option>
								<option value="06">June</option>
								<option value="07">July</option>
								<option value="08">August</option>
								<option value="09">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12" >December</option>
							</select> 
							<input type="text" name="day" class="validate[required] sel-input" autocomplete="off" placeholder="day"  /> 
							<input type="text" name="year" class="validate[required] sel-input" autocomplete="off" placeholder="year"  /> 
						</td>
					</tr>
					<tr>
						<th class="cell">Nationality</th>
						<td class="cell">				
							<select name="Nationality" class="sel-input" >
								<option value="">Bangladeshi</option>
							</select>
						</td>
					</tr>
					<tr>
						<th class="cell">Present Adress</th>
						<td class="cell">				
							<textarea rows="3" cols="50" name="present adress" ></textarea> 
						</td>
					</tr>	
					<tr>
						<th class="cell">Permanent Adress</th>
						<td class="cell">				
							<textarea rows="3" cols="50" name="permanentadress" ></textarea> 
						</td>
					</tr>	
					<tr>
						<th class="cell">Contact Number</th>
						<td class="cell"><input type="text" name="mobile"  class="validate[required] in-f"  autocomplete="off" /></td>
					</tr>
					<tr>
						<th class="cell">Upload Photo (240x240) </th>
						<td class="cell"><input type="file" name="photo" onchange="readURL(this);" ></td>
					</tr>
				</tbody>
			</table>

			<div id="photo-area">
				<img id="view-photo" src="#" alt="your image" />
			</div>

			<script src="<?php echo SITE_URL; ?>/public/js/photo-viwer.js" ></script>


			<input type="button" name="next" class="next_btn action-button bt_btn" id="" value="Next" />
		</fieldset>


		<!-- fieldsets -->
		<fieldset class="mf-fs" >
			<legend>Eduacational Details</legend>


			<h4>SSC</h4>
			<table id="af-tables" >
				<tbody>
					<tr>
						<th class="cell">Roll</th>
						<td class="cell">				
							<input type="text" name="roll"  class="validate[required] in-f"  autocomplete="off" />
						</td>
					</tr>
					<tr>
						<th class="cell">Board</th>
						<td class="cell">				
							<select name="board" class="validate[required] sel-input" >
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
						</td>
					</tr>				
					<tr>
						<th class="cell">Passing Year</th>
						<td class="cell">				
							<select name="year" class="validate[required] sel-input" >
								<option value="" selected>Select</option>
								<option value="2015" selected>2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
							</select> 
						</td>
					</tr>
					<tr>
						<th class="cell">Group</th>
						<td class="cell">				
							<select name="group" class="validate[required] sel-input">
								<option value="" selected>Select</option>
								<option value="2015">Science</option>
								<option value="2014">Arts</option>
								<option value="2013">Commerce</option>
							</select> 
						</td>
					</tr>
					<tr>
						<th class="cell">GPA</th>
						<td class="cell">				
							<input type="text" name="gpa"  class="validate[required] in-f"  autocomplete="off" />
						</td>
					</tr>
				</tbody>
			</table>

			<h4>HSC</h4>
			<table id="af-tables" >
				<tbody>
					<tr>
						<th class="cell">Roll</th>
						<td class="cell">				
							<input type="text" name="roll"  class="validate[required] in-f"  autocomplete="off" />
						</td>
					</tr>
					<tr>
						<th class="cell">Board</th>
						<td class="cell">				
							<select name="board" class="validate[required] sel-input">
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
						</td>
					</tr>				
					<tr>
						<th class="cell">Passing Year</th>
						<td class="cell">				
							<select name="year" class="validate[required] sel-input">
								<option value="" >Select</option>
								<option value="2015" selected>2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
							</select> 
						</td>
					</tr>
					<tr>
						<th class="cell">Group</th>
						<td class="cell">				 
							<select  name="group" class="validate[required] sel-input">
								<option value="" >Select</option>
								<option value="2015" selected>Science</option>
								<option value="2014">Arts</option>
								<option value="2013">Commerce</option>
							</select> 
						</td>
					</tr>
					<tr>
						<th class="cell">GPA</th>
						<td class="cell">				
							<input type="text" name="gpa"  class="validate[required] in-f"  autocomplete="off" />
						</td>
					</tr>
				</tbody>
			</table>



			<!-- buttons -->
			<input type="button" name="previous" class="pre_btn action-button bt_btn" value="Previous" />
			<input type="button" name="next" class="next_btn action-button" id="check-fields" value="Next" />
		</fieldset>


		<!-- fieldsets -->
		<fieldset class="mf-fs" >
			<legend>Confirm</legend>

			<p id="results"></p>

	

			<!-- buttons -->
			<input type="button" class="pre_btn action-button bt_btn"  value="Previous" />
			<input type="submit" class="submit_btn action-button" value="Submit" />
		</fieldset>

	</form>

	<script src="<?php echo SITE_URL; ?>/public/js/multi_step_form.js"></script>


</div>
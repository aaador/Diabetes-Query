
	<br/><br/>
	<?php echo validation_errors();?>
	<form method="post" action="<?php echo site_url('Sign_up/save_patient');?>">
	  <div class="form-group">
	    <label for="email">Patient Name</label>
	    <input type="text" class="form-control" id="email" name="full_name" placeholder="Full Name" required="required">
	  </div>
	  <div class="form-group">
	    <label for="email">Patient Email</label>
	    <input type="email" class="form-control" id="pwd" name="email" placeholder="Email Address" required="required">
	  </div>
	  <div class="form-group">
	    <label for="password">Patient Password</label>
	    <input type="password" class="form-control" id="email" name="password" placeholder="Password" required="required">
	  </div>
	  <div class="form-group">
	    <label for="phone">Patient Phone</label>
	    <input type="number" class="form-control" id="pwd" name="phone" placeholder="Mobile No" required="required">
	  </div>
	  <div class="form-group">
	    <label for="age">Patient Age</label>
	    <input type="number" class="form-control" id="email" name="age" placeholder="Age" required="required">
	  </div>
	  <div class="form-group">
	    <label for="email">Patient Sex</label>
	    <input type="text" class="form-control" id="pwd" name="sex" placeholder="Male / Female" required="required">
	  </div>
	  <div class="form-group">
	    <label for="email">Diabetes Identification Date</label>
	    <input type="date" class="form-control" id="email" name="d_identified_date" placeholder="Date" required="required">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Diabetes Level</label>
	    <input type="text" class="form-control" id="pwd" name="d_level" placeholder="High / Medium / Low" required="required">
	  </div>
	  <div class="form-group">
	    <label for="pwd">City</label>
	    <input type="text" class="form-control" id="pwd" name="city" placeholder="City" required="required">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Blood Group</label>
	    <input type="text" class="form-control" id="pwd" name="blood" placeholder="EG: A+" required="required">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form><br/><br/>
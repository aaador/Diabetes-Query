
	<br/><br/>
	<?php echo validation_errors();?>
	<form method="post" action="<?php echo site_url('Sign_up/save_doctor');?>">
	  <div class="form-group">
	    <label for="email">Name</label>
	    <input type="text" class="form-control" id="email" name="full_name" placeholder="Full Name" required="required">
	  </div>
	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" id="pwd" name="email" placeholder="Email Address" required="required">
	  </div>
	  <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="email" name="password" placeholder="Password" required="required">
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone</label>
	    <input type="number" class="form-control" id="pwd" name="phone" placeholder="Mobile No" required="required">
	  </div>
	  <div class="form-group">
	    <label for="age">Degree</label>
	    <input type="text" class="form-control" id="email" name="degree" placeholder="Degree" required="required">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Doctor Type</label>
	    <input type="text" class="form-control" id="pwd" name="type" placeholder="Type" required="required">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form><br/><br/>
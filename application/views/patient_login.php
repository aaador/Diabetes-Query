
	<h3>Patient Login</h3>
	<?php echo validation_errors();?>
	<form method="post" action="<?php echo site_url('Patient_Login/auth');?>">
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email" required="required">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd" name="password" required="required">
	  </div>
	  <button type="submit" class="btn btn-default">Sign In</button>
	  <a href="<?php echo site_url('Sign_up');?>" class="btn btn-success">Patient Sign Up</a>
	  <a href="<?php echo site_url('Doctor_Login');?>" class="btn btn-success">Doctor's Login</a>
	</form>
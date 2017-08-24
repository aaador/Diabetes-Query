<div style="text-align: center;">
	<?php
		$is_logged_in = $this->session->userdata('is_logged_in');
		$type = $this->session->userdata('type');?>

	<a href="<?php echo site_url();?>" class="btn btn-primary">Home</a>
	<?php
		if($is_logged_in && $type==0){?>
	<a href="<?php echo site_url('Tip');?>" class="btn btn-info">Tips</a>
	<a href="<?php echo site_url('Check');?>" class="btn btn-info">Diabetes Check</a>
	<?php } ?>

	<?php
		if($is_logged_in){?>
			<a href="<?php echo site_url('Regular_info');?>" class="btn btn-primary">Regular Health Info</a>
			<a href="<?php echo site_url('My_profile');?>" class="btn btn-primary">My Profile</a>
	<?php } ?>

	<a href="<?php echo site_url('Medication');?>" class="btn btn-info">Medication</a>
	<a href="<?php echo site_url('Consultant');?>" class="btn btn-default">Consultants</a>
	<a href="<?php echo site_url('Emergency');?>" class="btn btn-warning">Emergency</a>

	<?php
		if($is_logged_in && $type==0){?>
			<a href="<?php echo site_url('Patient_Login/logout');?>" class="btn btn-danger">Log Out</a>
	<?php } else if($is_logged_in && $type==1){?>
			<a href="<?php echo site_url('Doctor_Login/logout');?>" class="btn btn-danger">Log Out</a>
	<?php 
		}else {?>
			<a href="<?php echo site_url('Patient_Login');?>" class="btn btn-success">Log In</a>
	<?php } ?>

	<br/><br/>
</div>
<?php
	$type = $this->session->userdata('type');

	if($type==0){?>
	<p>Name: <?php echo $info['patient_name'];?></p>
	<p>Email: <?php echo $info['patient_email'];?></p>
<?Php } else { ?>

	<p>Name: Dr. <?php echo $info['doctor_name'];?></p>
	<p>Email: <?php echo $info['doctor_email'];?></p>

<?Php } ?>
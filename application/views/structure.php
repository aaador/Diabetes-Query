<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="Diabetes" content="all">

		<title>Diabetes Query</title>
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>css/sweetalert.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.css">

		<link rel="shortcut icon" href="<?php echo base_url();?>images/smile.png">

	</head>

	<body style="background-image: url('./images/diabetes.jpg'); background-size: cover; background-repeat: no-repeat;">
<br/><br/>
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<?php

					if(!isset($only_body))
					{
						$this->load->view('header');
					}
					
					$this->load->view($body_page);
				?>
			</div>

			<div class="col-md-2"></div>
		</div>
	</body>
</html>
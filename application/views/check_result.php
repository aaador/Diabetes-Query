

	<?php 
		if($total>20)
			echo '<h3>Diabetes High</h3>';
		else if($total>10)
			echo '<h3>Diabetes Medium</h3>';
		else
			echo '<h3>Diabetes Low</h3>';
	?>
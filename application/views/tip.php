
<?php
	if(!$tips){

		echo '<h3> No tip found</h3>';

	}else{
		$count=0;
		foreach($tips as $row){
			$count++;?>

		<h4><?php echo $count.'. '.$row['tip'];?></h4>

<?php }
	}?>
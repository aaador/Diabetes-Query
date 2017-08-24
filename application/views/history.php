<br/>
<?php 
	$type = $this->session->userdata('type');
	$is_logged_in=$this->session->userdata('is_logged_in');
	if($is_logged_in && $type==1){?>
		<a class="btn btn-success" href="<?php echo site_url('Tip/add_tip/'.$patient_id);?>">Give Tip</a><br/><br/>
<?php }?>
<table class="table table-bordered table-hover">
	<thead>
		<th>#</th>
		<th>Date</th>
		<th>Sugar level</th>
		<th>Calorie Burned</th>
	</thead>
	<tbody>
		<?php
			if(!$info){
				echo '<h3>No History Found!</h3>';
			}else{
				$count = 0;
				foreach($info as $row){
					$count++;?>
				<tr>
					<td><?php echo $count;?></td>
					<td><?php echo date('d-M-y', $row['check_date']);?></td>
					<td><?php echo $row['sugar_level'];?></td>
					<td><?php echo $row['calorie_burned'];?></td>
				</tr>
		<?php }
			} ?>
	</tbody>
</table>
<?php 
	if(!$doctors)
	{
		echo '<h3>No doctor found!</h3>';
	}else{?>

			<table class="table table-responsive table-hover">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Degree</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Specialist</th>
				</thead>
				<tbody>
		<?php $count=0;
			foreach($doctors as $row){
				$count++;?>
					<tr>
						<td><?php echo $count;?></td>
						<td><?php echo $row['doctor_name'];?></td>
						<td><?php echo $row['doctor_degree'];?></td>
						<td><?php echo $row['doctor_email'];?></td>
						<td><?php echo $row['doctor_phone'];?></td>
						<td><?php echo $row['doctor_type'];?></td>
					</tr>
		
				<?php }
				}
			?>
				</tbody>
			</table>
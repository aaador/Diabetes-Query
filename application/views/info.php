<?php
  $type = $this->session->userdata('type');

  if($type==0){?>

<a class="btn btn-success" href="<?php echo site_url('Regular_info/history');?>">History</a><br/><br/>

<form class="form-horizontal" method="post" action="<?php echo site_url('Regular_info/save_info');?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputEmail3" placeholder="Date" name="check_date" required value="<?php print(date("Y-m-d"));?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Sugar Level</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="EG: Mg/DL" name="sugar_level" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Calorie Burned</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="EG: K Cal" name="calorie_burned" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>
<?php }else{?>

  <h3>Patients List</h3>

  <table class="table table-responsive table-bordered table-hover">
    <thead>
      <th>#</th>
      <th>Patient Name</th>
      <th>Patinet Age</th>
      <th>Diabetes level</th>
      <th>Diabetes Identification Date</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
        $count = 0;
        foreach($patients as $row){
          $count++;?>

        <tr>
          <td><?php echo $count;?></td>
          <td><?php echo $row['patient_name'];?></td>
          <td><?php echo $row['patient_age'];?></td>
          <td><?php echo $row['d_level'];?></td>
          <td><?php echo date('d-M-y', $row['d_identified_date']);?></td>
          <td><a href="<?php echo site_url('Regular_info/history/'.$row['patient_id']);?>" class="btn btn-success">View</a></td>
        </tr>

        <?Php } ?>
    </tbody>
  </table>

<?php } ?>
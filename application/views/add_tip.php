
<form method="post" action="<?php echo site_url('Tip/save_tip/'.$patient_id);?>">
	<textarea class="form-control" rows="3" name="tip" placeholder="New Tip"></textarea><br/>
	<button type="submit" class="btn btn-success">Save</button>
</form>
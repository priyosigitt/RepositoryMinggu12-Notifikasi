<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Notifikasi</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/jquery-3.2.1.min.js"></script>
</head>
<style>
	#notifications {
		cursor: pointer;
		position: center;
		right: 0px;
		z-index: 9999;
		margin-bottom: 22px;
		margin-right: 0px;
		min-width: 300px;
		max-width: 800px;
	}
</style>

<body>
	<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
	<br>
	<div class="col-sm-6 col-sm-offset-4">
		<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/welcome/insert_data" class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-6">
					<input type="text" class="form-control" name="kata" />
				</div>
				<div class="col-sm-6">
					<button type="submit" class="btn btn-default ">Submit</button>
				</div>
			</div>
		</form>
	</div>

	<script>
		$('#notifications').slideDown('slow').delay(3000).slideUp('slow');
	</script>
</body>

</html>
<?php include 'incs/header.php'; ?>
  <body>
  	  <style>
body {
  background-image: url('<?php //echo base_url(); ?>assets/img/shop.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="" style="font-weight:bold">
		<!-- <span class="text-success">Admin</span> <span style="color:#ccc; text-shadow:0 1px #fff"></span> -->
			</h2>
	    </div>

		<div class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<br><br><br><br><br><br>	
			<div class="panel panel-default">
				<div class="panel-heading">
	
	<?php if ($das = $this->session->flashdata('massage')): ?>

<div class="row">
<div class="col-md-12">
<div class="alert alert-dismisible alert-success">
<a href="" class="close">&times;</a>
<?php echo $das;?>
</div>
</div>
</div>
<?php endif; ?>
				</div>
				<?php if (@$phone_data->comp_phone == TRUE) {
			?>
				<div class="panel-body">
						<?php echo form_open("welcome/update_password/{$comp_data->comp_id}",['class'=>'form-login']) ?>
						<div class="form-group">
							<label>New password</label>
							<input type="password" placeholder="******" name="new_password" class="form-control input-lg " required  autocomplete="off">
							<?php echo form_error("new_password") ?>
						</div>
						
						<div class="form-group">
							<label>Confirm password</label>
							<input type="password" name="password" placeholder="******" class="form-control input-lg" autocomplete="off" required >
							  <?php echo form_error("password"); ?>
						</div>
					
						<div class="text-center">
							<button type="submit" class="btn btn-success">Change password</button> 
							 <a href="<?php echo base_url("welcome/admin_login"); ?>" class="btn btn-primary btn-sm">Back</a>
						</div>
					<?php echo form_close(); ?>

				</div>
			<?php 	}else{  ?>
					<div class="panel-body">
						<?php //echo form_open("welcome//",['class'=>'form-login']) ?>
						
						
					
						<div class="text-center">
					     <h4><b style="color:red;">Phone Number  Not Exist</b></h4><br>
					     <a href="<?php echo base_url("welcome/admin_login"); ?>" class="btn btn-primary btn-sm">Back</a>
						</div>

					<?php echo form_close(); ?>

				</div>
				<?php } ?>
			</div><!-- /panel -->
			</div>
			<div class="col-md-4"></div>
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->
	
<?php include 'incs/footer.php'; ?>
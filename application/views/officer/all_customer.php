<?php include('incs/header_1.php'); ?>
<?php include('incs/side_1.php'); ?>
<?php include('incs/subheader.php'); ?>
	


<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">					
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
   
</div>
<!-- end:: Subheader -->										
<!-- begin:: Content -->
<!-- begin:: Content -->


<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<!--begin::Portlet-->
	<?php if ($das = $this->session->flashdata('massage')): ?>
	  <div class="alert alert-success fade show alert-success" role="alert">
                            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                            <div class="alert-text"><?php echo $das;?></div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                  </div>
         <?php endif; ?>

<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon-list-2"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				All Customer List
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
	<div class="kt-portlet__head-actions">

	
		&nbsp;
		<a href="<?php echo base_url("oficer/print_allCustomer"); ?>" class="btn btn-brand btn-elevate btn-icon-sm" target="_blank">
			<i class="flaticon-technology"></i>
			Print
		</a>
	</div>	
</div>		</div>
	</div>

	<div class="kt-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
									     <thead>
			  						          <tr>
		  							 <th>S/No.</th>
									<th>Customer ID no</th>
									<th>customer name</th>
									<th>Date of Birth</th>
									<th>Sex</th>
									<th>Phone number</th>
									<th>Region</th>
									<th>Date</th>
									<th>Status</th>
									
				  									
				  									
				  						         </tr>
						                  </thead>
			
								    <tbody>
                                          <?php $no = 1; ?>
									<?php foreach($customer  as $customers): ?>
									          <tr>
				  					<td><?php echo $no++; ?>.</td>
				  					<td><?php echo $customers->customer_code; ?></td>
				  					<td><?php echo $customers->f_name; ?> <?php echo $customers->m_name; ?> <?php echo $customers->l_name; ?></td>
				  					<td><?php echo $customers->date_birth; ?></td>
				  					<td><?php echo $customers->gender; ?></td>
				  					<td><?php echo $customers->phone_no; ?></td>
				  						<td><?php echo $customers->region_name; ?></td>
				  						<td><?php echo substr($customers->customer_day, 0,10); ?></td>
				  						<td>
				 	<?php if ($customers->customer_status == 'open') {
				 ?>
				 <a href="#" class="badge badge-success">Active</a>
				<?php }elseif ($customers->customer_status == 'close') {
				 ?>
				 <a href="#" class="badge badge-danger">Closed</a>
				 <?php }elseif($customers->customer_status == 'pending'){ ?>
				 	<a href="#" class="badge badge-warning">Pending</a>
				 <?php } ?>
				                        </td>
				  				
				  				<td>	
			
</td>			  											  							
</tr>

<?php endforeach; ?>
									
	                
		<!--end: Datatable -->
	</div>
</div>
</div>
<!-- end:: Content -->
<!-- end:: Content -->
				</div>				
				
<?php include('incs/footer_1.php') ?>
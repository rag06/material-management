<?php $this->load->view('admin/layout/header.php');?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
	<?php $this->load->view('admin/layout/mainHeader.php');?>
	<?php $this->load->view('admin/layout/sideBar.php');?>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Transaction
            <small>Add Your Transaction</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="<?php echo base_url() ;?>/admin/transaction/transaction/index">Manage Transaction</a></li>
            <li class="active"><a href="#">Add Transaction</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
				 <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Add Transaction </h3>
						</div><!-- /.box-header -->
						  <div class="box-body">
							<form method="post" name="addTransaction" action="<?php echo base_url() ;?>/admin/transaction/transaction/insertTransaction">
								 <?php
								echo "<div class='error_msg'>";
								if (isset($error_message)) {
								echo $error_message;
								}
								echo validation_errors();
								echo "</div>";
								?>
								<div class="row">
									<div class="form-group col-md-4">
									  <label for="item"> Item </label>
										<select  class="form-control select2" id="item" name="item">
											<option value=""> Select a Item</option>
									  <?php 
											foreach ($items['result'] as $itemRow){
												echo '<option value="'.$itemRow->Items_Id.'">'.$itemRow->Items_Name.'</option>';
											}
									  ?>
									  </select>
									</div>
									<div class="form-group col-md-4">
									  <label for="type"> Transaction Type</label>
									  <select class="form-control" name="type" id="type">
										<?php 
													echo'<option value="0" selected>Withdrawl</option>
														<option value="1" >Credited</option>';
										?>
									  </select>
									</div>
									<div class="form-group  col-md-4">
									  <label for="qty"> Item quantity</label>
									  <input type="text" class="form-control" id="qty" name="qty" required>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group col-md-6">
									  <label for="to">Transaction To/From</label>
									   <input type="text" class="form-control" id="to" name="to" required>
									</div>
									<div class="form-group col-md-6">
									  <label for="bus">On Bus (if applicable)</label>
									   <select  class="form-control select2" id="bus" name="bus">
											<option value=""> Select a Bus</option>
									  <?php 
											foreach ($bus['result'] as $busRow){
												echo '<option value="'.$busRow->bus_number.'">'.$busRow->bus_number.'</option>';
											}
									  ?>
									  </select>
									</div>
								</div>
							
								<a href="<?php echo base_url() ;?>/admin/transaction/transaction/index" class="btn btn-success btn-sm">Cancel</a>
								<button type="submit" class="btn btn-primary pull-right admin-btn">Save Changes </button>
							</form>
						  </div><!-- /.box-body -->
					</div><!--box end-->
			</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
     <?php $this->load->view('admin/layout/footer.php');?>
	 <script>
	 $(function() {
	  $("form[name='addTransaction']").validate({
		// Specify validation rules
		rules: {
		  // The key name on the left side is the name attribute
		  // of an input field. Validation rules are defined
		  // on the right side
		  item: {
			required:true
		  },
		  type: "required",
		  qty: {
			required:true,
			digits: true
		  },
		  to: "required"
		},
		// Specify validation error messages
		messages: {
		  item: "Please select item ",
		  type: "Please select Transaction Type",
		  qty: "Please enter a valid Quantity",
		  to: "Please enter Transaction To/Form"
		},
		// Make sure the form is submitted to the destination defined
		// in the "action" attribute of the form when valid
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});
	 </script>
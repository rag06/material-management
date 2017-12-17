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
            Edit Items
            <small>Edit Your Items</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="<?php echo base_url() ;?>/admin/items/items/index">Manage Items</a></li>
            <li class="active"><a href="#">Add Items</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
				 <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Edit Items </h3>
						</div><!-- /.box-header -->
						  <div class="box-body">
							<form method="post" name="editItems" action="<?php echo base_url() ;?>/admin/items/items/updateItems">
								<input type="hidden" name="itemId" value="<?php echo $result[0]['Items_Id']; ?>"/>
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
									  <label for="itemName"> Item Name</label>
									  <input type="text" class="form-control" id="itemName" name="itemName" value="<?php echo $result[0]['Items_Name']; ?>" required>
									</div>
									<div class="form-group  col-md-4">
									  <label for="itemBrand"> Item Brand</label>
									  <input type="text" class="form-control" id="itemBrand" name="itemBrand"  value="<?php echo $result[0]['Items_Brand']; ?>">
									</div>
									<div class="form-group col-md-4">
									  <label for="itemType"> Items Type</label>
									  <select class="form-control" name="itemType" id="itemType">
										<?php 
												if($result[0]['Items_Type']==1){
													echo'<option value="0" >Stationary</option>
														<option value="1" selected>Workshop</option>';
												} else{
														echo'<option value="0" selected>Stationary</option>
														<option value="1" >Workshop</option>';
												}
										?>
									  </select>
									</div>
								</div>
								
								<div class="row">
									<div class="form-group col-md-12">
									  <label for="itemDesc"> Item Description</label>
									  <textarea class="form-control" id="itemDesc" name="itemDesc" rows="5" required><?php echo $result[0]['Items_Description']; ?></textarea>
									</div>
								</div>
							
								<a href="<?php echo base_url() ;?>/admin/items/items/index" class="btn btn-success btn-sm">Cancel</a>
								<button type="submit" class="btn btn-primary pull-right admin-btn">Save Changes </button>
							</form>
						  </div><!-- /.box-body -->
					</div><!--box end-->
			</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
		
     <?php $this->load->view('admin/layout/footer.php');?>
	 <script>
	 $(function() {
	  $("form[name='editItems']").validate({
		// Specify validation rules
		rules: {
		  // The key name on the left side is the name attribute
		  // of an input field. Validation rules are defined
		  // on the right side
		  itemName: {
			required:true
		  },
		  itemBrand: "required",
		  itemDesc: "required",
		  itemType: "required"
		},
		// Specify validation error messages
		messages: {
		  itemName: "Please enter item Name",
		  itemBrand: "Please enter item Brand",
		  itemDesc: "Please enter item Description",
		  itemType: "Please enter Items Type"
		},
		// Make sure the form is submitted to the destination defined
		// in the "action" attribute of the form when valid
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});
	 </script>
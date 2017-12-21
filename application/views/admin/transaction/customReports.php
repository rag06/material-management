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
            Items List
            <small>Manage Your Items</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="#">Items List</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
				 <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Items Reports</h3>
						</div><!-- /.box-header -->
						  <div class="box-body">
								<form class="form" method="post" action="<?php echo base_url();?>admin/transaction/transaction/downloadTransactionReport" >
								<div class="row">
								<div class="col-md-5">
									<div class="form-group">
									  <label for="item">Items</label>
											<select  class="form-control select2" id="item" name="item">
												<option value=""> Select a Item</option>
												  <?php 
														foreach ($items['result'] as $itemRow){
															echo '<option value="'.$itemRow->Items_Id.'">'.$itemRow->Items_Name.'</option>';
														}
												  ?>
											  </select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										  <label for="busNumber">Bus Number</label>
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
								<div class="col-md-4">
								  <!-- Date and time range -->
								  <div class="form-group">
									<label>Date range:</label>

									<div class="input-group">
									  <input type="text" name="dateRange" class="btn btn-default pull-right" id="daterange-btn" placeholder="Select Date Range" required />
									</div>
								  </div>
								  <!-- /.form group -->
								</div>
								</div>
								<div class="row">
									<div class="col-md-3 pull-right">
										<input type="submit" class="btn btn-info btn-sm  pull-right" value="Search"/>
									</div>
								</div>
							</form>
						  </div><!-- /.box-body -->
					</div><!--box end-->
			</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php $this->load->view('admin/layout/footer.php');?>
	 <script>
		//Date range as a button
		$('#daterange-btn').daterangepicker(
			{
			  ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			  },
			  format: "YYYY-MM-DD",
			  startDate: moment().subtract(29, 'days'),
			  endDate: moment()
			},
			function (start, end) {
			  $('#daterange-btn').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
			}
		);
	 </script>
	 
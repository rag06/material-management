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
            Transactions List
            <small>Manage Your Transactions</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="#">Transactions List</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
				 <div class="box box-primary">
						<div class="box-header with-border">
						  <h3 class="box-title">Transactions List 
							<!--a class="btn btn-warning btn-sm " href="<?php echo base_url() ;?>admin/transaction/transaction/downloadTransactionsList" target="_blank">Export as PDF</a-->
						  </h3>
						</div><!-- /.box-header -->
						  <div class="box-body">
							<table id="webpagesList" class="table table-bordered table-hover">
								<thead>
								<tr>
								  <th style="width: 10px">#</th>
								  <th>Item Name</th>
								  <th>Transaction To</th>
								  <th>Type</th>
								  <th>Quantity</th>
								  <th>Date</th>
								</tr>
								</thead>
								<tbody>
								<?php 
								$i=1;
									foreach($result['result'] as $row){
										?>
									<tr>
									  <td><?php echo $i;?>.</td>
									  <td><?php echo $row->Items_Name;?></td>
									  <td><?php echo $row->transaction_To;?></td>
									  <td>
									  <?php if($row->transaction_Type==1){
												echo 'credited';
											}else{
												echo 'withdrawl';
											}
										?>
									</td>
									  <td><?php echo $row->transaction_Qty;?></td>
									  <td><?php echo $row->transaction_CreatedOn;?></td>
									</tr>
										<?php $i++;}?>
								</tbody>
								
							  </table>
						  </div><!-- /.box-body -->
					</div><!--box end-->
			</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php $this->load->view('admin/layout/footer.php');?>
	 
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?php echo base_url() ;?>admin/dashboard/dashboard"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
			<li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Items Mangement</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url()?>admin/items/items/addItems">Add a Item</a></li>
                <li><a href="<?php echo base_url()?>admin/items/items/index">Manage Items</a></li>
                <li><a href="<?php echo base_url()?>admin/items/items/reports">Reports Items</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Transaction Management</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url()?>admin/transaction/transaction/addTransaction">Add a Transaction</a></li>
                <li><a href="<?php echo base_url()?>admin/transaction/transaction/index">Manage Transaction</a></li>
                <li><a href="<?php echo base_url()?>admin/transaction/transaction/reports">Reports Transaction</a></li>
              </ul>
            </li>
			<?php if($this->session->userdata['logged_in']['role']==1) {?>
            <li><a href="<?php echo base_url() ;?>admin/bus/bus"><i class="fa fa-link"></i> <span>Bus List</span></a></li>
			<li class="treeview">
			  <a href="#"><i class="fa fa-link"></i> <span>Admin User Management</span> <i class="fa fa-angle-left pull-right"></i></a>
			  <ul class="treeview-menu">
				<li><a href="<?php echo base_url()?>admin/admin/users/addUser">Create Admin</a></li>
				<li><a href="<?php echo base_url()?>admin/admin/users">Manage Admin</a></li>
			  </ul>
			</li>
					
					
			<?php }?>
           
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

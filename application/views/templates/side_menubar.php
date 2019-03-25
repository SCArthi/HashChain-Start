<aside class="main-sidebar">
    <section>
      
      <ul class="sidebar-menu" data-widget="tree">
        
        
            <li id="OrderMainNav">
              <a href="#">
                <span>Orders</span>
              </a>
              <ul>
                <li id="createOrderSubMenu"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-circle-o"></i> Add Order</a></li>
                <li id="manageOrderSubMenu"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-circle-o"></i> Manage Orders</a></li>
              </ul>
            </li>


            <li id="PorderMainNav">
              <a href="#">
                <span>Purchase Orders</span>
              </a>
              <ul>
                <li id="createPorderSubMenu"><a href="<?php echo base_url('porders/create') ?>"><i class="fa fa-circle-o"></i> Add Purchase Order</a></li>
                <li id="managePorderSubMenu"><a href="<?php echo base_url('porders') ?>"><i class="fa fa-circle-o"></i> Manage Purchase Orders</a></li>
              </ul>
            </li>
         

            <li id="userMainNav">
              <a href="#">
                <span>Users</span>
              </a>
              <ul>
                <li id="createUserSubNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i> Add User</a></li>
                <li id="manageUserSubNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> Manage Users</a></li>
              </ul>
            </li>

         
            <li id="customerMainNav">
              <a href="#">
                <span>Customers</span>
              </a>
              <ul>
                <li id="createCustomerSubNav"><a href="<?php echo base_url('customers/create') ?>"><i class="fa fa-circle-o"></i> Add Customer</a></li>
                <li id="manageCustomerSubNav"><a href="<?php echo base_url('customers') ?>"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
              </ul>
            </li>


          <li id="storesMainNav"><a href="<?php echo base_url('stores/') ?>"><i class="fa fa-circle-o"></i> <span>Stores</span></a></li>
         
            <li id="productMainNav">
              <a href="#">
                <span>Products</span>
              </a>
              <ul>
                <li id="createProductSubMenu"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-circle-o"></i> Add product</a></li>
                <li id="manageProductSubMenu"><a href="<?php echo base_url('products') ?>"><i class="fa fa-circle-o"></i> Manage Products</a></li>
              </ul>
            </li>

        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
  </aside>
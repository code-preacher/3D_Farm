         <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/avatar2.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php $n=$crud->displayLoginUser($_SESSION['id']); echo $n['name']?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
       </div>
       <!-- search form -->
       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="view-user.php"><i class="fa fa-eye"></i>View Users</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Topics</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-topic.php"><i class="fa fa-plus"></i>Add Topics</a></li>
            <li><a href="view-topic.php"><i class="fa fa-eye"></i>View Topics</a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Topics Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-topic-data.php"><i class="fa fa-plus"></i>Add Topics Data</a></li>
            <li><a href="view-topic-data.php"><i class="fa fa-eye"></i>View Topics Data</a></li>
          </ul>
        </li>


        <li>
          <a href="chat.php">
            <i class="fa fa-comments"></i> <span>Complain</span></a> </li>



            <li>
              <a href="profile.php">
                <i class="fa fa-user"></i> <span>Profile</span></a> </li>

                <li>
                  <a href="logout.php" onClick="return confirm('Are you sure you want to Logout?')">
                    <i class="fa fa-sign-out"></i> <span>Logout</span></a> </li>

                  </ul>
                </section>
                <!-- /.sidebar -->
              </aside>
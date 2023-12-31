<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('')}}" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              
              <img src="{{url('public/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align: center; font-weight:bold;">
      
      <span class="brand-text font-weight-light">Atul | Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if (Auth::user()->user_type == 1)
          <li class="nav-item menu-open">
            <a href="{{url('admin-home')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin Role Manage
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin-home/admin/all')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Admin</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Admin Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin-home/admin/new')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/studentDetails/allStudent')}}" class="nav-link @if(Request::segment(2) == 'studentDetails') active @endif">
              <i class="nav-icon fa-solid fa-person"></i>
              <p>Student Section</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/parentDetails/allParent')}}" class="nav-link @if(Request::segment(2) == 'parentDetails') active @endif">
              <i class="nav-icon fa-solid fa-user-group"></i>
              <p>Parent Section</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/class/all')}}" class="nav-link @if(Request::segment(2) == 'class') active @endif">
              <i class="nav-icon fa-solid fa-graduation-cap"></i>
              <p>Class</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/subject/all')}}" class="nav-link @if(Request::segment(2) == 'subject') active @endif">
              <i class="nav-icon fa-solid fa-book"></i>
              <p>Subject</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/assign/all')}}" class="nav-link @if(Request::segment(2) == 'assign') active @endif">
              <i class="nav-icon fa-solid fa-clipboard"></i>
              <p>Assign Subject</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/change_password')}}" class="nav-link @if(Request::segment(2) == 'change_password') active @endif">
              <i class="nav-icon fa-solid fa-lock-open"></i>
              <p>Change Password</p>
            </a>
          </li>
          @elseif (Auth::user()->user_type == 2)
          <li class="nav-item menu-open">
            <a href="{{url('admin-home')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Teacher Role Manage
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin-home/admin/all')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Admin Role</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('admin-home/change_password')}}" class="nav-link">
              <i class="nav-icon fa-solid fa-lock-open"></i>
              <p>Change Password</p>
            </a>
          </li>
          @elseif (Auth::user()->user_type == 3)
          <li class="nav-item menu-open">
            <a href="{{url('admin-home')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/change_password')}}" class="nav-link">
              <i class="nav-icon fa-solid fa-lock-open"></i>
              <p>Change Password</p>
            </a>
          </li>
          @elseif (Auth::user()->user_type == 4)
          <li class="nav-item menu-open">
            <a href="{{url('admin-home')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{url('admin-home/change_password')}}" class="nav-link">
              <i class="nav-icon fa-solid fa-lock-open"></i>
              <p>Change Password</p>
            </a>
          </li>
          @endif
          
          
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
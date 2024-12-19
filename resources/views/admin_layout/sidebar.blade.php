  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin/posts')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/joelAka.jpeg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/admin')}}" class="d-block">Joel Aka</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin')?'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link {{request()->is('admin')?'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{request()->is('admin/categories') || request()->is
          ('admin/addcategory') ?'menu-open': '' }}">
            <a href="#" class="nav-link {{request()->is('admin/categories') || request()->is 
            ('admin/addcategory') ?'active': '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/addcategory')}}" class="nav-link {{ request()->is
                 ('admin/addcategory') ?'active': '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/categories')}}" class="nav-link {{request()->is
                ('admin/categories')  ?'active': '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('admin/posts') || request()->is
            ('admin/addpost') ?'menu-open': '' }}">
            <a href="#" class="nav-link  {{request()->is('admin/posts') || request()->is
              ('admin/addpost') ?'active': '' }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Posts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item ">
                <a href="{{url('/admin/addpost')}}" class="nav-link  {{request()->is
                  ('admin/addpost') ?'active': '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Add post</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/posts')}}" class="nav-link  {{request()->is('admin/posts')  ?'active': '' }}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Posts</p>
                </a>
              </li>
            </ul>
          </li>




          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
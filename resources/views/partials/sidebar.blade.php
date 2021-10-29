<div class="sidebar">
  

    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      @auth
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @endauth
        @guest
        {{-- <p>  Please Login</p> --}}
        <div class="info">
          <label for="" class="d-block">Please Login</label>
        </div>
        @endguest
      </div>
    </div>
    


    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
       <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/erd" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Trending Music
            </p>
          </a>
        </li>
       <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-music"></i>
            <p>
              Show Music
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                  <a href="/genre" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Genre</p>
                  </a>
              </li>  
            <li class="nav-item">
              <a href="/band" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Band</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/music" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Music</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/rate" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rate</p>
              </a>
            </li>
          </ul>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link bg-danger" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <p>{{ __('Logout') }}</p>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>    
        @endauth
        @guest
        <li class="nav-item">
          <a href="/login" class="nav-link bg-warning">
            <i class="fas fa-sign-out-alt"></i>
            <p>Log In</p>
          </a>
        </li>
        @endguest

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
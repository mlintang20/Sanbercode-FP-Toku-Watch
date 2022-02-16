<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          @endauth
          @guest
          <a href="#" class="d-block">Guest</a>
          @endguest
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
                Dashboard : ERD
              </p>
            </a>
          </li>
            @auth
            <li class="nav-item">
              <a href="/profile" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/item" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Item
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/category" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>
                  Category
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/cart" class="nav-link">
                <i class="nav-icon fas fa-receipt"></i>
                <p>
                  Checkout
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link bg-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                {{ __(' Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            @endauth

            <!--Only appears when user is not logged in-->
            @guest
            <li class="nav-item">
              <a href="/item" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Item
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/category" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>
                  Category
                </p>
              </a>
            </li>
              <li class="nav-item">
                <a href="/login" class="nav-link bg-primary">
                  <i class="nav-icon fas fa-sign-in-alt"></i>
                  <p>
                    Login
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link bg-primary">
                  <i class="nav-icon fas fa-registered"></i>
                  <p>
                    Register
                  </p>
                </a>
              </li>
            @endguest
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
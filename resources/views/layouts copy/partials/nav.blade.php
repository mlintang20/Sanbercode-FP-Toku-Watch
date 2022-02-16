<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <form class="input-group mt-1" action="{{route('item.index')}}" method="GET">
          <input type="text" name="search" class="form-control form-control-sm" placeholder="Search">
          <div class="input-group-addon">
            <span class="input-group-text">
              <i class="fas fa-search"></i>
            </span>
          </div>
        </form>
        
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="/cart" class="nav-link background-primary">
          <i class="nav-icon fas fa-shopping-cart">
              @auth
              {{Cart::session(auth()->id())->getContent()->count()}}
              @endauth
            </i>
        </div>
        </a>
      </li>
    </ul>
  </nav>
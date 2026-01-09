 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contact-enquiry')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Enquiry </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.product-enquiry')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Product Enquiry</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.career-enquiry')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Career</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.sub-category')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Sub Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.products')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.settings') }}">
              <i class="mdi mdi-settings  menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>
          <li class="nav-item">
           <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="nav-link btn btn-link">
        <i class="mdi mdi-logout menu-icon"></i>
        <span class="menu-title">Log Out</span>
    </button>
</form>

          </li>
        </ul>
      </nav>
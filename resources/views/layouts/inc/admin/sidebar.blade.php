      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
              <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('admin/dashboard') }}">
                      <i class="mdi mdi-view-dashboard-variant menu-icon"></i>
                      <span class="menu-title">Dashboard</span>
                  </a>
              </li>
              <li class="nav-item {{ Request::is('admin/orders*') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('admin/orders') }}">
                      <i class="mdi mdi-sale menu-icon"></i>
                      <span class="menu-title">Orders</span>
                  </a>
              </li>
              <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}">
                  <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-controls="category"
                      aria-expanded="{{ Request::is('admin/category*') ? 'true' : 'false' }}">
                      <i class="mdi mdi-view-list menu-icon"></i>
                      <span class="menu-title">Category</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse {{ Request::is('admin/category*') ? 'show' : '' }}" id="category">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/category/creates') ? 'active' : '' }}"
                                  href="{{ url('admin/category/creates') }}">Add
                                  Category</a></li>
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/category') || Request::is('admin/category/*/edit') ? 'active' : '' }}"
                                  href="{{ url('admin/category') }}">View
                                  Category</a></li>
                      </ul>
                  </div>
              </li>

              <li class="nav-item {{ Request::is('admin/products*') ? 'active' : '' }}">
                  <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-controls="products"
                      aria-expanded="{{ Request::is('admin/products*') ? 'true' : 'false' }}">
                      <i class="mdi mdi-package-variant menu-icon"></i>
                      <span class="menu-title">Products</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse {{ Request::is('admin/products*') ? 'show' : '' }}" id="products">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a
                                  class="nav-link  {{ Request::is('admin/products/creating') ? 'active' : '' }}"
                                  href="{{ url('admin/products/creating') }}">Add
                                  Product</a></li>
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/products') || Request::is('admin/products/*/edit') ? 'active' : '' }}"
                                  href="{{ url('admin/products') }}">View
                                  Product</a></li>
                      </ul>
                  </div>
              </li>

              <li class="nav-item {{ Request::is('admin/brands') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('admin/brands') }}">
                      <i class="mdi mdi-animation-outline menu-icon"></i>
                      <span class="menu-title">Brands</span>
                  </a>
              </li>

              <li class="nav-item {{ Request::is('admin/colors') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('admin/colors') }}">
                      <i class="mdi mdi-animation-outline menu-icon"></i>
                      <span class="menu-title">Colors</span>
                  </a>
              </li>

              <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
                  <a class="nav-link" data-bs-toggle="collapse" href="#users"
                      aria-expanded="{{ Request::is('admin/users*') ? 'true' : 'false' }}" aria-controls="users">
                      <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                      <span class="menu-title">Users</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse {{ Request::is('admin/users*') ? 'show' : '' }}" id="users">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/users/creatt') ? 'active' : '' }}"
                                  href="{{ url('admin/users/creatt') }}"> Add User </a></li>
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/users') || Request::is('admin/users/*/edit') ? 'active' : '' }}"
                                  href="{{ url('admin/users') }}"> View Users </a></li>

                      </ul>
                  </div>
              </li>

              <li class="nav-item {{ Request::is('admin/sliders*') ? 'active' : '' }}">
                  <a class="nav-link" data-bs-toggle="collapse" href="#sliders"
                      aria-expanded="{{ Request::is('admin/sliders*') ? 'true' : 'false' }}" aria-controls="sliders">
                      <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                      <span class="menu-title">sliders</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse {{ Request::is('admin/sliders*') ? 'show' : '' }}" id="sliders">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/sliders/createSlider') ? 'active' : '' }}"
                                  href="{{ url('admin/sliders/createSlider') }}"> Add Slider </a></li>
                          <li class="nav-item"> <a
                                  class="nav-link {{ Request::is('admin/sliders') || Request::is('admin/sliders/*/edit') ? 'active' : '' }}"
                                  href="{{ url('admin/sliders') }}"> View Sliders </a></li>

                      </ul>
                  </div>
              </li>

              {{-- <li class="nav-item {{ Request::is('admin/sliders') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('admin/sliders') }}">
                      <i class="mdi mdi-home menu-icon"></i>
                      <span class="menu-title">Home Sliders</span>
                  </a>
              </li> --}}


              <li class="nav-item {{ Request::is('admin/settings') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('admin/settings') }}">
                      <i class="mdi mdi-cogs menu-icon"></i>
                      <span class="menu-title">Site Settings</span>
                  </a>
              </li>
          </ul>
      </nav>

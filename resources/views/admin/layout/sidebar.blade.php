  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-bold">LSTORE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Alexander Pierce</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">

                  <li class="nav-item">
                      <a href="dashboard" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Dashboard
                              {{-- <span class="right badge badge-danger">New</span> --}}
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Products
                              <i class="fas fa-angle-left right"></i>

                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="product" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>View Product</p>
                              </a>
                          </li>
                      </ul>

                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="addproduct" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Product</p>
                              </a>
                          </li>
                      </ul>

                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Product Setting</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Category
                              <i class="fas fa-angle-left right"></i>

                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Category</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Edit Category</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Orders
                              <i class="fas fa-angle-left right"></i>

                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pending Orders</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Shipped Orders</p>
                              </a>
                          </li>
                      </ul>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

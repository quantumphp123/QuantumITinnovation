<!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link">

      <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

           style="opacity: .8">

      <span class="brand-text font-weight-light">Quantum Admin</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

           <li class="nav-item">

            <a href="{{route('dashboard')}}" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Dashboard

              </p>

            </a>

          </li>

          <li class="nav-item">

            <a href="{{route('category.index')}}" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Category Management

              </p>

            </a>

          </li>

           <li class="nav-item">

            <a href="{{route('blog.index')}}" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Blogs Management

              </p>

            </a>

          </li>
          
          <li class="nav-item">

            <a href="/transaction" class="nav-link">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Transaction Management

              </p>

            </a>

          </li>

           <li class="nav-item">

            <a href="{{route('logout')}}" class="nav-link">

              <i class="nav-icon far fa-image"></i>

              <p>

                Logout

              </p>

            </a>

          </li>

       

       

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>
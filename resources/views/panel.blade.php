
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin')}}" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa-solid fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="img/avatar5.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                  {{$user->name}}
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <a href="{{ route('logout') }}"   
                  onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                Cerrar Sesion <i class="fa-solid fa-person-walking-dashed-line-arrow-right"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form>
                </div>
              </div>
              <!-- Message End -->
            </div>
            <div class="dropdown-divider"></div>
        </li>
        </ul>
       
        
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link" style="margin-left: 3.8rem!important;">
          <img src="img/logo.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">UNEFA</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{$user->name}}</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                @if(Auth::user()->hasRole('admin'))
                <ul class="nav nav-treeview">
                  @if($mostrar)
                        <li class="nav-item ">
                      <a href="{{route('admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Panel inicio</p>
                      </a>
                    </li>
                    @endif
                    <li class="nav-item " >
                      <a href="{{route('edit')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Editar tabla</p>
                      </a>
                    </li>
                    </ul> 
                  </li>
                
                @endif
                
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside> 
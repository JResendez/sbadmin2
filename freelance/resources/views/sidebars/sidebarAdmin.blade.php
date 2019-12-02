
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <!--<div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>-->
    <div class="sidebar-brand-text mx-3">Sistema Freelancer</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li @click="menu=0" class="nav-item active">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Finanzas
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li  class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Sistema de retiros</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <!--<h6 class="collapse-header">Custom Components:</h6>-->
        <a @click="menu=1" class="collapse-item" href="#">Metodos de retiro</a>
        <a @click="menu=2" class="collapse-item" href="#">Solicitudes de retiro</a>
        <a @click="menu=3" class="collapse-item" href="#">Log de retiros</a>
        </div>
    </div>
    </li>

    <!-- Nav Item -->
    <li @click="menu=4" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Metodos de Pago</span></a>
    </li>

    <!-- Nav Item -->
    <li @click="menu=5" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Historial de pagos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Usuarios
    </div>


    <!-- Nav Item -->
    <li @click="menu=6" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Manejo de usuarios</span></a>
    </li>

    <!-- Nav Item -->
    <li @click="menu=7" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Soporte técnico</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Proyectos
    </div>

    <!-- Nav Item -->
    <li @click="menu=8" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
        <span>Mis Proyectos</span></a>
    </li>

    <!-- Nav Item -->
    <li @click="menu=9" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
        <span>Gestión de Proyectos</span></a>
    </li>

    <!-- Nav Item -->
    <li @click="menu=10" class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
        <span>Gestión de Servicios</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

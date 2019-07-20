<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark cbg-primary-dark">
  <a class="navbar-brand" href="#">
  <img src="<?=base_url?>assets/img/logo.png" height="30" class="d-inline-block align-top"alt="mdb logo">
  Polleria mi angel
</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row" style="height: 83vh">
  <div class="col-2 pt-4 font-weight-bold" id="aside">
    <ul>
        <li><a href=""><i class="fas fa-hand-holding-heart"></i> Ventas</a></li>
        <li><a href="<?=base_url?>empleado/viewList"><i class="fas fa-user-friends"></i> Empleados</a></li>
        <li><a href="<?=base_url?>cliente/viewList"><i class="fas fa-users"></i> Clientes</a></li>
        <li><a href=""><i class="fas fa-drumstick-bite"></i> Productos</a></li>
        <li><a href=""><i class="fas fa-book-open"></i> Inventarios</a></li>
        <hr>
        <li>Extras</li>
        <li><a href=""><i class="fas fa-file-contract"></i> Notas</a></li>
        <li><a href=""><i class="far fa-money-bill-alt"></i> Gastos</a></li>
    </ul>
  </div>
  <div class="col-10" id="dashboard">


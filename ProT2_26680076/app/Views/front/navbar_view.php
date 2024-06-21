
<!--navegacion-->
<nav class="navbar navbar-expand-lg bg-body-blue">
  <div class="container-fluid">
  	<div class="navbar-header">
  		<a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
  			<!--logo de la empresa-->
  			<!img src="<?php echo base_url('assets/img/logo_empresa.jpg')?>" alt="marca" width="75" height="30" class="img-fluid">
  		</a>	
  	</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Lámparas</a></li>
                            <li><a class="dropdown-item" href="#">Proyectores</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Novedades</a></li>
                        </ul>
                    </li>
    </ul>
      <!--botones-->
      <div class="d-grid gap-2 d-md-block">
  <a class="btn btn-primary" href="sugerencias">Sugerencias</a>
  <button class="btn btn-primary" type="button">Mas Info</button>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
    <!--fin botones-->
  </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
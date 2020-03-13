<?php
  session_start();
  if (!isset($_SESSION['loggedIn'])) {
    header("Location: /dialisis");
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand text-white" >
      <img src="../dist/img/sfondo.png" height="80px">
    </a>
      <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="#" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="Desplegable" href="#">
            Atencion al Cliente
          </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Registro Paciente</a>
                <a class="dropdown-item" href="#">Llamadas para asignacion de cupos</a>
                <a class="dropdown-item" href="#">Ingresos</a>
                <a class="dropdown-item" href="#">Egresos</a>
                <a class="dropdown-item" href="#">Solicitudes de carnets</a>
                <a class="dropdown-item" href="#">Cambios de turno</a>
                <a class="dropdown-item" href="#">Constancias</a>
                <a class="dropdown-item" href="#">Encuestas de satisfaccion</a>
            </div>     
            
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="Desplegable" href="#">
                Psicologia
                </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Proceso psicologico</a>
              </div>

                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="Desplegable" href="#">
                    Trabajo Social
                  </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Estudio socieconomico</a>
              </div>
                         
              <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="Desplegable" href="#">
                    Datos estadisticos
                  </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Graficos</a>
              </div>


              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="Desplegable" href="#">
                Mantenimiento
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Clinica</a>
                <a class="dropdown-item" href="#">Departamento</a>
                <a class="dropdown-item" href="#">Municipio</a>
              </div>

              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="Desplegable" href="#">
                Seguridad
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="?controller=usuarios&action=index">Gestion Usuarios</a>               
                  <a class="dropdown-item" href="#">Roles Objeto</a>
                  <a class="dropdown-item" href="#">Roles Usuarios</a>
                  <a class="dropdown-item" href="#">Objeto</a>
                  <a class="dropdown-item" href="#">Roles</a>
                  <a class="dropdown-item" href="#">Bitacora</a>
                </div>
              </li>
                        
          </ul> 
      </li>

    <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-link" href="?controller=login&action=logout" role="button">Cerrar sesión</a>
    </div>
  </div>
</nav>
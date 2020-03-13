<?php
  session_start();
  if (!isset($_SESSION['loggedIn'])) {
    header("Location: /dialisis");
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="?controller=dashboard&action=index">
    <i class="fas fa-home"></i>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <div class="nav-link">Usuarios</div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid mt-2">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Usuario</th>
        <th scope="col">Fecha creación</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($usuarios as $usuario) { ?>
        <tr>
          <td><?php echo $usuario->getId(); ?></td>
          <td><?php echo $usuario->getNombre(); ?></td>
          <td><?php echo $usuario->getApellido();?></td>
          <td><?php echo $usuario->getEmail();?></td>
          <td><?php echo $usuario->getUsuario();?></td>
          <td><?php echo $usuario->getFechaCreacion();?></td>
          <td>
            <a class="btn btn-success" href="Controllers/usuario_controller.php?action=update&id=<?php echo $usuario->getId(); ?>">
              <i class="fas fa-pen"></i>
            </a>
            <button class="btn btn-danger" onclick="mostrarConfirmacion(<?php echo $usuario->getId(); ?>)">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>		
      <?php } ?>
    </tbody>
  </table>
</div>

<script>
  var idSelected = -1;

  function mostrarConfirmacion(id) {
    idSelected = id;
    $.confirm({
      title: 'Confirmación',
      content: '¿Está seguro que desea eliminar este registro?',
      buttons: {
          Sí: function () {
              $.alert('Confirmed!');
          },
          No: function () {
              $.alert('Canceled!');
          },
      }
    });
  }
</script>
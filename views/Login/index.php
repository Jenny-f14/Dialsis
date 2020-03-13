<div class="container-fluid h-100 d-flex justify-content-center align-items-center">
  <form class="form" action="controllers/login_controller.php" method="post">
    <h2 class="text-center">SERVICIOS INTEGRALES</h2>
    <input type="hidden" name="action" value="login">
    <div class="form-group">
      <input autocomplete="off" type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="required" onkeyup = "this.value=this.value.toUpperCase()">
    </div>
    <div class="form-group">
      <input type="password" id="password" name="password" class="form-control" placeholder="Contrasenia" required="required">
    </div>
    <div class="form-group">
      <button type="submit" id="btnLogin" class="btn btn-primary btn-block">Iniciar Sesion</button>
    </div>
  </form>
</div>
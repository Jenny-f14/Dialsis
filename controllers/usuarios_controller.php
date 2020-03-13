<?php
  include_once('models/UserModel.php');
  class UsuarioController {
    public function index(){
      $usuarios = User::all();
      require_once('Views/usuarios/index.php');
    }
  }
?>
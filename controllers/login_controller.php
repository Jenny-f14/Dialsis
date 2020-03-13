<?php 
	class LoginController
	{	
		public function __construct(){}

		public function index(){
			require_once('Views/Login/index.php');
    }

    public function error() {
      require_once('Views/Login/error.php');
    }

    public function logout() {
      session_start();
      session_unset();
      session_destroy();
      header("Location: /dialisis");
    }
    
    public function login($usuario) {
      $loggedIn = $usuario->login();
      if($loggedIn) {
        session_start();
        $_SESSION["loggedIn"] = true;
        header("Location: /dialisis/?controller=dashboard&action=index");
        die();
      } else {
        header("Location: /dialisis/?controller=login&action=error");
      }
    }
	}

	if (isset($_POST['action'])) {
    $loginController = new LoginController();
    require_once('../connection.php');
		require_once('../models/UserModel.php');
		if ($_POST['action']=='login') {
      $user = new User();
      $usuario = strval($_POST['usuario']);
      $pass = strval($_POST['password']);
      $user->setUsuario($usuario);
      $user->setPassword($pass);
			$loginController->login($user);
		}	
	}
?>
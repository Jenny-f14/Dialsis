<?php
  class DashboardController
  {	
    public function __construct(){}
  
    public function index(){
      require_once('Views/Dashboard/index.php');
    }
  }
?>
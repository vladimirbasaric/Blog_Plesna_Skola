<?php
  // Ucitava Config
  require_once 'config/config.php';
    
  // Ucitava Libraries
  // require_once 'libraries/core.php';
  // require_once 'libraries/controller.php';
  // require_once 'libraries/database.php';
  // Da ne bismo za svaki unosili posebno napravimo autoload 

  // Auto ucitavanje 
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  }); 
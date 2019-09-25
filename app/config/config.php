<?php
  // App Root

  // C:\xampp\htdocs\MVC\app\config\config.php
  //echo __FILE__; 
  // da bismo dobili:  C:\xampp\htdocs\MVC\app  moramo da uradimo sledece:
  // echo dirname(dirname(__FILE__));
  // i na kraju ga ubacujemo u konstantu pomocu define f-je
  define('APPROOT', dirname(dirname(__FILE__)));

  // URL Root
  define('URLROOT', 'http://localhost/MVC');

  // Ime Sajta
  define('SITENAME', 'Plesna skola');


   
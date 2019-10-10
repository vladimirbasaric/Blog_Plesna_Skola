<?php
  // redirekcija
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }
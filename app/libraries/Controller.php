<?php
  /*
   * Glavni Controller
   * Ucitava models i views
   */
  class Controller { 
    // Ucitava model
    public function model($model){
      // pozivamo model fajl
      require_once '../app/models/' . $model . '.php';

      // instanciramo model
      return new $model();
    }

    // Ucitavamo view
    public function view($view, $data = []){
      // proveravamo da li ima view fajlova
      if(file_exists('../app/views/' . $view . '.php')){
        require_once '../app/views/' . $view . '.php';
      } else {
        // view ne postoji
        die('View ne postoji');
      }
    }
  }
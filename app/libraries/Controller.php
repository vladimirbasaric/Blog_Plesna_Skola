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

      // instanciramo model npr. ako je post argument f-je
      // ovo ce da vrati new Post()
      // i na taj nacin ucitavamo modele iz Controllera
      return new $model();
    }

    // Ucitavamo view
    // niz $data nam omogucava da dinamicki ubacujemo podatke u view. 
    // to mogu biti hardcode podaci ili podaci iz DB ili nesto trece...
    // $data niz je opcionalan, ako zelimo mozemo da ucitamo samo fajl.
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
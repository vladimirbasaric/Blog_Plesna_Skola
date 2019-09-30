<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){

      // posto smo extendovali Controller.php mozemo da pristupimo u model i view
      $data = [
        'title' => 'Dobro dosli',
      ];

      $this->view('pages/index', $data); 
    }

    public function about(){
      $data = [
        'title' => 'O nama'
      ];
      $this->view('pages/about', $data);
    }
  }
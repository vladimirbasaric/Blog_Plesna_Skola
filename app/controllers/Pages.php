<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      // posto smo extendovali Controller.php mozemo da pristupimo u model i view
      
      $this->view('pages/index'); 
    }

    public function about(){
      $this->view('pages/about');
    }

    public function gallery(){
      $this->view('pages/gallery');
    }
  }
<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      // posto smo extendovali Controller.php mozemo da pristupimo u model i view
      $this->view('pages/index'); 
    }

    public function about(){
      $data = [
        'title' => 'O nama'
      ];
      $this->view('pages/about', $data);
    }

    public function gallery(){
      $data = [
        'title' => 'galerija'
      ];
      $this->view('pages/gallery', $data);
    }

    public function blog(){
      $data = [
        'title' => 'blog'
      ];
      $this->view('pages/blog', $data);
    }
  }
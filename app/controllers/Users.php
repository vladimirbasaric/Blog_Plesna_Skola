<?php
  class Users extends Controller {
    public function __construct(){

    }

    public function register(){
      // Proverava Post
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // preusmeravamo na form

        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // init data 
        $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirm_password' => trim($_POST['confirm_password']),
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // Validacija Email-a
        if(empty($data['email'])){
          $data['email_err'] = 'Unesite email';
        }

        // Validacija imena
        if(empty($data['name'])){
          $data['name_err'] = 'Unesite ime';
        } 

        // Validacija sifre
        if(empty($data['password'])){
          $data['password_err'] = 'Unesite šifru';
        } elseif(strlen($data['password']) < 6){
          $data['password_err'] = 'Šifra mora imati bar 6 karaktera';
        }

        // Validacija potvrdjene sifre
        if(empty($data['confirm_password'])){
          $data['confirm_password_err'] = 'Potrvrdite šifru';
        } else {
          if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'Šifre se ne podudaraju';
          }
        }

        // proveravamo da li ima grsaka, tj. da li su errors prazne
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // uspesno validirino
          die('SUCCESS');
        } else {
          // ucitavamo view sa greskama
          $this->view('users/register', $data);
        }

      } else {
        // Init data
        $data =[
          'name' => '',
          'email' => '',
          'password' => '',
          'confirm_password' => '',
          'name_err' => '',
          'email_err' => '',
          'password_err' => '',
          'confirm_password_err' => ''
        ];

        // ucitavamo view
        $this->view('users/register', $data);
      }
    }

    public function login(){
      // Proverava Post
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //  preusmeravamo na form
        // sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // init data 
        $data =[   
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),     
          'email_err' => '',
          'password_err' => '',   
        ];

        // Validacija Email-a
        if(empty($data['email'])){
          $data['email_err'] = 'Unesite email';
        }

        // Validacija sifre
        if(empty($data['password'])){
          $data['password_err'] = 'Unesite šifru';
        }

        // proveravamo da li ima grsaka, tj. da li su errors prazne
        if(empty($data['email_err']) && empty($data['password_err'])){
          // uspesno validirino
          die('SUCCESS');
        } else {
          // ucitavamo view sa greskama
          $this->view('users/login', $data);
        }


      } else {
        // Init data
        $data =[
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',
        ];

        // ucitavamo view
        $this->view('users/login', $data);
      }
    }
  }
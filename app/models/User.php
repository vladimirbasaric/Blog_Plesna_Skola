<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // registracija Usera
    public function register($data){
      $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      // 'bindujemo' vrednosti
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // Izvrsavanje (execute)
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // loginujemo korisnika
    public function login($email, $password){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    // trazimo usera preko emaila
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      // 'bindujemo' vrednosti
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // proveravamo row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }
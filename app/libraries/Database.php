<?php
  // PDO klasa
  // Povezivanje sa Bazom
   
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    
    // Data-Base-Handler 
    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
      // Set DSN skraceno od Data Source Name
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
      $options = array(
        // ovo ubrzava performanse tako sto proverava da li je uspostavljena konekcija sa DB
        PDO::ATTR_PERSISTENT => true,
        // PDO ima 3 moda za greske: silent, warning i exception
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );

      // instanciramo PDO 
      try{
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }

    // prepare za pisanje query-ja
    public function query($sql){
      $this->stmt = $this->dbh->prepare($sql);
    }          
    
    // Bind values
    public function bind($param, $value, $type = null){
      if(is_null($type)){
        switch(true){
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          default:
            $type = PDO::PARAM_STR;
        }
      }

      $this->stmt->bindValue($param, $value, $type);
    }

    // izvrsavanje 
    public function execute(){
      return $this->stmt->execute();
    }

    // metodi ispod sluze za dobijanje rezultata
    // Get result set kao red objekata
    public function resultSet(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // dobijamo jedan objekat, umesto fetchAll koristimo fetch
    public function single(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get row count (rowCount je metod koji je deo PDO)
    public function rowCount(){
      return $this->stmt->rowCount();
    }
  }
<?php
class UserModel{
  private $pdo;
  function __CONSTRUCT(){
    $this->pdo = ConexionDB::openDB();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
  function create(){
    
  }
}
?>

<?php
class ConexionDB{
  private $host = "localhost";
  private $dbname= "";
  private $user = "root";
  private $pass = "";
  private $dbstatus = null;
  function openDB(){
    try {
      self::$dbstatus = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname,self::$user,self::$pass);
      self::$dbstatus->exec("SET CHARACTER utf8");
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return self::$dbstatus;
  }
  function closeDB(){
    self::$dbstatus = null;
  }
}
?>

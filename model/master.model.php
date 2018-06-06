<?php
//requerir otros modelos
require_once "conn.model.php";
require_once "procedure.model.php";
//añadir todas las clases a la variable main
function masterModel(){
  $main = new MasterModel();
  $main->procedure = new ProcedureModel;
  return $main;
}
class MasterModel{
    protected $pdo;
    protected $sql;
    //acceso a conexion de base de datos
    public  function __CONSTRUCT(){
      try {
          $this->pdo=DataBase::openDB();
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
          die($e->getMessage());
      }
    }
    function columnsOfTable($table,$skip = null){
         try {
            $dbname= DataBase::getName();
            $sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table'  AND table_schema = '$dbname'";
            $query=$this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_BOTH);
            $columns=" ";
            $i=0;
            foreach ($result as $row) {
                if ($row[0]==$skip[$i]) {
                    if ($i<(count($skip)-1)) {
                       $i++;
                    }
                }else{
                    $columns.=$row[0].",";
                }
            }
            $result=$columns;
            $result = substr($result, 0, -1);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    //saber el numero de  comodines
    public function comodines($comodines){
        $resultComodines="";
        foreach ($comodines as $como) {
            $resultComodines.="?,";
        }
        $resultComodines = substr($resultComodines, 0, -1);
        return $resultComodines;
    }
    //saber los valores
    public function values($valores){
        $i=0;
         // $resultado = count($valores);
         $resultValues="";
        foreach ($valores as $value) {
            $resultValues.= $value.",";
            $i=$i+1;
        }
        $resultValues = substr($resultValues, 0, -1);
        return $resultValues;
    }
    //acomodar las columnas y los valores al hacer un update
    public function columnsUpdate($columns){
        $columns = explode(",",$columns);
        $resultColomnsUpdate="";
        foreach ($columns as $col) {
            $resultColomnsUpdate.= $col." = ? , ";
        }
        $resultColomnsUpdate = substr($resultColomnsUpdate, 0, -2);
        return $resultColomnsUpdate;
    }

    //insertar en una tabla
    public function insert($table,$values,$exeption = null){
        try {
            $cols=$this->columnsOfTable($table,$exeption);
            $comodines=$this->comodines($values);
            //convertir en string
            $vals=$this->values($values);
            $vals = explode(",",$vals);
            $this->sql="INSERT INTO $table($cols) VALUES ($comodines)";
            // die($this->sql);
            $query=$this->pdo->prepare($this->sql);
            $query->execute($vals);
            $result = true;
        } catch (PDOException $e) {
            $result = $query->errorInfo()[1];
        }
       return $result;
    }
    //CONSULTA GENERAL
    public function selectAll($table){
        try {
            $this->sql="SELECT * FROM $table";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    public function selectAllLimit($table,$inicio,$fin){
     try {
         $this->sql="SELECT * FROM $table LIMIT $inicio,$fin";
         $query=$this->pdo->prepare($this->sql);
         $query->execute();
         $result = $query->fetchAll(PDO::FETCH_BOTH);
     } catch (PDOException $e) {
         $result = $e->getMessage();
     }

     return $result;
    }
    public function selectAllLi6($table){
        try {
            $this->sql="SELECT * FROM $table LIMIT 6 ";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
    public function selectAllLi($table){
        try {
            $this->sql="SELECT * FROM $table LIMIT 4 ";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
    public function selectAllCount($table){
        try {
            $this->sql="SELECT count(*) FROM $table ";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    public function selectAllBy($table,$condition){
        try {
            $this->sql="SELECT * FROM $table WHERE $condition[0] = ?";
            $query=$this->pdo->prepare($this->sql);
            $query->execute(array($condition[1]));
            $result = $query->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
    //MININO REGISTRO
    public function selectMin($table,$colum){
        try {
            $this->sql="SELECT min($colum) FROM $table";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
  //CONTAR REGISTRO
    public function selectCount($table,$colum,$condition){
        try {
            $this->sql="SELECT count($colum) FROM $table WHERE $colum = ?";
            $query=$this->pdo->prepare($this->sql);
            $query->execute(array($condition));
            $result = $query->fetch(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
    //MAXIMO REGISTRO
    public function selectMax($table,$colum){
        try {
            $this->sql="SELECT max($colum) FROM $table";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }

    public function selectBy($table,$condition){
        try {
            $vals=$this->values($condition);
            $vals = explode(",",$vals);
            $this->sql="SELECT * FROM $table WHERE $vals[0] = ?";
            $query=$this->pdo->prepare($this->sql);
            $query->execute(array($vals[1]));
            $result = $query->fetch(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        return $result;
    }
    //ACTUALIZAR
    public function update($table,$colCondition,$values,$exeption = null,$die = null){
        try {
            $columns=$this->columnsOfTable($table,$exeption);
            $cols=$this->columnsUpdate($columns);
            $vals=$this->values($values);
            //para evitar sql inyection agregar el valor de la columna en el arreglo vals para generar otra posicion
            $vals.=",".$colCondition[1];
            //convertir en string
            $vals = explode(",",$vals);
            $this->sql="UPDATE $table SET $cols WHERE  $colCondition[0] = ? ";
            if ($die!=null) {
                      die($this->sql);
            }
            $query=$this->pdo->prepare($this->sql);
            $query->execute($vals);
            $result = true;
        } catch (PDOException $e) {
            $result =$e->getMessage();
        }
         return $result;
    }
    //modificar pocos Campos
    public function updateMin($table,$columns,$colCondition,$values){
       try {
           $cols=$this->columnsUpdate($columns);
           $vals=$this->values($values);
           //para evitar sql inyection agregar el valor de la columna en el arreglo vals para generar otra posicion
           $vals.=",".$colCondition[1];
           //convertir en string
           $vals = explode(",",$vals);
           $this->sql="UPDATE $table SET $cols WHERE  $colCondition[0] = ? ";
           $query=$this->pdo->prepare($this->sql);
           $query->execute($vals);
           $result = true;
       } catch (PDOException $e) {
           $result =$e->getMessage();
       }
        return $result;
   }
    public function delete($table,$condition){
        try {
            $vals=$this->values($condition);
            $vals = explode(",",$vals);
            $this->sql="DELETE  FROM $table WHERE $vals[0] = ?";
            $query=$this->pdo->prepare($this->sql);
            $query->execute(array($vals[1]));
            $result = true;
        } catch (Exception $e) {
            $result = $query->errorInfo()[1];
        }
        return $result;
    }
    //INNER JOIN
     public function innerJoinBy($tables,$equals,$condition){
        try {
            $this->sql="SELECT  $tables[0].*,$tables[1].* FROM $tables[0] INNER JOIN $tables[1] ON $tables[0].$equals[0]=$tables[1].$equals[1] WHERE $condition[0] = $condition[1] ";
            $query=$this->pdo->prepare($this->sql);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_BOTH);;
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
         return $result;
    }
}


 ?>

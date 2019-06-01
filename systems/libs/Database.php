<?php

  /*Database class*/
class Database extends PDO{

public function __construct(){

       $dsn  ='mysql:dbname =db_mvc; host= localhost';
       $user ='root';
       $pass ='';
       parent::__construct($dsn,$user,$pass);

  }


   public function select($sql, $data=array(),$fetchStyle =PDO::FETCH_ASSOC){

         $stmt = $this->prepare($sql);
         foreach ($data as $key => $value) {
           $stmt->bindParam($key, $value);
         }

         $stmt->execute();
         return $stmt->fetchAll($fetchStyle);
  }


    public function insert($table, $data){

          $keys   = implode(",", array_keys($data));
          $values = ":".implode(", :", array_keys($data));

          $sql ="INSERT INTO $table($keys) VALUES($values)";
          $stmt = $this->prepare($sql);

          foreach ($data as $key => $value){
           //$stmt->bindParam(":$key", $value);
           $stmt->bindValue(":$key", $value);
         }      
         return $stmt->execute();

   }


   public function update($table, $data,$con){


          $updatakeys = NULL;
          foreach ($data as $key => $value) {
            $updatakeys .= "$key=:$key,";
          }

          $updatakeys=rtrim($updatakeys,",");

          $sql ="UPDATE $table SET $updatakeys WHERE $con";
          $stmt = $this->prepare($sql);

          foreach ($data as $key => $value) {
            //$stmt->bindParam(":$key", $value);
            $stmt->bindValue(":$key", $value);
          }
          return $stmt->execute();

   }


     public function delete($table, $con){

        $sql ="DELETE FROM $table WHERE $con";
      //return $this->exec($sql);
        $stmt = $this->prepare($sql);
        return $stmt->execute();

   }


      public function affectedRow($sql, $username, $password){

           $stmt = $this->prepare($sql);
           $stmt->execute(array($username, $password));
           return $stmt->rowCount();


      } 



       public function selectUser($sql, $username, $password){

           $stmt = $this->prepare($sql);
           $stmt->execute(array($username, $password));  
           return $stmt->fetchAll(PDO::FETCH_ASSOC); 

       }

 




 

}
?>

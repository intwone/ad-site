<?php
require_once '../controllers/config.php';

class Users {
  
  /**
   * Register a new user
   */
  public function register($name, $email, $telephone, $password) {
    global $pdoConnection;
    $sql = "SELECT * FROM db_users WHERE usr_name = :usr_name";
    $sql = $pdoConnection->prepare($sql);
    $sql->bindValue(':usr_name', $name);
    $sql->execute();
    
    if($sql->rowCount() == 0) {
      $sql =  "INSERT INTO db_users 
              (
              usr_name, 
              usr_email,
              usr_password,
              usr_telephone 
              ) VALUES (
              :usr_name, 
              :usr_email,
              :usr_password,
              :usr_telephone 
              )";
    
      $sql = $pdoConnection->prepare($sql);
      $sql->bindValue(':usr_name', $name);
      $sql->bindValue(':usr_email', $email);
      $sql->bindValue(':usr_password', $telephone);
      $sql->bindValue(':usr_telephone', $password);
      $sql->execute();

      return true;
    } else {
      return false;
    }
  }
}
?>
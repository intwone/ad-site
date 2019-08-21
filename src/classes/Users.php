<?php
require_once '../controllers/config.php';

class Users {
  /**
   * Checks if the user exist in database
   */
  public function userLogin($email, $password) {
    global $pdoConnection;
    $sql = "SELECT * FROM db_users WHERE usr_email = :usr_email AND usr_password = :usr_password";
    $sql = $pdoConnection->prepare($sql);
    $sql->bindValue(':usr_email', $email);
    $sql->bindValue(':usr_password', $password);
    $sql->execute();

    if($sql->rowCount() > 0) {
      $userDatas = $sql->fetch();
      $_SESSION['userLogged'] = $userDatas['usr_id'];
      return true;
    } else {
      return false;
    }
  }
  
  /**
   * Register a new user
   */
  public function register($name, $email, $telephone, $password) {
    global $pdoConnection;
    $sql = "SELECT * FROM db_users WHERE usr_email = :usr_email";
    $sql = $pdoConnection->prepare($sql);
    $sql->bindValue(':usr_email', $email);
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
      $sql->bindValue(':usr_password', $password);
      $sql->bindValue(':usr_telephone', $telephone);
      $sql->execute();

      return true;
    } else {
      return false;
    }
  }


}
?>
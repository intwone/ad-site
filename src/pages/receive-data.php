<?php
require_once '../classes/Users.php';

$user = new Users();

$name      = addslashes(trim($_POST['name']));
$email     = addslashes(trim($_POST['email']));
$telephone = addslashes(trim($_POST['telephone']));
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if($user->register($name, $email, $telephone, $password1)) {
  
} else {

}
  
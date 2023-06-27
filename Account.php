<?php
session_start();
include_once('DBconnection.php');
class Account {
  private $name;
  private $username;
  private $password;
   
  public function login($username,$password){
   $sql = "SELECT * FROM ACCOUNT WHERE username='".$username."' AND password='".$password."'";
   $result=DBconnection::execquery($sql);
  if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
	  $_SESSION['name']=$row['name'];
	  include_once('home.php');
} else {
  include_once('loginform.php');
}

  }  
}
?>
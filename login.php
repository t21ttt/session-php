<?php
include_once('Account.php');
$username=$_POST['uname'];
$password=$_POST['pass'];

$acc= new Account();
$acc->login($username,$password);




?>
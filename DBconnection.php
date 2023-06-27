<?php
class  DBconnection {
private static $servername="localhost"; 
private static $username="root"; 
private static $password=""; 
private static $dbname="Registrationsystem";

public static function connect(){
	$conn = mysqli_connect(self::$servername, self::$username, self::$password,self::$dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
                }
	  else{
		  return $conn;
	  }
}
public function execquery($sql){
	$conn=DBconnection::connect();
	$result=mysqli_query($conn, $sql);
	if (!$result) {
           die("Could not Execute: " . mysqli_error($conn));
    }
	else{
     		return $result;
	}
}	  

}

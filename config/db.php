<?php 
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','users_app');

// Create Connection
$conn = new mysqli (DB_HOST,DB_USER,DB_PASS,DB_NAME);

//Check Connection
// if($conn->connect_error){
//     die('Connection Failed'.$conn->connect_error);
// }

if(!$conn){
    die(mysqli_error($conn));
}
    // echo "Conected";

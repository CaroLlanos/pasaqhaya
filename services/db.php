<?php
define('USER', 'root');
define('PASSWORD', 'password');
define('HOST', 'localhost');
define('DATABASE', 'pasaqhaya');
 
/*try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: No se conecto" . $e->getMessage());
}*/

$con=mysqli_connect('localhost','root','password','pasaqhaya');
?>
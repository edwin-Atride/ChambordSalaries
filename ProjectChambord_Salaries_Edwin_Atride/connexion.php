<?php
$servername = 'localhost';
$username = 'sio';
$password = 'sio';
$dbname = "chambord";
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
global $conn ;
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
?>

<?php
$email = $_POST['email'];
$password = md5($_POST['password']);
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "users";

try {
$connexion = new PDO("mysql:host=$servername;dbname=$dbname;" ,$username,$dbpassword) ;
$connexion-> setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);    
//echo 'connexion succees';
}catch (PDOException $error)
{echo$error->getMessage();}

$query = "INSERT INTO users(password,email) VALUES( '$password', '$email')";
//echo $query;
$connexion->query($query);
header('Location: http://localhost/Projet_personelle/caculatrice.php ');

?>
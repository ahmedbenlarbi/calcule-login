<?php
$User_Name = $_POST['User_Name'];
$Last_Name= $_POST['Last_Name'];
$email = $_POST['email'];
$Num=$_POST['Num'];
$Password= md5($_POST['Password']);
$Confirmed_Password	= md5($_POST['Confirmed_Password']);
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "inscription";

try {
$connexion = new PDO("mysql:host=$servername;dbname=$dbname;" ,$username,$dbpassword) ;
$connexion-> setAttribute(PDO::ATTR_AUTOCOMMIT, PDO::ERRMODE_EXCEPTION);    
//echo 'connexion succees';
}catch (PDOException $error)
{echo$error->getMessage();}

$query = "INSERT INTO inscription(User_Name,Last_Name,email,Num,Password,Confirmed_Password) VALUES( '$User_Name' ,'$Last_Name','$email','$Num','$Password','$Confirmed_Password')";

//echo $query;
$connexion->query($query);
header('Location: http://localhost/Projet_personelle/caculatrice.php ');

?>
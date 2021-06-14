<?php
session_start();
if(!isset($_POST['pytanie']))
{
    $_SESSION['er']="Nieprawidłowe dane";
    header('Location:index.html');
    exit();
}
$pytanie= $_POST['pytanie'];
require_once "connect.php";
$conn = @mysqli_connect($host,$user,$pass,$dbname) or die("Błąd połączenia");
mysqli_set_charset($conn, "utf8");
$s = "INSERT INTO pytania
VALUES('$pytanie','',NULL)";
$wynik=mysqli_query($conn,$s) or die("Błąd pytania");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="3;url=http://localhost:8080/politykpl/" />
		<link rel="stylesheet" href="format.css" type="text/css">
    </head>
    <body>
        <h1>Powrót do strony głównej za 3 sekundy...</h1>
    </body>
</html>
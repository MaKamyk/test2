<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title> Polityk.pl</title>
	<link rel="stylesheet" href="format.css" type="text/css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
	<link href='https://css.gg/home.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@1,500&display=swap" rel="stylesheet">
</head>

<body>
	<div id="container">
			<div id="menu">
				<div id="main">
					<div id="home">
						<a href="index.html"><img src="images/home.png" width="80" height="80"></a>
					</div>
				</div>
				<div id="punkt"> Ideologie </div>
				<a href="ideologia.html"><div id="button"> Ideologia1</div></a>
				<a href="ideologia.html"><div id="button"> Ideologia2</div></a>
				<a href="ideologia.html"><div id="button"> Ideologia3</div></a>
				<div id="punkt"> partie w RP </div>
				<a href="partia.html"><div id="button"> Partia1</div></a>
				<a href="partia.html"><div id="button"> Partia2</div></a>
				<a href="partia.html"><div id="button"> Partia3</div></a>
				<a href="partia.html"><div id="button"> Partia4</div></a>
				<a href="partia.html"><div id="button"> Partia5</div></a>
				<a href="partia.html"><div id="button"> Partia6</div></a>
				<a href="partia.html"><div id="button"> Partia7</div></a>
				<a href="partia.html"><div id="button"> Partia8</div></a>
				<a href="partia.html"><div id="button"> Partia9</div></a>
				<a href="partia.html"><div id="button"> Partia10</div></a>
				<a href="partia.html"><div id="button"> Partia11</div></a>
				<a href="partia.html"><div id="button"> Partia12</div></a>
				<a href="podzial.html"><div id="bigbutton"> trójpodział władzy </div></a>
			</div>
		<div id="content">
			<div id="logo"> Polityk.pl</div>
			</br>
			<div id="ideologybox2">
				<div id="content2">
					<div id="minititle"> pytania</div>
					<form action="pytania2.php" method="post">
            <label>
            <input placeholder="pytanie" name="pytanie" required>
			</label>
					</br>
					            <label>
            <button type="submit">
                <img src="images/login.png" alt="Zadaj">

            </label>
				</div>
			</div>
			</br>
					<div id="ideologybox">
				<div id="content2">
					<div id="minititle"> inne pytania/odpowiedzi</div>
					</br> 
					
					<div id="content3">
					<?php session_start();
					require_once "connect.php";
					$conn=@mysqli_connect($host,$user,$pass,$dbname) or die("Błąd połączenia");
					mysqli_set_charset($conn,"utf8");
					$q='SELECT pytanie FROM pytania';
					$wynik=mysqli_query($conn,$q) or die("Błąd zapytania");
					$rekord=mysqli_fetch_assoc($wynik);
					$pyt=$rekord['pytanie'];
					$result = $conn->query($q);
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					echo $row["pytanie"]."<br>";
					}
					}
					?>
					</div>
					<div id="content4">
					<?php
					require_once "connect.php";
					$conn=@mysqli_connect($host,$user,$pass,$dbname) or die("Błąd połączenia");
					mysqli_set_charset($conn,"utf8");
					$q1='SELECT odpowiedz FROM pytania';
					$wynik=mysqli_query($conn,$q1) or die("Błąd zapytania");
					$rekord=mysqli_fetch_assoc($wynik);
					$odp=$rekord['odpowiedz'];
					$result = $conn->query($q1);
					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					echo $row["odpowiedz"]."<br>";
					}
					}
					?>
					</div>
				</div>
		</div>
		</div>
	</div>
			
</body>
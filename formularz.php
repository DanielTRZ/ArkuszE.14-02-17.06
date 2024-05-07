<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sklep muzyczny</title>
<link rel="stylesheet" type="text/css" href="muzyka.css">
</head>
<body>
	<header>
		<h1>SKLEP MUZYCZNY</h1>
	</header>
	<nav>
		<h2>NASZA OFERTA</h2>
		<ol>
			<li>Instrumenty muzyczne</li>
			<li>Sprzęt audio</li>
			<li>Płyty CD</li>
		</ol>
	</nav>
	<main>
	<?php 
		$imie=$_POST['name'];
		$nazw = $_POST['nazw'];
		$adr = $_POST['adres'];
		$tel = $_POST['telefon'];
		$login = $_POST['log'];
		$passwd = $_POST['passwd'];

		$connect = mysqli_connect('localhost','root','','sklep') or die('błąd połączenia bazy danych');
		

		if(empty($imie) || empty($nazw) || empty($adr) || empty($tel))
		{
			echo "Nie podano danych użytkownika <br>";
		}
		else if (isset($imie) || isset($nazw) || isset($adr) || isset($tel))
		{
			$sql = "INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `adres`, `telefon`) VALUES (NULL, '$imie', '$nazw', '$adr', '$tel')";

			$result = mysqli_query($connect, $sql);
			echo 'Wpisano dane użytkownika <br> ';
		}

		if(empty($login) || empty($passwd))
		{
			echo "Nie podano danych logowania";
		}
		else if (isset($login) || isset($passwd))
		{
			$sql1 = "INSERT INTO `konta` (`id`, `login`, `haslo`) VALUES (NULL, '$login', '$passwd')";

			$result1 = mysqli_query($connect, $sql1);
			echo 'Wpisano dane logowania';
		}

		

		mysqli_close($connect);
	?>
	</main>
</body>
</html>

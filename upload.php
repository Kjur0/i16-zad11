<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wysyłanie plików!</title>
</head>

<body>
	<p>
	<h1>Plik</h1>
	<?php
	switch ($_FILES['upload']['error']) {
		case 1:
			echo 'BŁĄD #1: Rozmiar pliku jest zbyt duży.';
			break;
		case 2:
			echo 'BŁĄD #2: Rozmiar pliku jest zbyt duży.';
			break;
		case 3:
			echo 'BŁĄD #3: Plik wysłany tylko częściowo.';
			break;
		case 4:
			echo 'BŁĄD #4: Nie wysłano żadnego pliku.';
			break;
		default:
			echo "Plik wysłany bez problemu";
			if (!file_exists('UPLOAD')) {
				mkdir('UPLOAD', 0777, true);
			}
			move_uploaded_file($_FILES['upload']['tmp_name'], 'UPLOAD/' . $_FILES['upload']['name']);
			break;
	}
	?>
	</p>
	<p>
	<h1>Awatar</h1>
	<?php
	switch ($_FILES['avatar']['error']) {
		case 1:
			echo 'BŁĄD #1: Rozmiar awatara jest zbyt duży.';
			break;
		case 2:
			echo 'BŁĄD #2: Rozmiar awatara jest zbyt duży.';
			break;
		case 3:
			echo 'BŁĄD #3: Awatar wysłany tylko częściowo.';
			break;
		case 4:
			echo 'BŁĄD #4: Nie wysłano żadnego awatara.';
			break;
		default:
			echo "Awatar wysłany bez problemu";
			if (!file_exists('AVATARY')) {
				mkdir('AVATARY', 0777, true);
			}
			move_uploaded_file($_FILES['avatar']['tmp_name'], 'AVATARY/' . $_FILES['avatar']['name']);
			break;
	}
	?>
	</p>
	<a href="index.php">POWRÓT</a>
</body>

</html>
<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Przesyłanie plików</title>
</head>

<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label for="upload">Wybierz plik do wysłania:</label>
		<input type="file" name="upload" id="upload"><br>
		<label for="avatar">Wybierz awatar do wysłania:</label>
		<input type="file" name="avatar" id="avatar" accept="image/*"><br>
		<input type="submit" value="Wyślij pliki">
	</form>

</body>

</html>
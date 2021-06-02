<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="act.php" method = "POST">
		<h1 title="Форма регистрации на сайте">Регистрация</h1>
		<div class="group">
			<label for="">Имя пользователя:</label>
			<input type="text" name="regName">
		</div>
		<div class="group">
			<label for="">Пароль:</label>
			<input type="password" name="regPass">
		</div>
		<div class="group">
			<label for="">Пароль еще раз:</label>
			<input type="password" name="reapPass">
		</div>
		<div class="group">
			<label for="">Номер телефона:</label>
			<input type="tel" name="phoneNumb">
		</div>
		<div class="group">
			<label for="">Адрес электронной почты:</label>
			<input type="email" name="regEmail">
		</div>
		<div class="group">
			<center><button>Регистрация</button></center>
		</div>
	</form>
</body>
</html>
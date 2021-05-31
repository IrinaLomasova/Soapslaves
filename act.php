
<?php
//Данные для подключения к серверу MySQL
$servername = "localhost";
$username = "root";
$password = "";
// Вводим название базы данных
$dbname = "register_forms";

//Созданиие подключения
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_multi_query($conn, 'SET NAMES utf8') or die ("не удалось установить кодировку");

//Проверка соединения с БД
if (!$conn) 
{
die("Подключение не выполнено: " . mysqli_connect_error());
}

//Строка с текстом sql запроса для таблицы
$sql = "INSERT INTO register_data (regName, regPass, reapPass, phoneNumb, regEmail)
VALUES ('".$_POST['regName']."','".$_POST['regPass']."','".$_POST['reapPass']."',
'".$_POST['phoneNumb']."','".$_POST['regEmail']."')" ;

// mysqli_query($conn, $sql) - выполнение sql запроса
//Проверка статуса выполнения sql запроса
if (mysqli_query($conn, $sql)) {
echo "Запись успешно добавлена</br>";
echo "<h2>Ваши данные:</h2>";
echo $_POST['regName'];
echo "<br>";
echo $_POST['regPass'];
echo "<br>";
echo $_POST['reapPass'];
echo "<br>";
echo $_POST['phoneNumb'];
echo "<br>";
echo $_POST['regEmail'];
echo "<br>";
echo $_POST['addressOrganization'];
echo "<a href='register.html'>На главную</a>";
} else
{
echo "Ошибка добавления записи: " . $sql . "<br>" .
mysqli_error($conn);
}
//Закрытие соединения
mysqli_close($conn);

?>
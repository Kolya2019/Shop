<?
$server = 'localhost';
$user = 'root';
$password = '';

$dblink = mysqli_connect($server, $user, $password);

if($dblink)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');

$database = 'test';
$selected = mysqli_select_db($database, $dblink);
if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');
?>
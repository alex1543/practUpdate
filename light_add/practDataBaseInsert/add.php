<!DOCTYPE html>
<html><head>
<style type="text/css">
body {background-color: #ffffff; color: #000000;}
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}
a:link {color: #000099; text-decoration: none; background-color: #ffffff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse;}
.center {text-align: center;}
.center table { margin-left: auto; margin-right: auto; text-align: left;}
.center th { text-align: center !important; }
td, th { border: 1px solid #000000; font-size: 75%; vertical-align: baseline;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccccff; font-weight: bold; color: #000000;}
.h {background-color: #9999cc; font-weight: bold; color: #000000;}
.v {background-color: #cccccc; color: #000000;}
.vr {background-color: #cccccc; text-align: right; color: #000000;}
img {float: right; border: 0px;}
hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color: #000000;}

   [data-tooltip] {
    position: relative; /* Относительное позиционирование */ 
   }
   [data-tooltip]::after {
    content: attr(data-tooltip); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    width: 300px; /* Ширина подсказки */
    left: 0; top: 0; /* Положение подсказки */
    background: #3989c9; /* Синий цвет фона */
    color: #fff; /* Цвет текста */
    padding: 0.5em; /* Поля вокруг текста */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Параметры тени */
    pointer-events: none; /* Подсказка */
    opacity: 0; /* Подсказка невидима */
    transition: 1s; /* Время появления подсказки */
   } 
   [data-tooltip]:hover::after {
    opacity: 1; /* Показываем подсказку */
    top: 2em; /* Положение подсказки */
   }
   
td {padding-left:7px;padding-right:7px;}
	p {margin:3px;padding:1px;}
</style>
<title>Добавление в таблицу MySQL</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /></head>
<body><div class="center">


<?php

// блок инициализации
try {
	$pdoSet = new PDO('mysql:dbname=test;host=localhost', 'root', '');
	$pdoSet->query('SET NAMES utf8;');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// начало вставки
if (isset($_GET['bt1'])) {
	$sqlTM = "INSERT INTO myarttable (text, description, keywords) values ('" . $_GET["text"] . "', '" . $_GET["description"] . "', '" . $_GET["keywords"] . "')";
	$stmt = $pdoSet->query($sqlTM);
}
// конец вставки


	$sqlTM="SELECT * FROM myarttable WHERE id>14";
//echo $sqlTM;
	$stmt = $pdoSet->query($sqlTM);
	$resultMF = $stmt->fetchAll();
	
//var_dump($resultMF);


	echo "<table style='width:100%'>";
	for($iC=0; $iC<Count($resultMF); $iC++) {
		echo "<tr class='trView'>";
		
		for($iR=0; $iR<4; $iR++) {
			echo "<td style='padding:15px;border: 1px solid #cfcfcf;'>".$resultMF[$iC][$iR]."</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

?>

<!-- начало вставки -->
<form action="add.php" method="get">
	<br /><hr /><br />
	<table>
	<tr>
		<td data-tooltip="Введите значение ячейки первого столбца"><input type="edit" name="text" value="test1"></td>
		<td data-tooltip="Введите значение ячейки второго столбца"><input type="edit" name="description" value="test2"></td>
		<td data-tooltip="Введите значение ячейки третьего столбца"><input type="edit" name="keywords" value="test3"></td>
		<td><p data-tooltip="Нажмите на кнопку, чтобы добавить одну строку"><input type="submit" name="bt1" value="Добавить 1 строку"></p></td>
		
	</tr>
	</table>
	<p style="font-size:12px;"><i>(в базу <b>test</b>, таблицу <b>myarttable</b> в MySQL)</i></p>
	<hr />
</form>
<!-- конец вставки -->


</div>
</body>
</html>
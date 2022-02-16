<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style/main2.css" />
		<title>Редактирование таблицы на PHP, JavaScript</title>
		<meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" />
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
	</head>
<body>
	<div class="center">

<h1>Редактирование таблицы на PHP, JavaScript</h1>
<!-- НАЧАЛО кнопка добавления -->
<button style="margin:0px;padding:0px;width:63px;height:63px;"><a href="<?php 
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
echo $url;
?>" style="margin:0px;padding:0px;">
	<img src="image/home.ico" alt="Главная" title="Перейти на главную страницу"
          style="vertical-align:middle; height:60px;width:60px;float:left;cursor:pointer;"></a></button>
<!-- КОНЕЦ кнопка добавления -->
<!-- НАЧАЛО кнопка печати -->
<button style="margin:0px;padding:0px;width:63px;height:63px;"><a href="print.php" target="_blank" style="margin:0px;padding:0px;">
	<img src="image/print.ico" alt="Печать" title="Напечатать страницу"
          style="vertical-align:middle; height:60px;width:60px;float:left;cursor:pointer;"></a></button>
<!-- КОНЕЦ кнопка печати -->

<!-- НАЧАЛО форма добавления -->
<button style="margin:0px;padding:0px;width:63px;height:63px;" id="addView" onclick="alerted();">
	<img src="image/add.ico" alt="Добавить" title="Добавить 1 строку"
          style="vertical-align:middle; height:60px;width:60px;float:left;cursor:pointer;"></button>
<script type="text/javascript">
function alerted(){
	var addForm = document.getElementById('addForm'); // найти элемент
	if (addForm.style.display=='none') {
		addForm.style.display = 'block';} else {
		addForm.style.display = 'none';
	}
}
</script>
<!-- КОНЕЦ форма добавления -->

<!-- НАЧАЛО форма добавления ВСПЛЫВАЮЩИЕ СТРОКИ -->
<form action="index.php" id="addForm" method="get" style="display:none;">
	<br /><hr /><br />
	<table>
	<tr>
		<td data-tooltip="Введите значение ячейки первого столбца"><input type="edit" name="text" value="test1"></td>
		<td data-tooltip="Введите значение ячейки второго столбца"><input type="edit" name="description" value="test2"></td>
		<td data-tooltip="Введите значение ячейки третьего столбца"><input type="edit" name="keywords" value="test3"></td>
		<td><p data-tooltip="Нажмите на кнопку, чтобы добавить одну строку"><input type="submit" name="bt1" value="Добавить 1 строку" style="cursor:pointer;"></p></td>
		
	</tr>
	</table>
	<p style="font-size:12px;"><i>(в базу <b>test</b>, таблицу <b>myarttable</b> в MySQL)</i></p>
	<hr />
</form>
<!-- КОНЕЦ форма добавления ВСПЛЫВАЮЩИЕ СТРОКИ -->

<br /><br />
<?php 
	include "data/init.php";

	?><table class='tView1'><?php
	for($iC=0; $iC<Count($resultMF); $iC++) {
		?><tr><?php
		
		for($iR=0; $iR<4; $iR++) {
// добавить 1 строку кода для UPDATE
			?><td><a href="#" class="js-open-modal" data-modal="1" id="id<?php echo $iR .'_'. $resultMF[$iC][0];?>"><?php echo $resultMF[$iC][$iR];?></a></td><?php
		}
// добавить 1 строку кода для UPDATE
		?><td style="width:20px;" title="Отредактировать"><a href="#" class="js-open-modal" data-modal="1" id="id<?php echo $iR .'_'. $resultMF[$iC][0];?>"><img src="image/edit.ico" style="height:20px;width:20px;"></a></td>
		<td style="width:20px;" title="Добавить файлы"><a href="practUpload/index.php?id=<?php echo $resultMF[$iC][0]; ?>"><img src="image/files.ico" style="height:20px;width:20px;"></a></td>
		<td style="width:20px;" title="Удалить"><a href="index.php?delid=<?php echo $resultMF[$iC][0]; ?>"><img src="image/delete.ico" style="height:20px;width:20px;"></a></td><?php
		?></tr><?php
	}

	?></table><?php

?>


<!-- НАЧАЛО модального окна -->
<link rel="stylesheet" href="style/modal.css" />
<div class="modal" data-modal="1">
   <!--   Svg иконка для закрытия окна  -->
   <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
   <p class="modal__title"><b>Отредактировать строку</b><br /></p>
   
<form action="index.php" method="get">   
   <input type="hidden" name="textId" id="textId" value="none 1 is error">
   <br /><i style="font-size:12px;">Параметр #1:</i> <input type="edit" name="textEd1" id="textEd1" value="none 1 is error"><br />
   <br /><i style="font-size:12px;">Параметр #2:</i> <input type="edit" name="textEd2" id="textEd2" value="none 2 is error"><br />
   <br /><i style="font-size:12px;">Параметр #3:</i> <input type="edit" name="textEd3" id="textEd3" value="none 3 is error"><br />
   <br /><a href="practUpload/index.php?id=error" id="aId" target="_blank">Добавить файлы</a><br /><br />
   <p data-tooltip="Нажмите на кнопку, чтобы отредактировать строку">
		<input type="submit" name="bt2" value="Отредактировать" style="cursor:pointer;">
   </p>  
</form>
   
</div>
	<!-- Подложка под модальным окном -->
<div class="overlay js-overlay-modal"></div>
	<!-- Дополнительный скрипт --> 
<script src="script/modal1.js"></script>
<!-- КОНЕЦ модального окна -->
 
	</div>
	
	<link rel="stylesheet" href="scrollup/scrollup.css" /><div id="scrollup"><img src="scrollup/7.png" class="up" title="Прокрутить вверх" /></div><script src="scrollup/scrollup.js"></script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>knopka</title>
	<?
		include_once("includes.php");
	?>
	<script async="" type="text/javascript" src="http://yandex.st/jquery/2.0.3/jquery.js"></script>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="psheno.css">
</head>
<body>
	<div class="knopka">
		<form action='index.php' style="display:none;" id="form1" method="post">
		 	<input type="text" name="name1" placeholder="Name" required><br>
		 	<input type="text" name="phone1" placeholder="Phone" required><br>
		 	<button class="button1">Отправить</button>
    	</form>
		<button type="submit" name="submit2" onClick="$('#form1').show(); $('.submit2').hide();" class="			submit2">Получить цен!
		</button>	
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Psheno</title>
	<link rel="stylesheet" type="text/css" href="psheno.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<script async="" type="text/javascript" src="http://yandex.st/jquery/2.0.3/jquery.js"></script>
	<meta charset="utf-8">
	<? 
		include_once("includes.php");
	?>
</head>
<body id="body">
	<div class="menu">
		<menu>
			<ul class="ul">
				<a href="#ALL"><li>Выгоды</li></a>
				<a href="#ceny"><li>Цены</li></a>
				<a href="#procedura-div"><li> Как это работает</li></a>
				<a href="#garant"><li>Гарантии</li></a>
				<a href="#otzivi"><li>Отзывы</li></a>
				<a href="#contacts"><li>Контакты</li></a>
			</ul>
		</menu>	
 	</div>
 <div class="cont1">
	 <div class="top">
	 	<div class="p1">
	 	<p class="par1">
	 		<b>Поставщик сахара тростникового белого ICUMSA 45 (Бразилия)</b> <br> от производителя 
	 	</p>
	 	</div>
	 	<div>
			<img src="logo.jpg" class="logo">
		</div>
	 	<div class="p2">
	 		<a href="index.php"><img src="icon-rus.jpg"></a>
			<a href="eng.php"><img src="icon-uk.jpg"></a>
	 		<p class="par1">
	 			<b>+7 (908) 055-96-34</b> <br>Есть вопросы? Звоните!
	 		</p>
	 	</div>
	 </div>
 </div>

 <div class="polosa">
 	<p class="polosa-p">Минимальная пробная партия: от 12 500 тонн - 1 корабль</p>
 	<div class="back1">
 		<div class="polosacont">
	 		<div class="leftb">
	 			<p class="left-p">Сахар оптом цена
				от $ 295.00 за тонну</p>
	 			<p class="left-bottom-p"><p class="pishka"> Минимальная пробная партия: от 12 500 тонн - 1 корабль</p>
				<p class="pishka">Условия поставки: ИНКОТЕРМС 2010 - CIF | ASWP</p>
				<p class="pishka">Любой безопасный порт мира</p>
				<p class="pishka">Оплата комиссии, 2 $ за метрическую тонну посреднику</p>
				</p>
	 		</div>
	 		<div class="rightb">
	 					<form method="post" action="index.php" class="form">
	 						<p class="caption">Получить <b>персональное предложение с ценами</b> за 5 минут!</p><br>
	 						<label>Введите ваше имя</label><br>
	 						<input type="text" name="name1" required><br>
	 						<label>Введите ваш E-mail</label><br>
	 						<input type="email" name="email1" required><br>
	 						<label>Задайте свой вопрос компании?</label><br>
	 						<input type="text" name="question" required><br>
	 						<button type="submit" name="submit1" class="submit">Получить цену!</button>
	 						<p class="confidentional"></p>
	 					</form>
	 		</div>
	 	</div>
 		</div>
 	</div>
 </div>

<div class="cont2">

	<div id="ALL">
		<h1 style="text-align: center; margin: 10px; font-family: verdana; font-size: 28px;">Ваши выгоды</h1>
		<div class="all1">
			<div class="one1">
				<div class="picone1">
					<img src="pic1.jpg" class="image1">
				</div>
			<h1 class="h1pic">Цена:</h1>
			<p class="ppic">Цена ниже на $ 150 - $ 230, чем на Лондонской товарно-сырьевой бирже</p>
			</div>

			<div class="one2">
				<div class="picone2">
					<img src="pic2.png" class="image2">
				</div>
				<h1 class="h1pic">Оплата: TOП 50 банков мира</h1>
				<p class="ppic">SBLC - резервный Аккредитив, DLC - документарный Аккредитив, BG - переводная
				 				Банковская гарантия
				 </p>
			</div>

			<div class="one3">
				<div class="picone3">
					<img src="pic3.jpg" class="image3">
				</div>
				<h1 class="h1pic">Качество + Количество:</h1>
				<p class="ppic">Проверяется компанией <b>SGS (Швейцария) в порту загрузки или порту выгрузки</b></p>
			</div>
		</div>


		<div class="all2">
			<div class="one4">
				<div class="picone4">
					<img src="pic4.jpg" class="image4">
				</div>
				<h1 class="h1pic">Гарантия:</h1>
				<p class="ppic">2% (Perfomans Bond), это юридическая гарантия продавца за не исполнение своих обязательств по заключенному контракту</p>
			</div>
			
			<div class="one5">
				<div class="picone5">
					<img src="pic5.jpg" class="image5">
				</div>
				<h1 class="h1pic">Страхование</h1>
				<p class="ppic">Страхование груза на 110% стоимости, входит (стоимость груза + транспортные расходы), за счет продавца</p>
			</div>

			<div class="one6">
				<div class="picone6">
					<img src="pic6.jpg" class="image6">
				</div>
				<h1 class="h1pic">Комисия посреднику</h1>
				<p class="ppic">Оплата комиссии,<b>
				2 $ за метрическую тонну посреднику, по договору 
				IMFPA & NCNDA</b></p>
			</div>

			
			<div class="knopka">
				<form action='index.php' style="display:none;" id="form1" method="post">
				 	<input type="text" name="name1" placeholder="Имя" required><br>
				 	<input type="text" name="phone1" placeholder="Телефон" required><br>
				 	<button class="button1">Отправить</button>
    			</form>
				<button type="submit" name="submit2" onClick="$('#form1').show(); $('.submit2').hide();" 			class="submit2">Получить цену!
				</button>
			</div>
		</div>
	</div>


	<div id="ceny">
		<p class="ceny-text1">ЦЕНЫ НА САХАР ДЕЙСТВИТЕЛЬНЫ <span style="color: crimson";> ДО 31 ОКТЯБРЯ 2016</span></p>
		<p class="ceny-text2">Оплата (ТОП 50 банков мира): SBLC, DLC или BG</p>
			<div class="cena-img1-div">
				<img src="cena1-img1.jpg" class="cena-img1">
			</div>
			<div class="cena-img2-div">
				<img src="cena1-img2.png">
			</div>
			<div class="cena-img3-div">
				<img src="cena1-img3.jpg">
			</div>
	</div>

	<div style="margin-top: -30px;">
		<p class="ceny-text1">Спецификация продукта:</p>
		<p class="ceny-text2">Белый сахар ICUMSA 45 | Происхождение: Бразилия</p>
			<div class="cena-img1-div">
				<img src="cena2-img1.jpg" class="cena-img1">
			</div>
			<div class="cena-img2-div">
				<img src="cena2-img2.jpg">
			</div>
			<div class="cena-img3-div">
				<img src="cena2-img3.jpg">
			</div>
	</div>

	<div style="margin-top: 80px;">
		<p class="ceny-text1">Цены на дополнительные услуги:</p>
			<div class="cena-img1-div">
				<img src="cena2-img1.jpg" class="cena-img1">
			</div>
			<div class="cena-img2-div">
				<img src="cena2-img2.jpg">
			</div>
			<div class="cena-img3-div">
				<img src="cena2-img3.jpg">
			</div>
			<div class="knopka">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
			</div>
	</div>


	<div class="komments">
		<p class="ceny-text1">Комментарий к терминологии:</p>
		<p class="ceny-text2">Международной торговли ICC (Франция)</p>
		<p class="komments-text">
		<b>ICC (Франция)</b> - это Международная торговая палата.<br>
		<b>USP 600</b> - это Унифицированные правила и обычаи для Документарных аккредитивов (SBLC/DLC).<br>
		<b>INCOTERMS 2010</b> – это международные правила применимые в международной торговле.<br>
		<b>CIF</b> - это Международный торговый термин (Стоимость, страхование и фрахт).<br>
		<b>ASWP</b> - это любой безопасный порт мира.<br>
		<b>SBLC, DLC и BG</b> - это резервный аккредитив, Документарный аккредитив и переводная банковская гарантия.<br>
		<b>ТОП 50 банков</b> - это список 50 крупнейших банков мира.<br>
		<b>SGS (Швейцария)</b> - это компания предоставляющая услуги по независимой экспертизе, контролю и сертификации.<br>
		<b>Perfomans Bond</b> - это юридическая гарантия исполнения контракта.<br>
		<b>ICUMSA 45</b> -  это Международный комитет по анализу сахара, где 45 - это число чистоты сахара.<br>
		<b>LOI</b> - это <b>(Письмо о намерениях)</b> о закупке товара, выпускает покупатель на официальном бланке с подробностями компании и подписью. <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>LOI</b> - которые не соответствуют этим требованиям, <span style="color: red; font-weight: bold;"> считаются как недействительным.</span><br>
		<b>SCO</b> - это Мягкое корпоративное предложение, выпускает продавец покупателю.<br>
		<b>ISPO </b>- это безотзывный корпоративный заказ на покупку товара, с полной юридической ответственностью.<br>
		<b>IMFPA (о коммисии) & NCNDA (о неразглашении)</b> - это договор между продавцом и посредником, который заключается после выставлением SWIFT банком покупателя.<br>
		</p>
		<div class="knopka">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>
	</div>

	<div id="procedura-div">
	<div id="procedura">
		<p class="procedura-text1">Процедура работы компании по правилам Международной торговли ICC:</p>
		<p class="procedura-text2">А как это работает?</p>
		<div class="procedura-left1">
			<img src="procedura1.jpg">
		</div>
		<div class="procedura-right1">
			<p class="procedura-text2">Часть № 1.</p>
			<p class="procedura-right1-text"><b>1.</b> Продавец выдает: <b>Персональное предложение</b> + Шаблон <b>LOI.</b><br>
				<b>2.</b> Покупатель выпускает: заполненный <b>LOI.</b><br>
				    &nbsp;&nbsp;&nbsp; <b>LOI</b> - это <b>письмо о намерениях</b> которое сообщает о закупке товара.<br>
				    &nbsp;&nbsp;&nbsp; <b>LOI</b> - выпускает покупатель на официальном бланке с подробностями компании, печатью и подписью.<br>
				    &nbsp;&nbsp;&nbsp; <b>LOI</b> - которые не соответствуют этим требованиям,<span style="color: red; font-weight: bold;"> считаются как недействительным.</span><br>
				<b>3.</b> Продавец выдает: <b>Мягкое Корпоративное Предложение (SCO) +</b> Шаблон <b>ISPO.</b><br>
				<b>4.</b> Покупатель выпускает: заполненный <b>ISPO.</b><br>
				<b>ISPO</b> - это безотзывный корпоративный заказ на покупку, <b>с полной юридической ответственностью.</b><br></p>
		</div>
		<div class="procedura-left2">
			<img src="procedura2.jpg">
		</div>
		<div class="procedura-right2">
			<p class="procedura-text2">Часть № 2.</p>
			<p class="procedura-right1-text"><b>5.</b> Продавец выдает:<b> заполненный Контракт</b> на подпись покупателю.<br>
			<b>6.</b> Покупатель выпускает: <b>подписанный Контракт в течении 48 часов.</b>
			    Отправляет <b>Заявление и Контракт</b> на выпуск<b> SWIFT</b> (один месяц стоимости).
			    <b>Банк Покупателя</b> подтверждает<b> Банку Продавца</b> о выпуске<b> SWIFT, сроком до 3 (трех) рабочих дней.</b><br>
			<b>7. Банк Продавца</b> выпускает <b>POP (документы) и 
			    2% Perfomans Bond </b>(один месяц стоимости)<b> сроком до 15 дней</b> и отправляет покупателю.<br>
			<b>8. Доставка и экспедиция </b>начнется сразу согласно контракту.<br>
			<b>9.</b> Продавец + Посредник: заключают договор <b>NCNDA</b> (о неразглашении)<b> & IMFPA</b> (о комиссии),<b> после выпуска SWIFT Банком Покупателя.</b><br></p>
		</div>
	</div>
	</div>
	<div class="knopka" style="margin-top: 135px; ">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
	</div>

	<div class="chasto">
		<p class="ceny-text1">Часто задаваемые вопросы?</p>
		<p class="chasto-p1">1. Пришлите фотографии или образцы сахара для лабораторного анализа?</p>
		<p class="chasto-p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
		</p><br>
		<p class="chasto-p1">2. Пришлите сертификаты, контракты или образцы документов прошлых поставок товара?</p>
		<p class="chasto-p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
		</p><br>
		<p class="chasto-p1">3. Почему такая дешевая цена сахара и первая загрузка идет 45/55 дней?</p>
		<p class="chasto-p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
		</p>
		<p style="margin-left: 25px;"><i>Последующие загрузки выполняется согласно подписанному контракту.</i></p>
		<div class="knopka" style="margin-top: 40px;">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>
	</div>

	<div id="garant">
		<p class="ceny-text1">Четыре гарантии:</p>
		<p style="text-align: center; color: red; font-size: 20px; line-height: 24px; font-weight: bold"><i>вашей защиты от МОШЕННИЧЕСТВА и получения сахара в порту покупателя</i></p>
		<div class="garant1">
			<img src="pic7.png">
			<p class="garant-text1">Если Вы боитесь что контракт не будет исполнен!</p>
			<p class="garant-text2"> &nbsp;&nbsp;В контракте есть пункт: 
			2% (Perfomans Bond) - это юридическая гарантия продавца за не исполнение заключенного контракта.
			&nbsp;&nbsp;Вы получите 2% от стоимости контракта, если продавец не исполнит его.</p>
		</div>
		<div class="garant2">
			<img src="pic3.jpg">
			<p class="garant-text1">Если Вы хотите увидеть свой сахар!</p>
			<p class="garant-text2"> &nbsp;&nbsp;В контракте есть пункт: 
			2% (Perfomans Bond) - это юридическая гарантия продавца за не исполнение заключенного контракта.
			  &nbsp;&nbsp;Вы получите 2% от стоимости контракта, если продавец не исполнит его.</p>
		</div>
		<div class="garant3">
			<img src="pic2.png">
			<p class="garant-text1">Если вы боитесь потерять деньги!</p>
			<p class="garant-text2"> &nbsp;&nbsp;В контракте есть пункт: 
			2% (Perfomans Bond) - это юридическая гарантия продавца за не исполнение заключенного контракта.
			 &nbsp;&nbsp; Вы получите 2% от стоимости контракта, если продавец не исполнит его.</p>
		</div>
		<div class="garant4">
			<img src="pic8.jpg">
			<p class="garant-text1">Если вы хотите избежать рисков при покупке сахара!</p>
			<p class="garant-text2"> &nbsp;&nbsp;В контракте есть пункт: 
			2% (Perfomans Bond) - это юридическая гарантия продавца за не исполнение заключенного контракта.
			&nbsp;&nbsp;Вы получите 2% от стоимости контракта, если продавец не исполнит его.</p>
			исполнение заключенного контракта, если продавец не исполнит его.</div>
		<div class="knopka" style="margin-top: 40px;">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>
	</div>

	<div id="otzivi">
		<p class="ceny-text1">Большой успех: Отзывы</p>
		<p class="ceny-text2">* Вот таких результатов добились наши покупатели и посредники (агенты)!</p>
		<div class="otziv1-div">
			<div class="otziv-left1">
				<img src="otziv1.jpg">
			</div>
			<div class="otziv-right1">
				<p class="otziv-text1">Компания: International Trading Company<hr>Должность: Директор<br>
				Спот (разовая поставка): 12 500 МТ (Апрель 2015)</p>
				<p class="otziv-text2"><b>Отзыв:</b><i> В Казахстанской Сахарной Компании я нашел лучшие условия (цена, оплата и гарантии).</i></p>	
			</div>
		</div>
		<hr>
		<div class="otziv2-div">
			<div class="otziv-left2">
				<p class="otziv-text1">Компания: Sweets Alexandria Ltd<hr>Должность:<b> Руководитель отдела закупок</b><br>
				Контракт: 1 месяц (пробная партия) + 12 500 x 12 месяцев (Февраль 2015 - Февраль 2016)</p>
				<p class="otziv-text2"><b>Отзыв:</b><i> В Казахстанской Сахарной Компании я нашел лучшие условия (цена, оплата и гарантии).</i></p>	
			</div>
			<div class="otziv-right2">
				<img src="otziv2.jpg">
			</div>
		</div>
		<hr>

		<div class="otziv1-div">
			<div class="otziv-left1">
				<img src="otziv3.jpg">
			</div>
			<div class="otziv-right1">
				<p class="otziv-text1">Компания:  <b>Beijing Kaitong ZhuoErZuan Ltd</b><hr>Должность:<b> Старший менеджер</b><br>
				Контракт: <b>25 000 x 12 месяцев (Ноябрь 2014 - Октябрь 2015)</b></p>
				<p class="otziv-text2"><b>Отзыв: </b><i> Мы долго вели переговоры и получили выгодное предложение. ​​​​​​​</i></p>	
			</div>
		</div>
		<hr>
		<div class="otziv2-div">
			<div class="otziv-left2">
				<p class="otziv-text1">Компания: Sweets Alexandria Ltd<hr>Должность:<b> Руководитель отдела закупок</b><br>
				Контракт: 1 месяц (пробная партия) + 12 500 x 12 месяцев (Февраль 2015 - Февраль 2016)</p>
				<p class="otziv-text2"><b>Отзыв:</b><i> В Казахстанской Сахарной Компании я нашел лучшие условия (цена, оплата и гарантии).</i></p>	
			</div>
			<div class="otziv-right2">
				<img src="otziv4.jpg">
			</div>
		</div>

		<div class="knopka" style="margin-top: 40px;">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>
	</div>

	<p class="ceny-text1" style="margin-top: 80px;">Нам доверяют  крупнейшие компании-лидеры в своей области:</p>
		<div class="doverie">
			<img src="doverie1.jpg">
			<img src="doverie2.jpg">
			<img src="doverie3.jpg">
			<img src="doverie4.jpg">
			<img src="doverie5.jpg">
		</div>
		<div class="knopka" style="margin-top: 40px;">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>

	<p class="ceny-text1" style="margin-top: 50px">Наша команда:</p>
		<div class="team">
			<div><img src=""><p>Имя<br>Фамилия<br>Отчество</p><hr><p>Должность<br>Скайп</p></div>
			<div><img src=""><p>Имя<br>Фамилия<br>Отчество</p><hr><p>Должность<br>Скайп</p></div>
			<div><img src=""><p>Имя<br>Фамилия<br>Отчество</p><hr><p>Должность<br>Скайп</p></div>
			<div><img src=""><p>Имя<br>Фамилия<br>Отчество</p><hr><p>Должность<br>Скайп</p></div>
		</div>	
		<div class="knopka" style="margin-top: 40px;">
			<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>
	<div id="contacts">
		<p class="ceny-text1" style="margin-top: 70px;">Свяжитесь с нами прямо сейчас!</p>
		<p class="ceny-text2">Мы ответим вам в течении 5 минут!</p>
		<p class="ceny-text3">Тел. +7 (908) 055-96-34    |    E-mail:<span style="color: blue;"> kz.sugar.co@icumsa45.ru</span>    |    Скайп: <span style="color: #0099cc;">kz.sugar.co</span></p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.6223517419926!2d30.52015111535894!3d50.44813457947508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce56b2456d3b%3A0xd062ae171b57e947!2z0LLRg9C70LjRhtGPINCl0YDQtdGJ0LDRgtC40LosINCa0LjRl9Cy!5e0!3m2!1sru!2sua!4v1477375302239" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="knopka" style="margin-top: 40px;">
				<button type="submit" name="submit1" class="submit2">Получить предложение сейчас!</button>
		</div>
	</div>

</div>
	<footer>
		<div class="foot">
			<img src="logo.jpg" class="logo-foot">
			<div class="table1">
				<a href="#ALL">Выгоды</a><br>
				<a href="#ceny">Цены</a><br>
				<a href="#procedura-div"> Как это работает</a><br>
				<a href="#garant">Гарантии</a><br>
				<a href="#otzivi">Отзывы</a><br>
				<a href="#contacts">Контакты</a><br>
			</div>
			<div class="table2">
				<p>ТОО Казахстанская Сахарная Компания <br>БИН 150440033703</p>
				<button type="submit" name="submit-footer">
					Заказать звонок
				</button>
			</div>
			<div class="table3">
				<p style="text-align: center;">Адресс компании</p>
				<p>Индекс: 110000,страна Республика Kазахстан, <br>город Костанай, улица Лермонтова, <br>
				   здание 28A, офис № 4.
			</div>
			<a href="#body">
				<div class="naverh">
					<img src="up.png">
				</div>
			</a>
		</div>
	</footer>
</body>
</html>

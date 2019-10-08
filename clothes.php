<!DOCTYPE html>
<head lang="ru">
	<meta charset="utf-8">
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="style/clothes-css.css">
</head>
<body>
	<header>
		<nav>
			<table>
				<tbody>
					<tr>
						<?php
						session_set_cookie_params(60*60*24*100);
						session_start();
						if(isset($_SESSION['tmp']) && (!$_SESSION['tmp'] || isset($_COOKIE['session_hash']) && ($_SESSION['session_hash'] == $_COOKIE['session_hash'])))
						{
							$pages_amount = count($_SESSION['pages']);
							$i = 0;
							while($i < $pages_amount)
							{
								echo '<td> <a href="'.$_SESSION['pages'][$i].'">'.$_SESSION['names'][$i++].'</a> </td>';
 							}
						}
						else
							header('Location: lab_5.php');
						
						?>
					</tr>
				</tbody>
			</table>
		</nav>
	</header>
	<main>
		<table>
			<tbody>
				<tr>
					<td rowspan="3"> 
						<img src="img/clothes/img1.jpg">
					</td>
					<td class="name">Пальто <b>GAP</b></td>
					<td rowspan="3"> 
						<img src="img/clothes/img2.jpg">
					</td>
					<td class="name">Джинсы <b>Wrangler</b></td>
					<td rowspan="3"> 
						<img src="img/clothes/img3.jpg">
					</td>
					<td class="name">Ботинки <b>Selected Homme</b></td>
				</tr>
				<tr>
					<td class="description">
						О товаре: <br>
						Пальто выполнено из шерстяного текстиля. Модель прямого кроя.
						Детали: воротник с лацканами, застежка на пуговицы, 3 внешних кармана, 
						2 внутренних кармана, текстильная подкладка.<br><br>
						Состав:<br>
						Шерсть - 58%, Полиэстер - 31%, Нейлон - 8%, Другое волокно - 3%
					</td>
					<td class="description">
						О товаре: <br>
						Джинсы Wrangler LARSTON выполнены из плотного денима. 
						Детали: шлевки для ремня; застежка на молнию и пуговицу; 
						три кармана спереди; два накладных кармана сзади.<br><br>
						Состав:<br> 
						Хлопок - 99%, Эластан - 1%
					</td>
					<td class="description">
						О товаре: <br>
						Материал верха: натуральная замша<br>
						Внутренний материал: натуральная кожа<br>
						Материал подошвы: искусственный материал<br>
					</td>
				</tr>
				<tr>
					<td class="price">
						380р
					</td>
					<td class="price">
						120р
					</td>
					<td class="price">
						190р
					</td>
				</tr>
				<tr class="line_top">
					<td rowspan="3"> 
						<img src="img/clothes/img4.jpg">
					</td>
					<td class="name">Пальто <b>Jack & Jones</b></td>
					<td rowspan="3"> 
						<img src="img/clothes/img5.jpg">
					</td>
					<td class="name">Джинсы <b>oodji</b></td>
					<td rowspan="3"> 
						<img src="img/clothes/img6.jpg">
					</td>
					<td class="name">Ботинки <b>Levi's</b></td>
				</tr>
				<tr>
					<td class="description">
						О товаре: <br>
						Пальто выполнено из текстиля с добавлением шерсти.
						Прямой крой. Детали: застежка на пуговицы, 2 внешних и 
						2 внутренних кармана, гладкая подкладка.<br><br>
						Состав:<br>
						Полиэстер - 55%, Шерсть - 40%, Другое волокно - 5%
					</td>
					<td class="description">
						О товаре: <br>
						Высота: 26 см<br>
	  					Длина по внутреннему шву: 78 см<br>
						Длина по боковому шву: 103 см<br>
						Сезон: мульти<br>
						Состав:<br>
						Хлопок - 100%
					</td>
					<td class="description">
						О товаре: <br>
						Материал верха: натуральная замша, текстиль<br>
						Внутренний материал: текстиль<br>
						Материал подошвы: резина
					</td>
				</tr>
				<tr>
					<td class="price">
						290р
					</td>
					<td class="price">
						70р
					</td>
					<td class="price">
						250	р
					</td>
				</tr>
				<tr class="line_top">
					<td rowspan="3"> 
						<img src="img/clothes/img7.jpg">
					</td>
					<td class="name">Пальто <b>Tom Tailor Denim</b></td>
					<td rowspan="3"> 
						<img src="img/clothes/img8.jpg">
					</td>
					<td class="name">Джинсы <b>Pepe Jeans</b></td>
					<td rowspan="3"> 
						<img src="img/clothes/img9.jpg">
					</td>
					<td class="name">Ботинки <b>Levi's</b></td>
				</tr>
				<tr>
					<td class="description">
						О товаре: <br>
						Пальто выполнено из смесового текстиля с гладкой подкладкой. 
						Модель прямого силуэта. Детали: английский воротник, застежка 
						на пуговицах, два боковых кармана, один внутренний карман.<br><br>
						Состав: <br>
						Полиэстер - 61%, Вискоза - 17%, Шерсть - 11%, Полиамид - 4%, Полиакрил - 4%, Хлопок - 3%
					</td>
					<td class="description">
						О товаре: <br>
						Длина по внутреннему шву: 80 см<br>
						Сезон: мульти<br>
						Цвет: синий<br>
						Узор: однотонный<br>
						Посадка: slim fit<br><br>
						Состав:<br> 
						Хлопок - 99%, Эластан - 1%
					</td>
					<td class="description">
						О товаре: <br>
						Материал верха: натуральная замша, текстиль<br>
						Внутренний материал: текстиль<br>
						Материал подошвы: резина
					</td>
				</tr>
				<tr>
					<td class="price">
						140р
					</td>
					<td class="price">
						100р
					</td>
					<td class="price">
						200р
					</td>
				</tr>
			</tbody>
		</table>
	</main>
	<footer>
		<div class="footer_container">
			<div class="footer_schedule">
				<table class="footer_table">
					<caption>Магазин</caption>
					<?php
						if(isset($_SESSION['tmp']) && (!$_SESSION['tmp'] || isset($_COOKIE['session_hash']) && ($_SESSION['session_hash'] == $_COOKIE['session_hash'])))
						{
							$pages_amount = count($_SESSION['pages']);
							$i = 0;
							while($i < $pages_amount)
							{
								echo '<tr><td> <a href="'.$_SESSION['pages'][$i].'">'.$_SESSION['names'][$i++].'</a> </td></tr>';
 							}
						}
					?>
				</table>
			</div>
			<div><span>Nasevich Andrew - 2019</span></div>
		</div>
	</footer>  	
</body>
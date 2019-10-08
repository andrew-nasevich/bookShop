<!DOCTYPE html>
<head lang="ru">
	<meta charset="utf-8">
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="style/main-css.css">
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
		<div>
			<div class="news">
				<div>
					<h2 style="text-align: center; color: red;">Мы открылись!</h2>
					<p>Март 11, 2019</p>
					<img src="img/main/news1.jpg" class="we_opened" width="200px">
					<p>Мы рады сообщить Вам об открытии нашего <b>	интернет-магазина одежды и аксессуаров</b>!</p>

					<p>У нас Вы сможете купить детскую одежду с качественных материалов по доступным ценам.</p>

					<p>На данный момент мы представлены брендами одежды <b>GAP, Tom Tailor Denim</b> и т.д.</p>
					<p>Интернет-магазин еще в стадии наполнения, если вы не нашли заинтересовавший Вас товар от наших торговых марок, напишите нам и мы вышлем Вам стоимость и возможность заказа данной одежды.</p>

	 

					<p>Приятных Вам покупок!</p>

					<p>С уважением, интернет-магазин одежды и аксессуаров </p>
				</div>
				<?php
					// if (isset($_GET['tmp']) && !isset($_COOKIE['voted'])){
						
						// setcookie('voted');
						
						// if (!isset($_SESSION['yes_vote']) && !isset($_SESSION['no_vote']))
						// {
							// $_SESSION['yes_vote'] = 0;
							// $_SESSION['no_vote'] = 0;
						// }
						
						// if ($_GET['tmp'] == 'yes')
							// $_SESSION['yes_vote']++;
						// else
							// $_SESSION['no_vote']++;
					// }
					
					// if (!isset($_COOKIE['voted']))
					// {
						// echo'<form method="GET">
								// <b>Вам нравится наш сайт?</b>
								// <input type="radio" name="tmp" value="yes" checked>Да
								// <input type="radio" name="tmp" value="no">Нет
								// <input type="submit" size="40" value="Голосовать"></input>
							// </form>';
					// }
					// else
					// {
						// echo '<p>Результат:</p> 
							  // <p> Понравилось - '.$_SESSION[].'</p>';
					// }
				?>
			</div>
			<table class="schedule">
				<caption>Адреса магазинов</caption>
				<tbody>
					<tr class="places">
						<th>Название</th>
						<th>Адрес</th>
						<th>Телефоны</th>
						<th>График работы</th>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, пр. Независимости, 13</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 20:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, на пр-те Дзержинского, 19</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 20:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, ул. Руссиянова, 4</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, пр. Дзержинского, 122</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, ул. Сурганова, 21</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, ул. Притыцкого, 83</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, ул. Притыцкого, 97</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, ул. Могилевской, 5Б</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, ул. Рокоссовского, 77В</td>
						<td>+375 (29) 695 25 25</td>
						<td>Ежедневно: 10:00 – 18:00</td>
					</tr>
					<tr>
						<td>Магазин</td>
						<td>г. Минск, пр Победителей, 3</td>
						<td>+375 (29) 695 25 25</td>
						<td>Пн-Пт: 10:00 - 21:00, Сб-Вс: 10:00 - 20:00</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="payment">
			<h2 style="text-align: center;">Специальное предложение - рассрочка на 24 месяца с первым взносом от 0%</h2>
			<br>
			<h3>19 МАРТА — 8 АПРЕЛЯ</h3>

			<p>Встречайте самое яркое предложение сезона!</p>

			<p>Рекордная рассрочка* на 24 месяца. Кроме того, теперь Вы можете выбрать товар, заключить договор с возможностью первоначального взноса 0%!<br> Можно получить товар и начать им пользоваться, а уже после этого начать выплату взносов по рассрочке.</p>

			<p>Покупайте товары мировых брендов в РАССРОЧКУ на следующих условиях:</p>
				<ul>
					<li>от 0% первый взнос,</li>
					<li>0% переплат,</li>
					<li>24 месяцев – срок рассрочки,</li>
					<li>сумма покупки от 50 рублей,</li>
					<li>без справки о доходах.</li>
				</ul>
			<br>
			<p>Воспользуйтесь кредитным калькулятором для расчета ежемесячного платежа и других параметров, чтобы выбрать наиболее подходящую для Вас рассрочку.</p>

			<p>Итак, долой ограничения и трудные обязательства, порадуйте себя покупками, позвольте себе удовольствия! А наш магазин поддержит Вас в начинаниях!</p>

			<p>Хотите что-то уточнить? Спросите у нас по телефону 275 (единый мобильный номер) или 8-017-359-59-59 (городской).</p>
			<?php
				$i = rand(1, count($_SESSION['banners'])) - 1;
				echo '<div style="text-align: center;"><a href="' . $_SESSION['bannersUrls'][$i] . '"><img src="'.$_SESSION['banners'][$i].'"></a></div>';
			?>
		</div>
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
<!DOCTYPE html>
<head lang="ru">
	<meta charset="utf-8">
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="style/paymaent-css.css">
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
		<div class="description">
			<h1>Формы и способы оплаты</h1>

 			<h2>Оплата при получении</h2>	
			<p>При доставке курьером или самовывозе Вы оплачиваете заказ наличными или банковской картой после проверки комплектности и качества товаров.</p><br>

			<img src="img/payment/p1.png" class="cards">
			<h2>Предоплата банковской картой</h2>
			<p>Принимаем к оплате Банковские карты<br>
			Предоплата производится через интернет в режиме реального времени непосредственно после оформления заказа. Минимальная сумма платежа составляет 0,10 рублей. Максимальная — 1000 рублей.</p>

			<p>К оплате принимаются карты Visa/MasterCard всех типов.</p><br>

			<img src="img/payment/p2.gif">
			<h2>Система Расчет (ЕРИП)</h2>
			<p>Работаем с Системой Расчёт (ЕРИП)<br>
			Оплата через систему «Расчет» (ЕРИП) в 23 банках и РУП "Белпочта", свыше 15 500 пунктов: кассы, банкоматы, инфокиоски, устройства приема денег. Наиболее удобна при использовании Интернет-банка. Счёт можно оплатить в течение 2 дней.</p><br>

			<img src="img/payment/p3.png">
			<h2>SMS-оплата через МТС, life:)</h2>
			<p>Оплата со счёта мобильного телефона МТС, life:). На базе платёжной системы iPay. Отправка SMS бесплатна. iPay возьмёт дополнительно 2-10% от суммы.</p><br>

			<h2>Наложенный платеж (+5% от суммы заказа)</h2>
			<p>Наложенный платеж — это возможность оплаты заказа в отделении почтовой связи в момент его получения. При этом работник отделения почтовой связи взыскивает с адресата при вручении ему почтового отправления сумму наложенного платежа, которая направляется почтовым денежным переводом в наш адрес. Плата за пересылку почтового денежного перевода составляет от 5% до 0,5% от суммы перевода, но не менее 1 руб. Комиссия за риски при использовании данной формы оплаты/доставки составит 5% от суммы заказа.</p>

			<p>Формы оплаты: безналичная и наличная.</p>

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
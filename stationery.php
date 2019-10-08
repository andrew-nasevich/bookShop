<!DOCTYPE html>
<head lang="ru">
	<meta charset="utf-8">
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="style/stationery-css.css">
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
			<h1>Канцтовары</h1>
			<div class="literature_description">
				<p>Канцтовары – это категория продукция, которая необходима абсолютно каждому человеку. Канцелярская продукция нужна современному человеку на каждом этапе его жизни. Мы пользуемся ручками, карандашами, ластиками, циркулями, линейками и прочим в школе. В юношестве, в университетские годы, на смену ручкам и карандашам приходят папки, толстые тетради, блокноты, бумага для печати и так далее. Повзрослев и устроившись на первую работу, мы покупаем продукцию иного образца: дыроколы, степлеры, всевозможные приспособления для выполнения наших повседневных рабочих обязанностей.</p><br>
				<p>Вам нужны канцтовары? Предлагаем купить их в нашем интернет-магазине. У нас вы найдете все, что может потребоваться в школе и на производстве. Предлагаем вам и подарочную категорию товаров, где представлена продукция для подарков коллегам и друзьям. В ассортименте представлены: подарочные наборы; различные руки и карандаши; ластики; магнитные доски; маркеры и фломастеры; офисная бумага; скотч; скрепки – в общем все, что может вам пригодится.</p>
			</div> 
		</div>
		<table>
			<tbody>
				<tr>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s1.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s2.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s3.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s4.jpg">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="el">
							<div>
								<p>Рюкзак П3820 (чёрный)</p>
								<p>Polar</p>
								<p class="price">51.31р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
								<p>Скетчбук "Simply"</p>
								<p>Daler-Rowney</p>
								<p class="price">29.21р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Пастель художественная "Сонет" (36 цветов)</p>
								<p>Невская палитра</p>
								<p class="price">28.05р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Рюкзак-мешок "Greenwood"</p>
								<p>Reisenthel</p>
								<p class="price">13.67р</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="el">
							<div>
									<img src="img/stationery/s5.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s6.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s7.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s8.jpg">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="el">
							<div>
								<p>Доска магнитная "Коты"</p>
								<p>Все на местах</p>
								<p class="price">27.33р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Пенал "Orange"</p>
								<p>Еж Стайл</p>
								<p class="price">17.07р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Глобус (физический; с подсветкой; 210 мм)</p>
								<p>Globen</p>
								<p class="price">26.71р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Набор карандашей цветных "Color Peps" (48 цветов)</p>
								<p>Maped</p>
								<p class="price">23.03р</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s9.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s10.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s11.jpg">
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<img src="img/stationery/s12.jpg">
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="el">
							<div>
								<p>Набор резинок канцелярских "Attomex" (1000 г)</p>
								<p>deVente</p>
								<p class="price">21.65р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Записная книжка "Пес" (126х174 мм)</p>
								<p>Escalada</p>
								<p class="price">18.90р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>
								<p>Ручка шариковая синяя "Зайка"</p>
								<p>Darvish</p>
								<p class="price">3.87р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="el">
							<div>	
								<p>Тетрадь полуобщая в клетку "Royalty" (48 листов)</p>
								<p>Академия Групп</p>
								<p class="price">0.95р</p>
							</div>
						</div>
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
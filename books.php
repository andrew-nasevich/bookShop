<!DOCTYPE html>
<head lang="ru">
	<meta charset="utf-8">
	<title>Онлайн магазин</title>
	<link rel="stylesheet" href="style/books-css.css">
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
			<h1>Художественная литература</h1>
			<div class="literature_description">
				<p>Добро пожаловать в мир художественной литературы!</p>
				<p>Художественная литература — пространство, где каждый находит то, что ему по душе.
					Фэнтези и фантастика, любовные романы, детективы, вечная классика, модные бестселлеры и многое другое.</p>

				<p>Пополняйте домашнюю библиотеку изданиями зарубежных, русских и белорусских авторов, комиксами, томиками стихов любимых поэтов, иностранной литературой на языке оригинала, историческими романами. Выбираете подарок для друга-книголюба?  Загляните в интернет-магазин — здесь точно найдется то, что вам нужно.</p>    

				17 лет наш магазин радует новинками лучших авторов, солидными собраниями сочинений и великолепными подарочными изданиями. Здесь вас всегда ждут замечательные книги-миры, книги-открытия, книги-друзья!
			</div> 
		</div>
		<table>
			<tbody>
				<tr>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books1.jpg">
								<p>В метре друг от друга</p>
								<p>Рейчел Липпинкотт</p>
								<p class="price">16.31р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books2.jpg">
								<p>Чужак</p>
								<p>Стивен Кинг</p>
								<p class="price">20.81р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books3.jpg">
								<p>Твоя вторая жизни, или шанс все изменить</p>
								<p>Рафаэлла Джордано</p>
								<p class="price">8.05р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books4.jpg">
								<p>Куриный бульон для души: 101 лучшая история</p>
								<p>Джек Кэнфилд</p>
								<p class="price">18.67р</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books5.jpg">
								<p>Когда я вернусь, будь дома</p>
								<p>Эльчин Сафарли</p>
								<p class="price">17.33р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books6.jpg">
								<p>Замок из стекла. Что скрывает прошлое</p>
								<p>Джаннетт Уоллс</p>
								<p class="price">17.07р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books7.jpg">
								<p>1984 (м)</p>
								<p>Джордж Оруэлл</p>
								<p class="price">10.72р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books8.jpg">
								<p>Хюгге, или Уютное счастье по-датски</p>
								<p>Хелен Расселл</p>
								<p class="price">16.15р</p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books9.jpg">
								<p>Цветы для Элджернона</p>
								<p>Дэниел Киз</p>
								<p class="price">15.65р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books10.jpg">
								<p>Атлант расправил плечи (комплект из 3-х книг)</p>
								<p>Айн Рэнд</p>
								<p class="price">48.90р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books11.jpg">
								<p>1984. Скотный Двор</p>
								<p>Джордж Оруэлл</p>
								<p class="price">11.87р</p>
							</div>
						</div>
					</td>
					<td>
						<div class="book">
							<div>
								<img src="img/books/books12.jpg">
								<p>Над пропастью во ржи (м)</p>
								<p>Джером Сэлинджер</p>
								<p class="price">9.27р</p>
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
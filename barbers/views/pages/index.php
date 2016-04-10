<article>
	<div class="block">
		<div class="item-main">
			<img src="images/barbers-main.png">
			<p>
			Бербершоп - мужская парикмахерская, где работают и обслуживаются исключительно мужчины. Барбершоп - это место, где получаешь отличную стрижку, гладковыбритую кожу, ухоженные бороду и усы, но и прекрасное общение «по душам». Барбершоп - это целая культура и история, родоначальниками которой является Америка. 
			<p>В России Барбершопы набирают популярность и наш сайт поможет вам выбрать лучший Барбершоп из всех возможных!</p>
		</div>
		<div class="top-main">
			<div class="items-topten">
			<h3>ТОП-5 Барбершопов</h3>
			<hr>
			<?php 

			include 'db_connect.php';

			$result = mysql_query(" SELECT * FROM barbersshops ORDER by rate DESC LIMIT 5");
			while ($row = mysql_fetch_array($result))
			{?>
				<div class="item-topten">
					<h4><?php echo $row['name'] ?></h4>
					<p>Город:<?php echo $row['city'] ?></p>
					<p>Оценка:<?php echo $row['rate'] ?></p>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>

	
	
	<div class="slider">
	          
	  <div class="item"><img src="images/slider/item-1.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-2.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-1.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-2.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-1.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-2.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-1.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-2.jpg" alt="#"></div>
	 
	</div>
	<!-- Слайдер -->
	<div class="wanttorate">
		<a href="#" class="main-button">Хочу попасть в рейтинг</a>
		<br>
		<br>
		<p>Если ваш барбершоп отстуствует в рейтинг, то вы можете отправить запрос на добавление.</p>
	</div>

	<div class="block items-footer">
		<h3>Недавно присоединились</h3>
		<img src="http://placehold.it/120x120">
		<img src="http://placehold.it/120x120">
		<img src="http://placehold.it/120x120">
	</div>
	<div class="block items-footer">
		<h3>Новости</h3>
		<ul>
			<li>Добавили новую возможность сделать мир ярче и интереснее!</li>
			<li>Все лучшее в одном месте!</li>
			<li>Оценивай и будь на высоте!</li>
			<li>Пора купить для бороды эту штучку!</li>
		</ul>	
	</div>

</article>
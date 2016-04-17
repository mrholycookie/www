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
			<h3>Лучшие Барбершопы</h3>
			<?php 

			include 'db_connect.php';

			$result = mysql_query(" SELECT * FROM barbersshops ORDER by full DESC LIMIT 5");
			while ($row = mysql_fetch_array($result))
			{?>
				<div class="item-topten">
					<h4><a href="index.php?view=item&id=<?php echo $row['id']?>"><?php echo $row['name'] ?></a></h4>
					<p> <?php echo $row['city'] ?></p>
					<p><i class="fa fa-star fa-lg"></i> <?php echo rtrim(rtrim($row['full'], '0'), '.'); ?></p>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>

	
	
	<div class="slider">
	          
	  <div class="item"><img src="images/slider/item-1.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-2.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-3.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-4.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-5.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-1.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-2.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-3.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-4.jpg" alt="#"></div>
	  <div class="item"><img src="images/slider/item-5.jpg" alt="#"></div>

	 
	</div>
	<!-- Слайдер -->
	<div class="wanttorate">
		<a href="index.php?view=add" class="main-button">Хочу попасть в рейтинг</a>
		<br>
		<br>
		<p>Если ваш барбершоп отстуствует на сайте, то вы можете отправить запрос на его добавление</p>
	</div>

	<div class="block items-footer">
		<h3>Недавно присоединились</h3>
		<?php 

			include 'db_connect.php';

			$result = mysql_query(" SELECT * FROM barbersshops ORDER by id DESC LIMIT 5");
			while ($row = mysql_fetch_array($result))
			{?>
		<div class="items-footer-img-disc" data-title="<?php echo $row['city']?>">
			<a href="index.php?view=item&id=<?php echo $row['id']?>"><img src="images/<?php echo $row['image'] ?>" width="120px"></a>

		</div>
		
		
		<?php } ?>
	</div>

</article>
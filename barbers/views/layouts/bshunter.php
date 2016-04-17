<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Рейтинг Барбрершопов</title>
	<meta name="keywords" content="Барбершоп, barber, barbershop, отзывы Барбершоп, лучший барбрешоп, Барбер" />
	<meta name="description" content="Все Барбрешопы России. Рейтирнг Барбершопов!" />
	<meta name="viewport" content="width=1024">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" language="javascript" src="js/behavior.js"></script>
	<script type="text/javascript" language="javascript" src="js/rating.js"></script>
	<link rel="stylesheet" type="text/css" href="css/rating.css" />
</head>
<body>

<div class="container">
		
<header>
	<a href="index.php"><img src="images/logo.png"></a>
	<ul>
		<li><a href="index.php">Главная</a></li>
		<li><a href="?view=rate">Рейтинг</a></li>
<!-- 		<li><a href="?view=reviews">Обзоры</a></li>
		<li><a href="?view=articles">Статьи</a></li> -->
		<li><a href="?view=contacts">Контакты</a></li>
	</ul>
</header>

<?php include($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php'); ?>

<footer>
	<p>&copy;2016 bshunter.ru - все барбершопы России. Рейтинг барбершопов!</p> 	
</footer>


<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
$(document).ready(function() {
 
  $(".slider").owlCarousel({
 	  navigation: false,
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 	  
  });
 
});
</script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->

</div> <!-- .container -->
</body>
</html>
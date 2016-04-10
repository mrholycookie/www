<?php 
$id = $_GET['id'];
$bshunt = get_item($id);
include ('_drawrating.php');
?>
<article>
	<div class="block">
        <div class="item-main single-barber">
            <img src="http://placehold.it/300x300">
        </div>
        <div class="top-main single-barber-description">
            <div class="items-topten">
            <h3>Констонтинопольская</h3>
            <hr>
                <p>Город:<?php echo $bshunt['name'] ?></p>
                <p>Официальный сайт:</p>
                <p>Телфон:</p>
                <p>Оценка:</p>
                <p>Проголосовать: <?php echo rating_bar('1'); ?></p>

                <img src="http://placehold.it/500x200">
            </div>
        </div>
    </div>

    <div class="block single-barber-description-full">
        <h3>Описание</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</article>

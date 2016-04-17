<?php 
include ('_drawrating.php');
$id = $_GET['id'];
$bshunt = get_item($id);
?>
<article>
    <div class="block single-barber-block">
        <div class="item-main single-barber">
            <img src="images/<?php echo $bshunt['image'] ?>" style="border:1px solid black;">
        </div>
        <div class="top-main single-barber-description">
            <div class="items-topten">
                <span class="single-barber-description-rating"><?php echo rtrim(rtrim($bshunt['full'], '0'), '.'); ?></span>
                <h3><?php echo $bshunt['name'] ?></h3>
                <p><i class="fa fa-map-marker fa-lg"></i><b> <?php echo $bshunt['city'] ?></b>, <?php echo $bshunt['adress'] ?></p>
                <p><i class="fa fa-external-link fa-lg"></i> <a href="<?php echo $bshunt['site'] ?>"><?php echo $bshunt['site'] ?></a></p>
                <p><i class="fa fa-phone fa-lg"></i> <?php echo $bshunt['tel'] ?></p>
                <p><?php echo rating_bar($_GET['id']); ?></p>
            </div>
        </div>
    </div>
    <div class="single-barber-description-full-comments">
        <div id="vk_comments"></div>
        <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {limit: 10, width: "490", attach: "audio"});
        </script>
    </div>
    <div class="block single-barber-description-full">
        <h3>Описание</h3>
        <p><? echo $bshunt['description'] ?></p>
    </div>
    <div class="block single-barber-description-full">
        <h3>Как найти Барбершоп?</h3>
        <p><?php echo $bshunt['map'] ?></p>
    </div>
    <div class="clearfix"></div>
    </div>
</article>


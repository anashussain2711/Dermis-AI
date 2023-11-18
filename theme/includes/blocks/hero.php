<section class="hero">
    <div class="inner">
        <div class="main" style="background-image:url('<?php echo $block["background_image"]?>');">
            <div class="left">
                <div class="heading"><?php echo $block["heading"]?></div>
                <div class="hero-features-slider">
                    <?php foreach($block["features"] as $feature){?>
                        <div class="feature"><span class="fancy"><?php echo $feature["feature"]?></span> App</div>
                    <?php } ?>
                </div>
                <div class="description"><?php echo $block["description"]?></div>
                <a href="<?php echo $block["button"]["url"]?>" class="button"><?php echo $block["button"]["title"]?></a>
            </div>
            <div class="right">
                <img class="mockup" src="<?php echo $block["mobile_mockup"]?>" alt="">
                <img src="<?php echo $block["popup_1"]?>" alt="" class="popup1 moveable">
                <img src="<?php echo $block["popup_2"]?>" alt="" class="popup2 moveable">
                <div class="card moveable">
                    <div class="card-left">
                        <img src="<?php echo $block["card_image"]?>" alt="">
                    </div>
                    <div class="card-right">
                        <div class="name">Ice Forxane</div>
                        <div>$63,584 per month<br>
                            400+ App Users
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stats">
            <div class="text"><?php echo $block["stats"]["text"]?></div>
            <div class="number">$<?php echo number_format($block["stats"]["number"])?></div>
        </div>
    </div>
</section>
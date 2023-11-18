<?php
$logo = get_field("logo", "options");
$nav_links = get_field("nav_links", "options");
$form_button = get_field("form_button", "options");
?>
<header class="header">
    <div class="inner">
        <div class="logo-wrap">
            <img src="<?php echo $logo;?>" alt="">
        </div>
        <div class="links-wrap">
            <div class="nav">
                <?php foreach($nav_links as $link){?>
                    <a href="<?php echo $link["link"]["url"]?>" class="link"><?php echo $link["link"]["title"]?></a>    
                <?php } ?>
            </div>
            <div class="form-button">
                <a href="<?php echo $form_button["url"]?>"><?php echo $form_button["title"]?></a>
            </div>
        </div>
    </div>
</header>
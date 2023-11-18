<section class="info-sections">
    <div class="inner">
        <?php foreach($block["sections"] as $section){?>
            <div class="blurb <?php if($section["blurb_orientation"]){ echo "inverted";} echo $section["type"];?>">
                <?if($section["type"] == "features"){?>
                    <div class="content">
                        <?php foreach($section["features"] as $feature){?>
                            <div class="feature">
                                <img src="<?php echo $feature["icon"]?>" alt="" class="icon">
                                <div class="heading"><?php echo $feature["heading"]?></div>
                                <div class="description"><?php echo $feature["description"]?></div>
                            </div>    
                        <?php } ?>
                    </div>
                <?php } else if($section["type"] == "regular"){?>
                    <div class="content">   
                        <div class="subheading"><?php echo $section["subheading"]?></div>
                        <div class="heading"><?php echo $section["heading"]?></div>
                        <div class="description"><?php echo $section["description"]?></div>
                        <a href="<?php echo $section["button"]["url"]?>" class="button"><?php echo $section["button"]["title"]?></a>
                    </div>
                <?php } else if($section["type"] == "memberships"){?>
                    <div class="content">   
                        <div class="subheading"><?php echo $section["subheading"]?></div>
                        <div class="heading"><?php echo $section["heading"]?></div>
                        <div class="description"><?php echo $section["description"]?></div>
                        <div class="slider">
                            <input type="range" name="no_of_mems" id="no_of_mems">
                        </div>
                        <div class="memberships">
                            <div class="left">
                                <div class="text">
                                If you sell only <br>
                                <span class="bold"><span class="number">nigga</span> Memberships /mo</span>
                                <br>
                                After 2 years, your <b>monthly recurring revenue</b> will be:
                                </div>
                                <div price="<?php echo $section["memberships_slider"]["price"]?>" class="price">$<span class="number">69</span></div>
                            </div>
                            <div class="right">
                                Includes <br>
                                <div class="features">
                                    <?php foreach($section["memberships_slider"]["includes"] as $feature){?>
                                        <div class="feature">
                                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.7173 26.75C20.8972 26.75 26.7173 20.9299 26.7173 13.75C26.7173 6.5701 20.8972 0.75 13.7173 0.75C6.53739 0.75 0.717285 6.5701 0.717285 13.75C0.717285 20.9299 6.53739 26.75 13.7173 26.75Z" fill="url(#paint0_linear_60_122)"/>
                                                <path d="M7.83398 14.5905L11.1958 17.9523L19.6003 9.54773" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <defs>
                                                <linearGradient id="paint0_linear_60_122" x1="15.3547" y1="26.75" x2="15.3547" y2="0.75" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.0658566" stop-color="#6D00F7"/>
                                                <stop offset="1" stop-color="#AE70FD"/>
                                                </linearGradient>
                                                </defs>
                                            </svg>
                                            <?php echo $feature["feature"]?>
                                        </div>    
                                    <?php } ?>
                                </div>    
                            </div>
                        </div>
                        <a href="<?php echo $section["button"]["url"]?>" class="button"><?php echo $section["button"]["title"]?></a>
                    </div>
                <?php } ?>
                <div class="image">
                    <img class="background" src="<?php echo $section["image"]["background"]?>" alt="">
                    <img class="base" src="<?php echo $section["image"]["base"]?>" alt="">
                    <?php foreach($section["image"]["floats"] as $float){?>
                        <img src="<?php echo $float["float"]?>" alt="" class="float moveable">
                    <?php } ?>
                </div>
            </div>    
        <?php } ?>
    </div>
</section>
<?php $links = array(
    'production' => 'production.php',
    'videos'     => '#',
    'gear'       => 'gear.php'
); ?>
<!-- https://www.youtube.com/watch?v=hp0mKFkQ1NE -->
<div class="header">
    <div class="wc">
        <div class="header-logo"></div>
        <div class="header-menu">
            <ul class="header-menu-list">
                <li class="header-menu-list-li"><a href="/ru/" class="header-menu-list-link">RUS </a></li>
                <li class="header-menu-list-li"><a href="/" class="header-menu-list-link">HOME </a></li>
                <li class="header-menu-list-li"><a href="<?php echo $links['production']; ?>" class="header-menu-list-link">     PRODUCTION  </a></li>
                <li class="header-menu-list-li"><a href="<?php echo $links['gear']; ?>" class="header-menu-list-link">    GEAR             </a></li>
                <!-- <li class="header-menu-list-li"><a href="#" class="header-menu-list-link">                 TEAM      </a></li>
                 <li class="header-menu-list-li"><a href="#" class="header-menu-list-link"> GALLERY     </a></li>
                 <li class="header-menu-list-li"><a href="#" class="header-menu-list-link">  CONTACT  </a></li> -->
            </ul>
        </div>
    </div>

</div>
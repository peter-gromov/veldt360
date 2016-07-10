<!doctype html>
<html class="no-js" lang="">

    <?php include('head.php'); ?>

    <body>
        <?php include('header.php'); ?>
<a name="home"></a>
        <?php include('video_gear.php'); ?>

<!-- <div class="row-35">
    <div class="wc" style="width: 1280px;">
        <a href="#"><img src="hawkbuy.jpg" style="max-width: 100%;" alt=""></a>
    </div>
</div> -->


<div class="row-25">
    <div class="wc">
        <div class="row-25-text">PROFESSIONAL GEAR FOR DYNAMIC 360 VIDEO</div>
        <div style="text-align:center; margin-bottom: 25px;"><img src="gimblas2.jpg" alt="">      </div>
        <div class="row-25-text2">We create full in-house solutions for 360 Video and Photo Production, <br>
offering custom made cameras and gimbals.</div>  
        <div Style="text-align: center;"><a href="<?php echo $links['production']; ?>" class="vbutton black">ABOUT 360 PRODUCTION</a></div>
    </div>

</div>


<a  name="gimblas"></a>
   <?php include('gear_gimblas.php'); ?>
<div class="row-35">
    <div class="wc" style="width: 1280px;">
        <a href="#"><img src="gear_patented.jpg" style="max-width: 100%;" alt=""></a>
    </div>
</div>
<a  name="cameras"></a>
   <?php include('gear_cameras.php'); ?>
   <div class="row-35">
    <div class="wc" style="width: 1280px;">
        <a href="#"><img src="gear_camera.jpg" style="max-width: 100%;" alt=""></a>
    </div>
</div>
<a  name="platforms"></a>
   <?php include('gear_platforms.php'); ?>

<div class="row-35">
    <div class="wc" style="width: 1280px;">
        <a href="#"><img src="gear_telebot.jpg" style="max-width: 100%;" alt=""></a>
    </div>
</div>
<!--

<a name="production"></a>
<div class="row-2">
    <div class="wc">
        <div class="row-2-text">Veldt360 is a Hong Kong based company offering 360 Video Production services
 and Gear solutions for 360 shooting.</div>
        <div class="row-2-button">
            <a href="#" class="vbutton vbutton-red">INQUIRE</a>
        </div>
    </div>
</div>

<div class="row-3">
    
</div> 

-->
 
<!--
<div class="row-4">
    <div class="wc">
        <div class="row-4-title">RE-LIVE THEM AGAIN IN VR</div>
        <div class="row-4-subtitle">Samsung GearVR HMD with Samsung S6 transforms into a powerful, <br>wireless guide to the world of Virtual Reality, where you can<br> experience the footage again like never before.</div>
        <div class="row-4-button"><a href="#" class="vbutton">Inquire</a></div>
    </di

-->






    <?php include('contactus.php'); ?>

        
    <?php include('footer.php'); ?>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/vendor/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <?php if($forceRussiaRedirecct){ ?> 
        <script>
            $(document).ready(function(){
                console.log(1);
                $.ajax({
                    url: 'http://ip-api.com/json',
                    success: function(d){
                         console.log(2);
                        console.log(d);
                        if( typeof d.country != 'undefined'){
                             console.log(3);
                            if(  d.country == 'Russia'){
                                 console.log(4);
                                window.location.href = 'http://veldt360.com/ru/';
                            }
                        }
                    }
                });
            });
        </script>
        <?} ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

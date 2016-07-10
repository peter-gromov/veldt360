<?php

$forceRussiaRedirecct = false;
 if( empty($_COOKIE['redirect_russia1'] ) ){
    setcookie('redirect_russia1', '1', time() + 24 * 60 * 60 );
    $forceRussiaRedirecct = true;
 }
 ?>

<?php $slider_path = '/img/sliders/'; ?>
<!doctype html>
<html class="no-js" lang="en">

    <?php include('head.php'); ?>

    <body>
        <?php include('header.php'); ?>
        <a name="home"></a>
        <?php include('video.php'); ?>

<a name="production"></a>
<div class="row-2">
    <div class="wc">
        <div class="row-2-text">Veldt360 is a Hong Kong based company offering 360 Video Production services
 and Gear solutions for 360 shooting.</div>
        <div class="row-2-button">
            <a href="#contact_us" class="vbutton vbutton-red red">INQUIRE</a>
        </div>
    </div>
</div>

<div class="row-25">
    <div class="wc">
        <div class="row-25-text">UNIQUE GIMBALS AND ROBOTIC PLATFORMS</div>
        <div style="text-align:center; margin-bottom: 25px;"><img src="gimblas.jpg" alt="">      </div>
        <div class="row-25-text2">We create full in-house solutions for 360 Video and Photo Production, <br>
offering custom made cameras and gimbals.</div>  
        <div Style="text-align: center;"><a href="https://www.youtube.com/watch?v=hp0mKFkQ1NE" class="vbutton black" target="_blank">BACKSTAGE VIDEO</a></div>
    </div>

</div>

<div id="slider1">
  <ul>
  <?php $sliders = array(
    array(
      'img' => $slider_path . 'podves_1.png',
      'title' => 'HAWK Stereo',
      'sub_title' => 'Gimbal for Odyssey'
    ),
    array(
      'img' => $slider_path . 'drone_norm.png',
      'title' => 'AERIAL 360 SHOOTING',
      'style' => 'margin-top: 30px'
    ),
    array(
      'img' => $slider_path . 'cable.png',
      'title' => 'DYNAMIC 360 SHOOTING',
      'style' => 'margin-top: 60px'
    )
  ); ?>
  <?php foreach ($sliders as $slide) { ?>
    <li style="height: 448px;">
      <img src="<?php echo $slide['img']; ?>" alt="<?php echo $slide['title']; ?>"<?php echo $slide['style'] ? ' style = "'.$slide['style'].'"' : ''; ?>>
      <div class="info-block">
        <div class="title"><?php echo $slide['title']; ?></div>
        <?php if ($slide['sub_title']) { ?>
        <div class="sub-title"><?php echo $slide['sub_title']; ?></div>
        <?php } ?>
        <div class="buttons">
          <a href="#">Learn More</a>
          <a href="https://www.youtube.com/watch?v=hp0mKFkQ1NE" target="_blank">Watch Video</a>
        </div>
      </div>
    </li>
  <?php } ?>
  </ul>
</div>

<div class="hor-red-but"><a href="<?php echo $links['gear']; ?>">More about our gear</a></div>

<div class="row-45" style="margin-bottom: 0;">
  <div class="wc">
    <div class="row-25-text">OUR VIDEOS</div>
    <div class="spoiler" data-show="row-25">(How to Watch)</div>
  </div>

    <!-- Spoiler -->

  <div id="row-25" class="spoiler-hide">
    <div class="row-25-text2">Virtual Reality allows you to experience 360 video even from your smarphone. <br>
For best experience use head mounted device (HMD) or choose from following options:</div>  
    <div class="row-45-cols">
      <div class="row-45-cols-col">
          <div class="row-45-cols-col-img"><img src="hw1.jpg" alt=""></div>
          <div class="row-45-cols-col-title">SMARTPHONE</div>
          <div class="row-45-cols-col-text">While on Facebook or Youtube, open 360 Video and start rotating your phone to see the video around you. </div>
      </div>
      <div class="row-45-cols-col">
          <div class="row-45-cols-col-img"><img src="hw2.jpg" alt=""></div>
          <div class="row-45-cols-col-title">FROM BROWSER</div>
          <div class="row-45-cols-col-text">Use <a href="https://www.mozilla.org/en-US/firefox/new/">MOZILLA</a> or <a href="https://www.google.com/chrome/">CHROME</a> to watch 360 videos directly from your browser. 
Use mouse to navigate around.</div>
      </div>
      <div class="row-45-cols-col">
          <div class="row-45-cols-col-img"><img src="hw3.jpg" alt=""></div>
          <div class="row-45-cols-col-title">WITH VR HMD </div>
          <div class="row-45-cols-col-text">Virtual Reality Head Mounted Device <a href="http://www.samsung.com/global/galaxy/wearables/gear-vr/">GEARVR</a>, as well as other smartphone based HMD (<a href="http://www.homido.com">HOMIDO</a>, <a href="http://fibrum.com">FIBRUM</a>) will allow you to fully experience the 360 video.</div>
      </div>
    </div>
  </div>

  <?php $sliders = array(
    array(
      'img' => $slider_path . 'video_slide.png',
      'cam' => 'GOPRO Black(x9)',
      'qlty' => '2.7K 4:3 8K Full Image 2min',
      'set' => 'DJI S1000; HAWK',
      'title' => 'FLY HONG KONG',
      'sub_title' => 'Flight over Hong Kong&#8217;s suburbs'
    ),
    array(
      'img' => $slider_path . 'video_slide_2.png',
      'cam' => 'STRIX A500',
      'qlty' => '4K 16;9 6K Full Image 3min',
      'set' => 'HOMEBOT',
      'title' => 'BHSAD',
      'sub_title' => 'Indoors Realty Estate shooting in 
British Higher School of Design'
    )
  ); ?>
  <div id="slider2" class="slider">
  <?php foreach ($sliders as $slide) { ?>
    <div class="slide">
      <div class="image"><img src="<?php echo $slide['img']; ?>" alt="<?php echo $slide['title']; ?>"></div>
      <div class="line">
        <div class="info">
          <div class="cam"><?php echo $slide['cam']; ?></div>
          <div class="qlt"><?php echo $slide['qlty']; ?></div>
          <div class="set"><?php echo $slide['set']; ?></div>
        </div>
        <div class="play"><a href="#" class="play-button"></a></div>
        <div class="title-block">
          <div class="title"><?php echo $slide['title']; ?></div>
          <div class="sub-title"><?php echo $slide['sub_title']; ?></div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>

    <!-- <div style="background-color: #000">
        <div class="wc" style="width: 1280px;">
            <div class="ourvideo-container">
                <img src="v01.jpg" alt="" class="js-videoshow" style="cursor: pointer;">
                <iframe width="1280" height="462" style="display: none;" src="https://www.youtube.com/embed/Ev52cTTZIEQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="ourvideo-container">
                <img src="v02.jpg" alt="" class="js-videoshow" style="cursor: pointer;">
                <iframe width="1280" height="462" style="display: none;" src="http://www.vrideo.com/embed/omWTz52?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div> -->

    <div class="hor-red-but"><a href="<?php echo $links['videos']; ?>">Watch all videos</a></div>

</div>

<div class="row-5">
    <ul class="row-5-slides">
        <li class="row-5-slide"><a href=""><img src="slide01.jpg" alt=""></a></li>
        <li class="row-5-slide"><a href=""><img src="slide02.jpg" alt=""></a></li>
        <li class="row-5-slide"><a href=""><img src="slide03.jpg" alt=""></a></li>
        <li class="row-5-slide"><a href=""><img src="slide04.jpg" alt=""></a></li>
    </ul>
</div>


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

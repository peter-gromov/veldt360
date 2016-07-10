<!doctype html>
<html class="no-js" lang="">
<?php include('head.php'); ?>
	<body class="wh-bg-head">
		<?php include('header.php'); ?>
		<a name="home"></a>

		<div class="header-unit">
			<div id="content">


	      <div class="row-1">
          <div class="wc">
            <div class="row-1-text2 bl">360 VIDEO PRODUCTION</div>
            <div class="row-1-logo sm"></div>
            <div class="row-25-text row-1-links">
            	<a href="#aerial">AERIAL</a>
            	<a href="#dynamic">DYNAMIC</a>
            	<a href="#">PROMO</a>
            </div>
            <div class="row-backstage">
            	<div class="link">
            		<a href="#">WATCH OUR BACKSTAGE VIDEO <span class="play"></span></a>
            	</div>
            </div>
            <!-- WATCH OUR BACKSTAGE VIDEO -->
            <!-- <img src="/img/product/aerial_mono.png" alt="Aerial"> -->
          </div>
	      </div>

    	</div>
		</div>

		<div class="hor-red-but"><a href="#">DOWNLOAD QUOTATION</a></div>
		<div class="row-25">
			<div class="row-25-text" id="aerial">AERIAL</div>

			<?php $sliders = array(
		    array(
		      'img'  => '/img/product/aerial_stereo.png',
		      'alt'  => 'Aerial Stereo',
		      'desc' => 'Veldt360 together with SCP is the only company in Hong Kong licensed by HK government to shoot 360 from air using DJI Matrice and Hawk Stereo gimbal.',
		    ),
		    array(
		      'img'  => '/img/product/aerial_mono.png',
		      'alt'  => 'Aerial Mono',
		      'desc' => 'Veldt360 together with SCP is the only company in Hong Kong licensed by HK government to shoot 360 from air using DJI S900 and Hawk gimbal.'
		      // 'style' => 'margin-top: 30px'
		    )
		  ); ?>
			<div id="slider_aerial">
				<ul>
				<?php foreach ($sliders as $item) { ?>
					<li>
						<img src="<?php echo $item['img']; ?>" alt="<?php echo $item['alt']; ?>">
						<div class="info-block">
							<div class="title">MOST IMPRESSIVE 360</div>
							<div class="desc"><?php echo $item['desc']; ?></div>
							<div class="watch"><a href="#">WATCH THE BACKSTAGE</a></div>
							<div class="buttons red"><a href="#contact_us">ENQUIRE NOW</a></div>
						</div>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>

		<div class="row-25">
			<div class="row-25-text" style="margin-bottom: 20px;">EXAMPLE</div>

			<div class="slider">
				<div class="slide">
		      <div class="image"><img src="/img/sliders/video_slide.png" alt="FLY HONG KONG"></div>
		      <div class="line">
		        <div class="info">
		          <div class="cam">GOPRO Black(x9)</div>
		          <div class="qlt">2.7K 4:3 8K Full Image 2min</div>
		          <div class="set">DJI S1000; HAWK</div>
		        </div>
		        <div class="play"><a href="#" class="play-button"></a></div>
		        <div class="title-block">
		          <div class="title">FLY HONG KONG</div>
		          <div class="sub-title">Flight over Hong Kong&#8217;s suburbs</div>
		        </div>
		      </div>
		    </div>
	    </div>

			<div class="row-25-text" id="dynamic" style="    margin-top: 20px;">DYNAMIC</div>

			<?php $sliders = array(
		    array(
		      'img'  => '/img/product/indoor_robotic_platform.png',
		      'title'  => 'INDOOR ROBOTIC PLATFORM',
		      'desc' => 'Our custom made robotic platform with its own orientation system will provide the best solution for indoors and real estate shooting using HOMEBOT and STRIX A500 camera.',
		      'style' => 'margin-left: 50px'
		    ),
		    array(
		      'img'  => '/img/product/street.png',
		      'title'  => 'OUTDOOR ROBOTIC PLATFORM',
		      'desc' => 'Our custom made robotic platform with its own orientation system will provide the best solution for indoors and real estate shooting using STREETBOT and HAWK gimbal.',
		      'style' => 'margin-top: 45px'
		    ),
		    array(
		    	'img' => '/img/sliders/cable.png',
		    	'title' => 'CABLE CAMERA',
		    	'desc' => 'Our custom made robotic platform with its own orientation system will provide the best solution for indoors and real estate shooting using STREETBOT and HAWK gimbal.',
		      'style' => 'margin-top: 60px'
	    	)
		  ); ?>
			<div id="slider_example">
				<ul>
				<?php foreach ($sliders as $item) { ?>
					<li>
						<img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>"<?php echo $item['style'] ? ' style = "'.$item['style'].'"' : ''; ?>>
						<div class="info-block">
							<div class="title"><?php echo $item['title']; ?></div>
							<div class="desc"><?php echo $item['desc']; ?></div>
							<div class="watch"><a href="#">MORE ABOUT PLATFORM</a></div>
							<div class="buttons red"><a href="#contact_us">ENQUIRE NOW</a></div>
						</div>
					</li>
				<?php } ?>
				</ul>
			</div>

		</div>


		<div class="hor-red-but"><a href="#">WATCH IT IN ACTION</a></div>

		<div class="hor-red-but"><a href="#">ENQUIRE FOR REAL ESTATE 360</a></div>

		<div class="row-25" style="margin-top: 30px;">
			<div class="row-25-text">FULL PRODUCTION CYCLE</div>
			<div class="wc">
				<div class="row-prod">
					<div>
						<div class="icon">
							<img src="/img/icons/Directing.svg" alt="Directing and Filming">
							<div class="title">Directing and Filming</div>
						</div>
						<div class="icon">
							<img src="/img/icons/Stitching.svg" alt="Editing">
							<div class="title">Editing</div>
						</div>
					</div>
				</div>
				<div class="row-prod">
					<div>
						<div class="icon">
							<img src="/img/icons/Stitching2.svg" alt="Stitching">
							<div class="title">Stitching</div>
						</div>
						<div class="icon">
							<img src="/img/icons/ColorGrading.svg" alt="Color Correction">
							<div class="title">Color Correction</div>
						</div>
					</div>
				</div>
				<div class="row-prod">
					<div>
						<div class="icon">
							<img src="/img/icons/Sound.svg" alt="Binaural Sound">
							<div class="title">Binaural Sound</div>
						</div>
						<div class="icon">
							<img src="/img/icons/Effects.svg" alt="VR VFX and CGI">
							<div class="title">VR VFX and CGI</div>
						</div>
					</div>
				</div>
				<div class="row-prod">
					<div>
						<div class="icon one">
							<img src="/img/icons/VRapp.svg" alt="VR Apps and distribution">
							<img src="/img/icons/Oculus.svg" alt="VR Apps and distribution">
							<div class="title">VR Apps and distribution</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row25">
			<div class="row-25-text">DEMONSTRATION AND DISTRIBUTION</div>
			<div style="text-align: center; margin: 30px 0;">
				<img src="/img/sliders/HMD.png" alt="HMD">
			</div>
		</div>
	
		<div class="row-25-text">VR HMD users</div>
		<div style="text-align: center; margin-bottom: 40px;">more than 7mln people will have VR HMD by 2017</div>
			

		<div class="row-25-text" style="margin-bottom: 20px;">SOCIAL MEDIA SHARING</div>
		<div style="margin-bottom: 25px;">
			<div style="width: 650px;text-align: center;margin: 0 auto;">
				Since spring 2015 Facebook and Youtube allows users to download and watch 360 videos directly from their mobile devices and from desktop, making it a powerful marketing tool for brands to promote themselves and outstand from competitors
			</div>
		</div>

		<div class="hor-red-but"><a href="#">ENQUIRE 360 VIDEO FOR FACEBOOK PAGE</a></div>
		

		<?php include('contactus.php'); ?>

	        
    <?php include('footer.php'); ?>

		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/main.js"></script>
		<script>
			veldtSlider({
				id: 'slider_aerial',
				textNavigation: ['STEREO', 'MONO'],
				arrows: true
			});

			veldtSlider({
				id: 'slider_example',
				textNavigation: ['INDOORS', 'OUTDOORS', 'CABLE'],
				arrows: true
			});
		</script>

  </body>
</html>
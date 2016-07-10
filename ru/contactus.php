<div class="contactus">
    <div class="wc">
        <div class="contactus-icons">
            <a href="#" class="contactus-icons-link"><img src="contactus_icon_01.png" alt="" class="contactus-icons-icon"></a>
            <a href="https://www.youtube.com/channel/UC96kAu6jdCpqiImmf52CRpg" class="contactus-icons-link"><img src="contactus_icon_02.png" alt="" class="contactus-icons-icon"></a>
            <a href="https://www.facebook.com/veldt360/" class="contactus-icons-link"><img src="contactus_icon_03.png" alt="" class="contactus-icons-icon"></a>
        </div>
        <div class="row-25-text" style="margin-bottom: 50px;">/@VELDT360</div>
        <div class="row-25-text"style="margin-bottom: 50px;">CONTACT US</div>
        <div class="contactus-form">
            <div class="contactus-form-label ">Email</div>
            <input type="text" class="contactus-form-input mail-email">
            <div class="contactus-form-label">Name</div>
            <input type="text" class="contactus-form-input  mail-name">
            <input type="hidden" value="<?=md5( $_SERVER['REMOTE_ADDR'] . '123')?>" class="contactus-form-input  mail-key">
            <div class="contactus-form-label">Request</div>
            <textarea type="text" class="contactus-form-input  mail-request"></textarea>
            <div style="text-align: right"> <a href="#" class="vbutton js-send">SEND</a></div>
        </div>
                <div class="contactus-success" style="display: none;">
            <p>We will contact you as soon as possible!</p>
        </div>

    </div>
    <div class="wc" style="width: 1280px">
        

        <style>
        /* AIzaSyCvW3KwJFY9PAulNT98Mtp6P8p9xGqbpn4 */
            #map, #map2 {
                width: 100%;
                height: 400px;
                background-color: grey;
            }
      </style>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvW3KwJFY9PAulNT98Mtp6P8p9xGqbpn4&callback=initMap"
  async defer>
</script>
      <script>
       function initMap() {
          var mapDiv = document.getElementById('map');
          var map = new google.maps.Map(mapDiv, { 
              center: {lat: 22.2752255, lng: 114.1693701},
              zoom: 17
          });
          var mapDiv2 = document.getElementById('map2');
          var map2 = new google.maps.Map(mapDiv2, { 
              center: {lat: 59.9167577, lng: 30.3110643},
              zoom: 17
          });
        }

        </script>
        <div class="mapblocks">
           
            <div class="mapblocks-mapblock">

                <div class="mapblocks-mapblock-col mapblocks-mapblock-col-1">
                    <div id="map2"></div>

                </div>
                <div class="mapblocks-mapblock-col mapblocks-mapblock-col-2">
                    <div class="mapblocks-mapblock-col-info">
                        <div class="mapblocks-mapblock-col-info-title">САНКТ-ПЕТЕРБУРГ</div>
                        <div class="mapblocks-mapblock-col-info-blocks">
                            <div class="mapblocks-mapblock-col-info-blocks-block">
                                <div class="mapblocks-mapblock-col-info-blocks-block-icon"><img src="icon_location.png"></div>
                                <div class="mapblocks-mapblock-col-info-blocks-block-text">1st Krasnoarmeyskaya st., 9A</div>
                            </div>
                            <div class="mapblocks-mapblock-col-info-blocks-block">
                                <div class="mapblocks-mapblock-col-info-blocks-block-icon"><img src="icon_phone.png"></div>
                                <div class="mapblocks-mapblock-col-info-blocks-block-text">+7 921 597 58 29<br>+7 904 637 01 37</div>
                            </div>
                            <div class="mapblocks-mapblock-col-info-blocks-block">
                                <div class="mapblocks-mapblock-col-info-blocks-block-icon"><img src="icon_email.png"></div>
                                <div class="mapblocks-mapblock-col-info-blocks-block-text"><a href="mailto:spb@veldt360.com">spb@veldt360.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             <div class="mapblocks-mapblock">

                <div class="mapblocks-mapblock-col mapblocks-mapblock-col-1">
                    <div id="map"></div>

                </div>
                <div class="mapblocks-mapblock-col mapblocks-mapblock-col-2">
                    <div class="mapblocks-mapblock-col-info">
                        <div class="mapblocks-mapblock-col-info-title">ГОНКОНГ</div>
                        <div class="mapblocks-mapblock-col-info-blocks">
                            <div class="mapblocks-mapblock-col-info-blocks-block">
                                <div class="mapblocks-mapblock-col-info-blocks-block-icon"><img src="icon_location.png"></div>
                                <div class="mapblocks-mapblock-col-info-blocks-block-text">Queens Rd East 181<br>Exchange square</div>
                            </div>
                            <div class="mapblocks-mapblock-col-info-blocks-block">
                                <div class="mapblocks-mapblock-col-info-blocks-block-icon"><img src="icon_phone.png"></div>
                                <div class="mapblocks-mapblock-col-info-blocks-block-text">+852 5565 4745<br>+852 6701 1252</div>
                            </div>
                            <div class="mapblocks-mapblock-col-info-blocks-block">
                                <div class="mapblocks-mapblock-col-info-blocks-block-icon"><img src="icon_email.png"></div>
                                <div class="mapblocks-mapblock-col-info-blocks-block-text"><a href="mailto:info@veldt360.com">info@veldt360.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
 
    </div>
</div>
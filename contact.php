<!DOCTYPE html>
<html lang="en">
    <?php include'includes/head.php';?>
    <body id="contact_us_page">

        <div id="loader-wrapper">

            <div class="logo"><a href="#"><span>4 Seasons </span>Resorts</a></div>
            <div id="loader">
            </div>
        </div>
        <!-- start header -->
       <?php include'includes/header.php';?>
        <!-- end header -->
        
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Contact Us</h2>
                        <!-- special offer start -->
                      <!--   <div class="special_offer_main">
                            <div class="container">
                                <div class="special_offer_sub">
                                    <img src="img/special-offer-yellow-main.png" alt="imf">
                                </div>
                            </div>
                        </div>        -->  
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <!-- start other detect room section -->
        <div class="contact_google_map_area margin-bottom-75">
            <div class="container">
                <div class="contact_google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1891.5991334418973!2d73.51951895792106!3d18.519940440160127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2a10e2675e5ab%3A0xeb8d3c3af139e512!2sFour%20Seasons%20Resorts!5e0!3m2!1sen!2sin!4v1612764759156!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!-- end other detect room section -->

        <!-- start contact mail area -->
        <section class="contact_mail_area margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="contact_mail">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="send_mail">
                                <div class="section_title margin-bottom-40">
                                    <h4>send us an email</h4>
                                </div>
                                <form action="back.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="First Name *" id="name" name="name"  required>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Last Name *" id="lname" required name="lname">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="text" placeholder="Your Email Id *" id="email" required name="email"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="text" placeholder="Phone Number *" id="cnumber"  required name="cnumber"/>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <textarea name="message" id="message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                            <input class="btn btn-warning btn-md" type="submit" name="submit" id="submit" value="Submit Now" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact_info margin-top-65">
                                <div class="section_title margin-bottom-45">
                                    <h4>Contact Info</h4>
                                </div>
                                <ul class="clearul">
                                    <li>
                                       <P><a href="map.php"  target="_blank"></i>Shende Patil Vasati , At Post Male, Taluka, <br>Mulshi, Maharashtra 412108</P>
                                    </li>
                                    <li>
                                         <a href="tel:+91 96076 09494"><i class="fa fa-phone" aria-hidden="true"  style="font-size:20px;"> +91 96076 09494</i></a>
                              <a href="tel:+91 95112 18434"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;"> +91 95112 18434</i></a>

                                    </li>
                                    <li>
                                         <a href="mailto:4seasonsresortsmulshi@gmail.com"><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 10px;font-size:20px;">     4seasonsresortsmulshi@gmail.com</i></a>
                                    </li>
                                </ul>
                                <div class="social_icons clearfix">
                                    <ul class="clearul">
                                       <li><a href="https://www.facebook.com/seasonsresort.mulshi/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/4seasonsresortmulshi_/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact mail area -->

        <!-- start contact us area -->
       
        <!-- end contact us area -->

        
    
        <!-- start footer -->
       <?php include'includes/footer.php';?>
        <!-- end footer -->
		
		
		
        <!-- jquery library -->
 <?php include'includes/script.php';?>

        <!-- Google maps API -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>

            var myCenter=new google.maps.LatLng(-37.831208, 144.998499);

            function initialize()
            {
            var mapProp = {
              center:myCenter,
              zoom:15,
                scrollwheel: false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("contactgoogleMap"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter,
              animation:google.maps.Animation.BOUNCE,
              icon:'img/google-pin-one.png'
            });
            
            var infowindow = new google.maps.InfoWindow({
              content:"united-states"
            });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);        

        </script>
		
    </body>
</html>

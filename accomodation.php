<!DOCTYPE html>
<html lang="en">
    <?php include'includes/head.php';?>
    <body id="accomodation_page">
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
                        <h2>Accomodation</h2>
                        <!-- special offer start -->
                        <!-- <div class="special_offer_main">
                            <div class="container">
                                <div class="special_offer_sub">
                                    <img src="img/special-offer-yellow-main.png" alt="imf">
                                </div>
                            </div>
                        </div> -->         
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        
        <!-- start Hotel Facilities section -->
        <section class="select_room_area padding-top-5 margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="select_room clearfix">
                        <div class="section_title nice_title text-center">
                            <h3>Special Rooms</h3>
                        </div>
                        <div class="select_room_content clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="room_thumb">
                                    <a href="#" style="opacity: 40px"><img src="img/room/accomodtn-room.png" alt=""></a>
                                    <div class="room_details">
                                        <div class="about_room floatleft">
                                            <div class="room_quality floatleft">
                                                <h5>Deluxe Room</h5>
                                            </div>
                                            <!-- <div class="room_rent floatleft">
                                                <p>$180<span> / night</span></p>
                                            </div> -->
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="#" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
                                <div class="room_thumb small_room_thumb margin-bottom-35">
                                    <a href="#"><img src="img/room/WhatsApp Image 2021-02-09 at 12.31.20 PM.jpeg" alt=""></a>
                                    <div class="room_details">
                                        <div class="about_room floatleft">
                                            <div class="room_quality floatleft">
                                                <h5>Suite Room</h5>
                                            </div>
                                            <!-- <div class="room_rent floatleft">
                                                <p>$180<span> / night</span></p>
                                            </div> -->
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="#" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room_thumb small_room_thumb">
                                    <a href="#"><img src="img/room/delux1.jpeg" alt=""></a>
                                    <div class="room_details">
                                        <div class="about_room floatleft">
                                            <div class="room_quality floatleft">
                                                <h5>Deluxe Room</h5>
                                            </div>
                                            <!-- <div class="room_rent floatleft">
                                                <p>$180<span> / night</span></p>
                                            </div> -->
                                        </div>
                                        <div class="room_block floatright">
                                            <a href="#" class="btn btn-black">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Hotel Facilities section -->


        <!-- start other detect room section -->
        <section class="other_room_area">
            <div class="container">
                <div class="row">
                    <div class="other_room">
                        <div class="section_title nice_title content-center">
                            <h3>Standard Room</h3>
                        </div>
                        <div class="section_content">
                            <!-- start hotel booking -->
                            <div class="hotel_booking_area">
                                <div class="container">
                                    <div class="hotel_booking margin-bottom-30">
                                        <form id="form1" role="form" action="#" class="">
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <div class="room_book border-right-dark-1">
                                                    <h6>Book Your</h6>
                                                    <p>Rooms</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="row">
                                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                        <div class="input-group border-bottom-dark-2">
                                                            <select class="form-control" name="room" id="room">
                                                              <option selected="selected" disabled="disabled">Rooms</option>
                                                              <option value="Single">2 Room</option>
                                                              <option value="Double">3 Room</option>
                                                              <option value="Deluxe">4 Room</option>
                                                            </select>               
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                        <div class="input-group border-bottom-dark-2">
                                                            <select class="form-control" name="room" id="adult">
                                                              <option selected="selected" disabled="disabled">Rating</option>
                                                              <option value="Single">One Star</option>
                                                              <option value="Double">Two Star</option>
                                                              <option value="Deluxe">three Star</option>
                                                            </select>               
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                        <div class="input-group border-bottom-dark-2">
                                                            <select class="form-control" name="room" id="child">
                                                              <option selected="selected" disabled="disabled">Beds</option>
                                                              <option value="Single">Single Bed</option>
                                                              <option value="Double">3 Beds</option>
                                                              <option value="Deluxe">5 Beds</option>
                                                            </select>               
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                <div class="input-group range_slider">
                                                      <div data-role="rangeslider">
                                                        <span>Price:</span>
                                                        <label>range:</label>
                                                        <div class="range">
                                                            <span class="floatleft">50$</span><span class="floatright">5000$</span>
                                                            <input class="margin-rl-5" type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                                                        </div>
                                                      </div>        
                                                </div>
                                            </div>                  
                                            <div class="col-lg-2 col-md-2 col-sm-2 clearfix">
                                                <a class="btn btn-warning btn-md floatright">Filter</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end hotel booking -->

                            <!-- start single room details -->
                            <div class="accomodation_single_room">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room12.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <!-- <h6>Suite Room</h6> -->
                                                               <!--  <p>$130/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <!-- <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                           <!--  <h5>Suite Room</h5> -->
                                                            <p>
                                                                Suite Rooms are spacious and have a beautiful view of the lovely abundance. 
                                                            </p>
                                                            <p>
                                                                It’s a very cozy and an exclusive suite giving you a superior experience
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$130/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/gallary/gallery-SUIT4-263X187.jpg" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                               <!--  <h6>Suite Room</h6> -->
                                                               <!--  <p>$140/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <!-- <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                            <!-- <h5>Suite Room</h5> -->
                                                            <p>
                                                                Suite Rooms are spacious and have a beautiful view of the lovely abundance. 


                                                            </p>
                                                            <p>
                                                                It’s a very cozy and an exclusive suite giving you a superior experience.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$140/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room4.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <!-- <h6>Suite Room</h6> -->
                                                               <!--  <p>$200/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <!-- <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                            <!-- <h5>Suite Room</h5> -->
                                                            <p>
                                                                Suite Rooms are spacious and have a beautiful view of the lovely abundance. 


                                                            </p>
                                                            <p>
                                                                It’s a very cozy and an exclusive suite giving you a superior experience.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                   <!--  <p>$200/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room8.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <!-- <h6>Suite Room</h6> -->
                                                                <!-- <p>$100/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <!-- <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                            <!-- <h5>Suite Room</h5> -->
                                                            <p>
                                                                Suite Rooms are spacious and have a beautiful view of the lovely abundance. 

                                                            </p>
                                                            <p>
                                                                It’s a very cozy and an exclusive suite giving you a superior experience.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$100/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room1.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <!-- <h6>Delux Room</h6> -->
                                                                <!-- <p>$160/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                               <!--  <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                            <!-- <h5>Delux Room</h5> -->
                                                            <p>
                                                                Deluxe Rooms are comfortable. Fixed with all the modern amenities. 
                                                            </p>
                                                            <p>
                                                                Relax in comfort, take in nature’s beauty, and get pampered by its hospitable staff.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$160/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room3.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <!-- <h6>Delux Room</h6> -->
                                                                <!-- <p>$250/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <!-- <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                            <!-- <h5>Delux Room</h5> -->
                                                            <p>
                                                                Deluxe Rooms are comfortable. Fixed with all the modern amenities. 
                                                            </p>
                                                            <p>
                                                                Relax in comfort, take in nature’s beauty, and get pampered by its hospitable staff.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$250/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room2.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                                <!-- <h6>Deluxe Room</h6> -->
                                                                <!-- <p>$170/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                               <!--  <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
<!--                                                             <h5>Deluxe Room</h5> -->
                                                            <p>
                                                                Deluxe Rooms are comfortable. Fixed with all the modern amenities. 
                                                            </p>
                                                            <p>
                                                                Relax in comfort, take in nature’s beauty, and get pampered by its hospitable staff.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$170/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="#"><img src="img/room/room9.png" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                            <div class="left_room_title floatleft">
                                                               <!--  <h6>Deluxe Room</h6> -->
                                                                <!-- <p>$190/ <span>night</span></p> -->
                                                            </div>
                                                            <div class="left_room_title floatright">
                                                                <!-- <a href="#" class="btn">Book</a> -->
                                                            </div>
                                                        </div>
                                                    <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                        <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                           <!--  <h5>Deluxe Room</h5> -->
                                                            <p>
                                                                Deluxe Rooms are comfortable. Fixed with all the modern amenities. 
                                                            </p>
                                                            <p>
                                                                Relax in comfort, take in nature’s beauty, and get pampered by its hospitable staff.
                                                            </p>
                                                            <div class="single_room_cost clearfix">
                                                                <div class="floatleft">
                                                                    <!-- <p>$190/ <span>night</span></p> -->
                                                                </div>
                                                                <div class="floatright">
                                                                    <!-- <a href="#" class="btn">Book</a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <nav class="text-center margin-top-65 margin-bottom-75">
                                          <ul class="pagination">
                                            <li>
                                              <a href="#" aria-label="Previous">
                                                <i class="fa fa-angle-left"></i>prev
                                              </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                              <a href="#" aria-label="Next">next
                                                <i class="fa fa-angle-right"></i>
                                              </a>
                                            </li>
                                          </ul>
                                        </nav>
                                    </div> -->
                                </div>
                            </div>
                            <!-- end single room details -->

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end other detect room section -->


        <!-- start contact us area -->
        <section class="contact_us_area content-left">
            <div class="container">
                <div class="contact_us clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="call clearfix">
                            <h6>Call Us</h6>
                             <a href="tel:+91 96076 09494"><i class="fa fa-phone" aria-hidden="true"  style="font-size:20px;"> +91 96076 09494</i></a>
                              <a href="tel:+91 95112 18434"><i class="fa fa-phone" aria-hidden="true" style="font-size:20px;"> +91 95112 18434</i></a>

                            
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="email_us clearfix">
                            <h6>Email us</h6>
                           <a href="mailto:4seasonsresortsmulshi@gmail.com"><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 10px;font-size:20px;">     4seasonsresortsmulshi@gmail.com</i></a>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md- col-sm-3 col-xs-12">
                        <div class="social_icons clearfix">
                            <ul>
                                <li><a href="https://www.facebook.com/seasonsresort.mulshi/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/4seasonsresortmulshi_/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact us area -->

        
    
        <!-- start footer -->
        <?php include'includes/footer.php';?>
        <!-- end footer -->
		
		
		
        <!-- jquery library -->
       <?php include'includes/script.php';?>
		
    </body>
</html>

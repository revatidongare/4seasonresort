<!DOCTYPE html>
<html lang="en">
    <?php include'includes/head.php';?>
    <body id="home_one">
        
        <!-- start preloader -->
        <div id="loader-wrapper">

            <div class="logo"><a href="#"><span>4 Seasons </span>Resorts</a></div>
            <div id="loader">
            </div>
        </div>
        <!-- end preloader -->
        
        <!-- start header -->
        <?php include'includes/header.php';?>
        <!-- end header -->

        <!-- start main slider -->
        <div class="main_slider_area">
            <div class="main_slider" id="slider_rev">
                <!-- start hotel booking -->
                <div class="hotel_booking_area">
                    <div class="container">
                        <div class="hotel_booking">
                            <form id="form1" role="form" action="#" class="">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="room_book border-right-dark-1">
                                        <h6>Book Your</h6>
                                        <p>Rooms</p>
                                    </div>
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group border-bottom-dark-2">
                                        <input class="date-picker" id="datepicker" placeholder="Arrival" type="text"/>
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group border-bottom-dark-2">
                                        <input class="date-picker" id="datepicker1" placeholder="Departure" type="text"/>
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="room" id="room">
                                                  <option selected="selected" disabled="disabled">1 Room</option>
                                                  <option value="Single">1 Room</option>
                                                  <option value="Double">2 Room</option>
                                                  <option value="Deluxe">3 Room</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="room" id="adult">
                                                  <option selected="selected" disabled="disabled">1 Adult</option>
                                                  <option value="Single">1 Adult</option>
                                                  <option value="Double">2 Adult</option>
                                                  <option value="Deluxe">3 Adult</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                            <div class="input-group border-bottom-dark-2">
                                                <select class="form-control" name="room" id="child">
                                                  <option selected="selected" disabled="disabled">0 Child</option>
                                                  <option value="Single">0 Child</option>
                                                  <option value="Double">1 Child</option>
                                                  <option value="Deluxe">2 Child</option>
                                                </select>               
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <a class="btn btn-primary floatright">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- special offer start -->
                            
                            <!-- end offer start -->
                        </div>
                    </div>
                </div>
                <!-- end hotel booking -->
                <div class="fullwidthbanner-container" >
                    <div class="fullwidth_home_banner">
                        <ul>
                            
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/FP-slider-1.jpg" alt="slide" >

                                <div class="tp-caption large_black sfr" data-x="600" data-y="400" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: white   ; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    Experience of
                                </div>
                                <div class="tp-caption large_black sfr" data-x="600" data-y="450" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: white   ; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    LUXURIOUS LIVING 
                                </div>
                                <!-- <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                    style="background: #f7c411; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                                </div> -->
                            </li>

                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/fp-slider-2.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 35px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                     We invite you to try 
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 35px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    AMAZING EXPERIENCE
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                    style="background: #f7c411; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                                </div>
                            </li>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/fb-slider-3.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: white; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                   A Quick Escape From 
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: white; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    CITY GRIND
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                    style="background: #f7c411; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                                </div>
                            </li>
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/rev-slider/fb-slider-4.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 35px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                   We invite you to try
                            
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 35px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    AMAZING EXPERIENCE 
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                    style="background: #f7c411; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                                </div>
                            </li>							                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main slider -->
        
        <!-- start welcome section -->
        <section class="welcome_area">  
            <div class="container">
                    <div class="welcome">
                        <div class="section_title nice_title content-center">
                            <h3>Enjoy Your Moment
At Mulshi, Pune!</h3>
                        </div>
                        <div class="section_description">
                            <p> Gracious hospitality awaits at Four Seasons Resort Mulshi, a deluxe city Resort renowned for superb comfort, convenience and care. The Resort sits in nearby Mulshi dam, Pune location.
                            <br>Surrender yourself to the charm of nature’s excellence and tranquility in the advantage of impeccable flawlessness! Remain in any of our extraordinarily created rooms and appreciate extravagance style. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 ">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="img/room/d2.jpg" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                                <div class="left_room_title floatleft">
                                                    <h6>Deluxe Room</h6>
                                                    <!-- <p>$200/ <span>night</span></p> -->
                                                </div>
                                                <div class="left_room_title floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                            <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                <h5>Deluxe Room</h5>
                                                <p>
                                                    Deluxe Rooms are comfortable. Fixed with all the modern amenities. 
                                                </p>
                                                <p>
                                                   Relax in comfort, take in nature’s beauty, and get pampered by its hospitable staff.
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                       <!--  <p>$200/ <span>night</span></p> -->
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn" style="margin-right: 200px">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 ">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="img/room/s3.jpg" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                                <div class="left_room_title floatleft">
                                                    <h6>Suite Rooms</h6>
                                                   <!--  <p>$150/ <span>night</span></p> -->
                                                </div>
                                                <div class="left_room_title floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                            <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                <h5>Suite Rooms</h5>
                                                <p>
                                                    Suite Rooms are spacious and have a beautiful view of the lovely abundance. 
                                                </p>
                                                <p>
                                                   It’s a very cozy and an exclusive suite giving you a superior experience.
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <!-- <p>$150/ <span>night</span></p> -->
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn" style="margin-right: 200px">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="img/room-image-thirteen.jpg" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                                <div class="left_room_title floatleft">
                                                    <h6>Single Room</h6>
                                                    <p>$180/ <span>night</span></p>
                                                </div>
                                                <div class="left_room_title floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                            <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                <h5>Single Room</h5>
                                                <p>
                                                    Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                </p>
                                                <p>
                                                    Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>$180/ <span>night</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_room_wrapper clearfix">
                                    <figure class="uk-overlay uk-overlay-hover">
                                        <div class="room_media">
                                            <a href="#"><img src="img/room-image-eight.png" alt=""></a>
                                        </div>
                                        <div class="room_title border-bottom-whitesmoke clearfix">
                                                <div class="left_room_title floatleft">
                                                    <h6>Kids Room</h6>
                                                    <p>$140/ <span>night</span></p>
                                                </div>
                                                <div class="left_room_title floatright">
                                                    <a href="#" class="btn">Book</a>
                                                </div>
                                            </div>
                                        <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInUp">
                                            <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                <h5>Kids Room</h5>
                                                <p>
                                                    Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                </p>
                                                <p>
                                                    Phasellus accumsan urna vitae molestie interdum.
                                                </p>
                                                <div class="single_room_cost clearfix">
                                                    <div class="floatleft">
                                                        <p>$140/ <span>night</span></p>
                                                    </div>
                                                    <div class="floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div> -->
                        </div>
                    </div>
            </div>
        </section>
        <!-- end welcome section -->
        
        <!-- start Hotel Facilities section -->
        <section class="hotel_facilities_area margin-top-115 margin-bottom-100">
            <div class="container">
                <div class="hotel_facilities">
                    <div class="section_title nice_title content-center">
                       <!--  <h3>Hotel facilties</h3> -->
                    </div>
                    <div class="hotel_facilities_content">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-eleven.png" alt="restaurant"><span>Dining</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-seven.png" alt="sports-club"><span>sports-club</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><img src="img/facility/open-lawn-icon.png" alt="pick-up"><span>Open Lawn</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><img src="img/facility/children-&-playground-icon.png" alt="bar"><span>Children Play area</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><img src="img/facility/gazeeboo.png" alt="gym"><span>Gazebo</span></a>
                                </li>
                            </ul>                           

                          
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="restaurant">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5 col-sm-6">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/facility/hotel-facility1.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7 col-sm-6">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Restaurant & Mezzanine</h3>
                                                    <p>
                                                        Indulge in the delicious aromas of different cuisine defined by our signature bespoke service. 
                                                    </p>
                                                    <p>
                                                        A distinct culinary experience which range from casual to fine dining.
                                                    </p>
                                                    <div class="our_services">
                                                        <!-- <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="sports-club">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/facility/badminton.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Sports Club</h3>
                                                    <p>
                                                        Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                                    </p>
                                                    <p>
                                                        Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                                    </p>
                                                   <!--  <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="pick-up">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/facility/open-lawn.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Open-Lawn</h3>
                                                    <p>
                                                        We provide well-maintained space for auspicious occasions like weddings, corporate events and related occasions. 
                                                    </p>
                                                    <p>
                                                        From engagements to receptions, our Open Lawn is an ideal place to conduct and enjoy a fabulous occasion in style and comfort.
                                                    </p>
                                                    <!-- <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bar">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/facility/children-playground-area.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Children Play area</h3>
                                                    <p>
                                                        When you choose to holiday at Four Seasons Resort, Mulshi with your family, we ensure that your children have the time of their lives. At their very own private abode, they have everything they need to have an exciting and unforgettable holiday.
                                                    </p>
                                                    <p>
                                                        At their very own private abode, they have everything they need to have an exciting and unforgettable holiday.
                                                    </p>
                                                    <!-- <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="gym">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/facility/gazeebo.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Gazebo</h3>
                                                    <p>
                                                        Resort has special facilities for you to hold your events. The lawn is large enough to be converted into any type of function you want to hold. Have an engagement party or an official event the impeccable combination of efficient service and traditional hospitality makes all the occasion outstanding.
                                                    </p>
                                                    <p>
                                                        Have an engagement party or an official event the impeccable combination of efficient service and traditional hospitality makes all the occasion outstanding.
                                                    </p>
                                                    <!-- <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div> -->
                                                </div>
                                            </div>
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
                           <a href="mailto:4seasonsresortsmulshi@gmail.com"><i class="fa fa-envelope" aria-hidden="true" style="padding-right: 10px;font-size:17px;">     4seasonsresortsmulshi@gmail.com</i></a>
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
        <!-- start About Us section -->

         <section class="hotel_facilities_areaa margin-top-60 margin-bottom-60">
            <div class="container">
                <div class="hotel_facilities">
                    <!-- <div class="section_title nice_title content-center">
                        <h3>Enjoy A Romantic Escape</h3>
                    </div> -->
                    <div class="hotel_facilities_content">
                        <div role="tabpanel">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="restaurant">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5 col-sm-6">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="img/facility/Romantic-Dinner-Wallpaper-Full-HD.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7 col-sm-6">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Enjoy A Romantic Escape</h3>
                                                    <p>
                                                        This is the moment of re-ignite old romances.reliving memories and cherishing a moment.
                                                    </p>
                                                    <p>
                                                       The hotel has a special honeymoon and aniversary packags for couples
                                                    </p>
                                                    <div class="our_services">
                                                        <!-- <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_us_area margin-bottom-128">
            <div class="container">
                <div class="about_us clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                        <div class="news">
                            <div class="section_title margin-bottom-50">
                                <!-- <h5>News</h5> -->
                            </div>
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single_content clearfix border-bottom-whitesmoke">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-2 padding-left-0">
                                                <!-- <div class="post_media">
                                                    <a href="#"><img src="img/lightslider-img/adfa456f4e567eece180b1816eb30361.jpg" alt=""></a>
                                                </div> -->
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-10 padding-left-0">
                                                <br>
                                                <div class="post_title clearfix" style="    background-color: blanchedalmond; padding-left: 20px; padding-right: 10px;">
                                                    <br>

                                                    <h6><p>Take a break from your hectic life and escape to the scenic Mulshi, Pune.</p> 
                                                        <h6><p>It entices you to a paradise away from the daily grind of the city.</p> 
                                                        <h6><p>Surround yourself with nature’s bounty while still close enough for the hustle bustle of life.</p>
                                                            <br>
                                                         
                                                            
                                                </div>
                                                <!-- <div class="post_content  margin-bottom-35">
                                                    <p>14 May 2014</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <!-- <div class="single_content clearfix margin-top-35 border-bottom-whitesmoke">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                                <div class="post_media">
                                                    <a href="#"><img src="img/news-two.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                                <div class="post_title clearfix">
                                                    <h6>Donec scelerisque vulputate</h6>
                                                </div>
                                                <div class="post_content margin-bottom-35">
                                                    <p>15 May 2014</p>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="single_content clearfix margin-bottom-35 margin-top-35">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                                <div class="post_media">
                                                    <a href="#"><img src="img/news-three.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                                <div class="post_title clearfix">
                                                    <h6>Curabitur varius quam lorem</h6>
                                                </div>
                                                <div class="post_content">
                                                    <p>17 May 2014</p>
                                                </div>
                                            </div>
                                        </div>  -->                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="showcase">
                            <div class="section_title margin-bottom-50">
                                <h5>Explore
Mulshi, Pune</h5>
                            </div>
                            <div class="section_description">
                                <div class="clearfix demo" style="">
                                    <ul id="vertical" class="gallery list-unstyled">
                                        <li data-thumb="img/lightslider-img/adfa456f4e567eece180b1816eb30361.jpg">
                                            <img alt="slider" src="img/lightslider-img/adfa456f4e567eece180b1816eb30361.jpg"/>
                                        </li>
                                        <li data-thumb="img/lightslider-img/Tamhini_Ghat-800x600.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/Tamhini_Ghat-800x600.jpg" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/prati-balaji-temple.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/prati-balaji-temple.jpg" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/-66070_7620.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/-66070_7620.jpg" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/prati-pandharpur3.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/prati-pandharpur3.jpg" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/490987704Pune_Rajgad_Fort_Main.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/490987704Pune_Rajgad_Fort_Main.jpg" />
                                        </li>
                                        <!-- <li data-thumb="img/lightslider-img/cS-26.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/cS-26.jpg" />
                                        </li>
                                        <li data-thumb="img/lightslider-img/cS-27.jpg"> 
                                            <img alt="slider" src="img/lightslider-img/cS-27.jpg" />
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="customer_says">
                            <div class="section_title margin-bottom-50">
                                <h5>Customer Says</h5>
                            </div>
                            <div class="section_description">
                                <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p>
                                                        Best Resort, Best Hospitality, Best Ambience. 
                                                    </p>
                                                    <p>
                                                        I had booked Suite Room & it was wonderful to experience.
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="img/facility/testimonial1.png" alt=""></a>
                                                    </div>
                                                    <br>
                                                    <div class="customer_identity floatleft">

                                                        <h6>Altamash Malvankar</h6>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p>
                                                        The rooms are really good. 
                                                    </p>
                                                    <p>
                                                        Just a new setup hence everything looks clean and fresh.
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="img/facility/testimonial2.png" alt=""></a>
                                                    </div>
                                                    <br>
                                                    <div class="customer_identity floatleft">
                                                        <h6>Ritesh Reddy</h6>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="item">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p>
                                                        The rooms are quite spacious and very comfortable.
                                                    </p>
                                                    <p>
                                                        Also the view from the hotel is amazing.
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_pic alignleft-20">
                                                        <a href="#"><img src="img/facility/testimonial3.png" alt=""></a>
                                                    </div>
                                                    <br>
                                                    <div class="customer_identity floatleft">
                                                        <h6>Bhavesh</h6>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <!-- <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end About Us section -->
        
        <!-- start contact us area -->
       
        <!-- end contact us area -->

        <!-- start footer -->
       <?php include'includes/footer.php';?>
        <!-- end footer -->
		
		
		    <?php include'includes/script.php';?>
        <!-- jquery library -->
        
    </body>
</html>

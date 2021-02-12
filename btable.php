<!DOCTYPE html>
<html lang="en">
    <?php include'includes/head.php';?>
    <body id="booking_page">

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
                        <h2>Reserve Table</h2>
                        <!-- special offer start -->
                       <!--  <div class="special_offer_main">
                            <div class="container">
                                <div class="special_offer_sub">
                                    <img src="img/special-offer-yellow-main.png" alt="imf">
                                </div>
                            </div>
                        </div>     -->     
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <!-- start other detect room section -->
        <section class="booking_area">
            <div class="container">
                <div class="booking">
                    <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                       <!--  <li role="presentation" class="active">
                            <a href="#booking_info" aria-controls="booking_info" role="tab" data-toggle="tab"><i>1</i><span>booking info</span></a>
                        </li> -->
                        <li role="presentation">
                            <a href="#personal_info" aria-controls="personal_info" role="tab" data-toggle="tab"><i>1</i><span>Booking Information</span></a>
                        </li>
                        <!-- <li role="presentation">
                            <a href="#payment_info" aria-controls="payment_info" role="tab" data-toggle="tab"><i>3</i><span>payment info</span></a>
                        </li> -->
                       <!--  <li role="presentation">
                            <a href="#booking_done" aria-controls="booking_done" role="tab" data-toggle="tab"><i>2</i><span>booking done</span></a>
                        </li> -->
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane-active" id="personal_info">
                            <div class="personal_info_area">
                                <div class="hotel_booking_area">
                                    <div class="hotel_booking margin-top-70 margin-bottom-125">
                                        <form  action="back.php" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="First Name" name="name" id="name" >               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" style="color: black">               
                                                    </div>
                                                </div>
                                               <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Contact Number" name="cnumber" id="cnumber" style="color: black">               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3">
                                   <div class="input-group border-bottom-dark-22">
                                        <input class="date-picker" id="datepicker" name="datepicker" placeholder="Booking Date" type="text" style="color: black"/>
                                        <div class="input-group-addon"><!-- <i class="fa fa-calendar" aria-hidden="true"> --></i></div>
                                    </div>
                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="guest" id="guest" style="  border: 1px solid #8e8787; color: black">
                                                          <option selected="selected" disabled="disabled">Number Of Guest</option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                           <option value="4">4</option>
                                                            <option value="5">5</option>
                                                             <option value="6">6</option>
                                                              <option value="7">7</option>
                                                               <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                  <option value="10">10</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="table" id="table" style="  border: 1px solid #8e8787; color: black">
                                                          <option selected="selected" disabled="disabled">Table Number</option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                           <option value="4">4</option>
                                                            <option value="5">5</option>
                                                             <option value="6">6</option>
                                                              <option value="7">7</option>
                                                               <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                  <option value="10">10</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="slot" id="slot" style="border: 1px solid #8e8787; color: black">
                                                          <option selected="selected" disabled="disabled">Time Slot</option>
                                                             <option value="12:15 AM">12:15 AM</option>
                                                            <option value="12:30 AM">12:30 AM</option>
                                                            <option value="12:45 AM">12:45 AM</option>
                                                            <option value="01:00 AM">01:00 AM</option>
                                                            <option value="01:15 AM">01:15 AM</option>
                                                            <option value="01:30 AM">01:30 AM</option>
                                                            <option value="01:45 AM">01:45 AM</option>
                                                            <option value="02:00 AM">02:00 AM</option>
                                                            <option value="02:15 AM">02:15 AM</option>
                                                            <option value="02:30 AM">02:30 AM</option>
                                                            <option value="02:45 AM">02:45 AM</option>
                                                            <option value="03:00 AM">03:00 AM</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container">
                                                    <div class="form-group">
                                                      <textarea class="form-control" rows="5" id="comment" placeholder="Any Specific request" style="border: 1px solid #8e8787; color: black" ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center"><button  type="submit" style= "background: #145A32;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;" name="contact" id="contact">Book Table</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                     
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
        <!-- end contact us area -->

        
        <!-- start footer -->
       <?php include'includes/footer.php';?>
        <!-- end footer -->
        
        
        
        <!-- jquery library -->
        <?php include'includes/script.php';?>
        
    </body>
</html>

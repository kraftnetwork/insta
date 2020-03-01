@extends("layouts.app")
@section("content")
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center"style="height:400px!important; background:url(http://goinstatrip.com/goinsta/images/banners/georgia_upcoming.jpg);background-position: bottom;">
        
        <div class="container">
            <div class="breadcrumb-content">
                <h2></h2>
                <!--<nav aria-label="breadcrumb">-->
                <!--    <ul class="breadcrumb">-->
                <!--        <li class="breadcrumb-item"><a href="#">Home</a></li>-->
                <!--        <li class="breadcrumb-item"><a href="#">Destinations</a></li>-->
                <!--        <li class="breadcrumb-item"><a href="#">Bahamas Cruises</a></li>-->
                <!--        <li class="breadcrumb-item active" aria-current="page">Booking</li>-->
                <!--    </ul>-->
                <!--</nav>-->
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>

                        <form method="post" action="#" name="contactform" id="contactform">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
                                </div>
                                <div class="textarea col-xs-12">
                                    <label>Message:</label>
                                    <textarea name="comments" placeholder="Enter a message" required></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                         <input type="submit" class="btn-blue btn-red" id="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-about footer-margin">
                        <!--<div class="about-logo">-->
                        <!--    <img src="images/Yatra-01.png" alt="Image">-->
                        <!--</div>-->
                        <h2 style="font-size: 70px;
                        line-height: 70px;
                        font-family: haraba;font-weight: 900;color:#75c02e;">Let's Connect</h2>
                        <p>To learn more about our tour packages or other enquiry, Please fill our contact form or us on:</p>
                        <div class="contact-location">
                            <ul>
                                  <li><i class="fa fa-whatsapp" style="font-size:19px;"></i> <a href="https://wa.me/13127256427" target="_blank">(971)-54-583-2020</a></li> 
                                  
                                  <li><i class="flaticon-phone-call" style="font-size:19px;"></i> <a href="tel:(971)-54-583-2020">(971)-54-583-2020</a></li> 
                                  
                                  
                                   
                                <li><i class="flaticon-mail"></i> <a href="mailto:info@goinstatrip.com">info@goinstatrip.com</a></li>
                                
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Our Branches</li>
                              
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map">
        <div style="height: 350px; width: 100%;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1804.4113118617133!2d55.296473656284306!3d25.242898601011802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f436944cae93f%3A0x5fc5b33a77b17841!2sGoinstaTrip!5e0!3m2!1sen!2sus!4v1582652957106!5m2!1sen!2sus" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
   @endsection
    @section("scripts")
        <script src="js/map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" async defer></script>
        <script src="js/preloader.js"></script>
    @endsection

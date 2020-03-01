@extends("layouts.app")

@section("content")
    <!-- Banner start -->
    <section class="swiper-banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(images/slider/Banner_dubai.jpg)">
                        <div class="swiper-content" data-animation="animated fadeInDown">
                            <!--  <h2>GoInstaTrip</h2>
                             <h1>Dubai's Most Reliable & Efficient <br>Tourism Company</h1>
                             <a href="#" class="btn-blue btn-red">View Our Tour</a> -->
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/slider/georgia.jpg)">
                        <div class="swiper-content" data-animation="animated fadeInRight">

                            <!--  <h1>Explore Georgia</h1>
                             <h2>Immerse In History & Adventure</h2>
                             <br>
                             <a href="#" class="btn-blue btn-red">Book Now</a> -->
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(images/slider/holiday.jpg)">
                        <div class="swiper-content" data-animation="animated fadeInUp">
                            <!--<h2>exciting schemes just a click away</h2>-->
                            <!--<h1>Amazing Santorini 7 days tour</h1>-->
                            <!--<a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="overlay"></div>
        </div>
    </section>
    <!-- Banner Ends -->


    <!-- Search Box -->
    <div class="search-box clearfix">
        <div class="container">
            <div class="search-outer" style="background
            ;#76c12f;">
                <div class="search-content">
                    <form>
                        <div class="row">

                            <div class="col-md-3 col-xs-6 ">
                                <div class="search-ad">
                                    <p> FIXED GROUP
                                        <span>Tour</span></p>


                                    <!-- <i class="flaticon-sun-umbrell"></i> -->
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="table_item" style="margin-top: 5%;">

                                    <a href="dubai-georgia">
                                        <img alt="desc" src="images/georg.gif"style="margin-top: -35px;-webkit-user-drag: none; -webkit-user-select: none;">
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="table_item">


                                    <a href="india-dubai">
                                        <img alt="desc" src="images/in.gif"style="margin-top: -17px;-webkit-user-drag: none;-webkit-user-select: none;">
                                    </a>


                                    <!-- <p style="text-align: center;">Dubai to Georgia </p>
    -->

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Popular Packages -->
    <section class="popular-packages">
        <div class="container">
            <div class="section-title text-center">
                <h2>Popular Leisure Tours</h2>
                <div class="section-icon">
                    <img src="images/gogogo.png" style="width: 40px;">
                </div>
                <p>With over 500 leisure tour destinations to pick from, you'll be spoilt for choice!<br>Explore and find what's best suits you.   </p>
            </div>
            <div class="row package-slider slider-button">
                <div class="col-sm-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="images/local_tours/city.jpg" alt="Image">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <!--<p><span>$659</span> / PER </p>-->
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>DUbai City Tour</h3>
                            <p class="package-days"> From AED 150</p>
                            <p> Get on the bus with our well details tour
                                guide giving you detail information about this
                                city as you drie trough the new
                                and old Dubai .</p>
                            <div class="package-info">
                                <a href="#" class="btn-blue btn-red">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="images/local_tours/dub.jpg" alt="Image">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <!--<p><span>$659</span> / PER </p>-->
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Desert Safari</h3>
                            <p class="package-days"> From AED 150</p>
                            <p> Leaving the city's hustle and bustle atmosphare is the must-see experience destination for eevry one that visit Dubai. Your trip is not complete without it.</p>
                            <div class="package-info">
                                <a href="#" class="btn-blue btn-red">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="images/package3.jpg" alt="Image">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <!--<p><span>$659</span> / PER </p>-->
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Abra Ride</h3>
                            <p class="package-days"></i> From AED 150</p>
                            <p>Experience Dubai from a whole new perspective as you sail from Creek while  discovering the traditional Al Fahhidi area.</p>
                            <div class="package-info">
                                <a href="#" class="btn-blue btn-red">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="images/package1.jpg" alt="Image">
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <!--<p><span>$659</span> / PER </p>-->
                            </div>
                        </div>
                        <div class="package-content">
                            <h3>Dhow Cruise Creek</h3>
                            <p class="package-days"></i> From AED 90</p>
                            <p>The Dhow cruise is an arabian name for the old fashioned wooden sail boats, only that now its an elegant-vintage style floating restaurant. </p>
                            <div class="package-info">
                                <a href="#" class="btn-blue btn-red">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Popular Packages Ends -->

    <!-- Deals -->
    <section class="deals">
        <div class="container">
            <div class="section-title section-title-white text-center">
                <h2 style="color:#75c02e!important">Travel Deals</h2>
                <div class="section-icon">
                    <img src="images/gogogo.png">
                </div>
                <p>For the best & latest deals in the world of travel, We assure you of the best price guarantee. What you see is what you get! </p>
            </div>
            <div class="deals-outer">
                <div class="row deals-slider slider-button">
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal1.jpg" alt="Image">
                                    <span class="deal-price">AED 500</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Family Tours</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal3.jpg" alt="Image">
                                    <span class="deal-price">AED 900</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Weekend Gateway</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal4.jpg" alt="Image">
                                    <span class="deal-price">AED 1200</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Wild Life Tour</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal2.jpg" alt="Image">
                                    <span class="deal-price">AED 600</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Cruise Holiday</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal1.jpg" alt="Image">
                                    <span class="deal-price">AED 120</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Backpacker Tour</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal4.jpg" alt="Image">
                                    <span class="deal-price">AED 900</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Beach Tour</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>

    <!-- Blog -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Blog</h2>
                        <div class="section-icon">
                            <img src="images/gogogo.png">
                        </div>
                        <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog1.jpg" alt="Image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                                <h3><a href="blog-detail.html">How to Apply for Dubai Visa Online?</a></h3>
                                <p>Dubai is a world tourist hub and every traveler for once wants to visit this charming emirate. you need a Visa. Although Dubai tourism has made it very easy to obtain a visa for its tourists..</p>
                                <div class="blog-author">
                                    <div class="pull-left">
                                        <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Sam</a></p>
                                    </div>
                                    <div class="pull-right blog-date-icon">
                                        <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                        <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                        <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog2.jpg" alt="Image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                                <h3><a href="blog-detail.html">remembering the road i went through</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                                <div class="blog-author">
                                    <div class="pull-left">
                                        <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Sam</a></p>
                                    </div>
                                    <div class="pull-right blog-date-icon">
                                        <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                        <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                        <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img src="images/blog3.jpg" alt="Image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                                <h3><a href="blog-detail.html">planning fot the perfect familytrip outdoor</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                                <div class="blog-author">
                                    <div class="pull-left">
                                        <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Sam</a></p>
                                    </div>
                                    <div class="pull-right blog-date-icon">
                                        <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                        <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                        <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Blog Ends -->

    <section class="countdown-section">

        <div class="container">

            <div class="countdown-title">
                <h2>Special Tour in May, Discover <span>Georgia </span> for 50 Customers with <span>30% Discount </span></h2>
                <p>It’s limited seating! Hurry up</p>
                <div class="package-info">
                    <a href="#" class="btn-blue btn-red">Book My Seat Now !</a>
                </div>
            </div>
            <div class="countdown countdown-container container">
                <p id="demo"></p>
            </div><!-- /.countdown-wrapper -->
        </div>
        <div class="testimonial-overlay">
            <video autoplay muted loop id="myVideo">
                <source src="http://goinstatrip.com/goinsta/images/georgia.mp4" type="video/mp4">
            </video>
        </div>

    </section>
@endsection
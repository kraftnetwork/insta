<!-- Header -->
<header>
    <div class="upper-head clearfix">
        <div class="container">
            <div class="contact-info">
                <p><i class="flaticon-phone-call"></i> Phone: (+971)-54-583-0003</p>
                <p><i class="flaticon-mail"></i> Mail: info@goinstatrip.com</p>
            </div>
            <div class="login-btn pull-right">
                <a href="#"><i class="fa fa-user-plus"></i> Register</a>
                <!--    <a href="#"></i> Our Blog</a> -->
            </div>
        </div>
    </div>
</header>
<!-- Header Ends -->

<!-- Navigation Bar -->
<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href="/"><img alt="Image" src="{{asset('images/goinstatrip-logo.png')}}" style="    width: 200px;margin-top: 4px;margin-right: 45px;"></a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <!-- <li class="active">
                                <a href="index.html">Home</i></a>
                            </li> -->

                            <li>
                                <a href="about">About</a>
                                <!--<ul>-->
                                <!--    <li> <a href="#">Our Vision</a></li>-->
                                <!--    <li> <a href="#">Our Mission</a></li>-->
                                <!--    <li><a href="#">Our Team</a></li>-->

                                <!--</ul>-->
                            </li>

                            <li>
                                <a href="uae-visa">UAE VISA</a>
                            </li>


                            <li class="dropdown menu-large" style="top:-70px!important;">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Global Visa <i class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu megamenu row">

                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra FLA"></i> AMERICAN VISA</a>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"></i>

                                                EUROPE VISA</a>

                                        </div>
                                    </li>

                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"></i> ASIA VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"></i>MIDDLE EAST</a>

                                        </div>
                                    </li>

                                    <!-- end FIRST  -->

                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> BRAZIL VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i>  SCHENGEN VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> CHINA VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> OMAN VISA</a>

                                        </div>
                                    </li>


                                    <!-- end SEC  -->

                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> CANADA VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> IRELAND VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> INDIAN VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> SAUDI VISA</a>

                                        </div>
                                    </li>
                                    <!-- end 3RD  -->

                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="united states flag"></i> U.S.A VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> U.K VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> JAPAN VISA</a>

                                        </div>
                                    </li>


                                    <li>
                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><i class="andorra flag"></i> U.A.E VISA</a>

                                        </div>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="#"><i class="fa fa-star"></i> Fixed Group Tours<i class="fa fa-angle-down"></i></a>
                                <ul>
                                    @foreach(\Illuminate\Support\Facades\Cache::get("group_tours") as $tour)
                                    <li><a href="{{route('tour_booking',$tour->Tour_slug)}}">{{$tour->Tour_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <!--<li>-->
                            <!--    <a href="#">Holidays<i class="fa fa-angle-down"></i></a>-->
                            <!--    <ul>-->
                            <!--        <li><a href="#">Adventure Tours </a></li>-->
                            <!--        <li><a href="#">Beach Tour </a></li>-->
                            <!--        <li><a href="#">Beach Tour </a></li>-->
                            <!--        <li><a href="#">Backpacker Tour</a></li>-->
                            <!--        <li><a href="#">Cruise Holiday </a></li>-->
                            <!--        <li><a href="#">Excursion & Local Attractions </a></li>-->
                            <!--        <li><a href="#">Honey Moon</a></li>-->
                            <!--        <li><a href="#">Family Tours</a></li>-->

                            <!--        <li><a href="#">Luxury Tours</a></li>-->
                            <!--        <li><a href="#">Resort Destination</a></li>-->
                            <!--        <li><a href="#">Weekend Gateway </a></li>-->
                            <!--        <li><a href="#">Wildlife Tour </a></li>-->







                            <!--    </ul>-->
                            <!--</li>-->


                            <!--<li>-->
                            <!--    <a href="#">Hotels & Flight  <i class="fa fa-angle-down"></i></a>-->
                            <!--    <ul>-->
                            <!--        <li><a href="#">Airline Tickets </a></li>-->

                            <!--    </ul>-->
                            <!--</li>-->
                            <li>
                                <a href="#">Blog </a>

                            </li>

                            <li>
                                <a href="contact">Contact Us </a>

                            </li>

                        </ul>
                    </div><!--/.nav-collapse -->
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navigation Bar Ends -->
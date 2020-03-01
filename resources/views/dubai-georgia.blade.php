@extends("layouts.app")

@section("content")


    
    <!-- Breadcrumb -->
   <section id="abt-sec" class="breadcrumb-outer text-center" style="height:400px
   !important; background:url(http://goinstatrip.com/goinsta/images/banners/georgia_upcoming.jpg);background-position: bottom;">
        <div class="container">
            <div class="breadcrumb-content" style="top:80px;">
                <h2 style="top: 117px;font-family: comforta;margin-top: 70px;line-height: 40px;">{{$tour->Tour_name}} <br>
                    Group Tours.</h2>
                
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations destination-padding">
        <div class="container">
            <div class="row mix asia">
                @foreach($tour->packages as $package)
                <div class="col-md-4 col-xs-6">
                    <div class="destination-item">
                        <div class="destination-image">
                            <img src="{{asset($package->Package_image)}}" alt="Image">
                            <div class="destination-overlay"></div>
                            <!--<div class="destination-btn">-->
                            <!--    <a href="#" class="btn-blue btn-red">Book Now</a>-->
                                
                            <!--</div>-->
                        </div>
                        <div class="destination-content">
                            <h5 style="color:#fff!important;
                            font-family: roboto;
                            transition: all ease-in-out 0.3s;
                            font-weight: bolder;
                            background: #000;
                            padding: 5px;
                            border-radius:5px; margin-right: 30px;padding-left: 10px;">{{$package->Package_name}}</h5>
                            
                            <tr>
                                  <td class="title">Package Includes</td> 
                                    <br>
                                    <br>
                                        <td>
                                            <ul style="font-size: 14px;line-height: 9px!important;">
                                                @foreach($package->features as $feature)
                                                <li>           
                                                <span class="{{$feature->Package_icon}}"
                                                      aria-hidden="true" style="color: #75c02e; font-size:18px;"></span>
                                                    {{$feature->Feature_name}}</li>
                                               @endforeach
                                                </ul>
                                            </td>
                                     </tr>
                                <div class="btn">
                                <a href="{{route("book_tour",["tour_slug"=>$tour->Tour_slug,"id"=>$package->Package_id])}}" class="btn-blue btn-red">Book Now</a>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                @endforeach


                

                

                

            </div>
            
            <!--Pagination-->
            <!--<div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--        <div class="pagination-content">-->
            <!--            <ul class="pagination">-->
            <!--                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>-->
            <!--                <li class="active"><a href="#">1</a></li>-->
            <!--                <li><a href="#">2</a></li>-->
            <!--                <li><a href="#">3</a></li>-->
            <!--                <li><a href="#">4</a></li>-->
            <!--                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>-->
            <!--            </ul>-->
            <!--        </div> -->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    
    
@endsection
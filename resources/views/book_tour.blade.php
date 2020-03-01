@extends("layouts.app")

@section("content")

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div id="preloader" style="display: none;">
       <div id="status"></div>
   </div>

        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{$tour->Tour_name}}</h2>
                <h4 class="white"></h4>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                       <div class="countdown-label">Deal is Active! Ends in</div>
                        <p id="cuntdwn" style="margin-bottom:0px;
                                font-size: 19px;font-weight: 900; color:#e60c54"> </p>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section id="section-1" class="car-destinations sections">
        <div class="container">
            <div class="detail-content content-wrapper">   
                <div class="row">
                       
                    <div class="col-md-8 col-xs-12">
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">

                                    @foreach($tour->tourImages as $index=>$image)
                                    <!-- 1st Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="{{$index}}" class="{{$index==0?'active':''}}">
                                        <!-- 1st Indicator Image -->
                                        <img src="{{asset($image->Image_url)}}" alt="in_th_030_0{{$index+1}}_sm" />
                                    </li>

                                    @endforeach
                                    
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($tour->tourImages as $index=>$image)
                                        <div class="item {{$index==0?'active':''}}">
                                            <!-- Slide Background -->
                                            <img src="{{asset($image->Image_url)}}" alt="in_th_030_0{{$index+1}}" />
                                        </div>

                                @endforeach

                                    
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                    </div>
                    <div id="sidebar-sticky" class="col-md-4 col-xs-12">
                        <div class="destination-content" style="height: 500px;">

                             <!--Departure Date -->
                             <div style="float: right; font-size: 19px; background: #e60d54; text-align: center; padding: 5px; color: white; border-radius: 8px; /* border-bottom: 1px dotted black; */ font-weight: bolder;">27 <br><span>March</span>
                                <br>
                                
                                <!--<span style="font-size: 9px; background:#333;margin-top:-5px; border-radius:3px;">Departure Date-->
                                <!--</span>-->
                                
                                </div> 
                            <h3><span style="font-size: 12px;">AED</span><strong class="color-red-3">

                                </strong><span id="book-total">{{number_format($package->Price)}}</span>
                                      <span style="font-size: 12px;">/ Person</span></h3>
                            <h6>Flight & Hotel Included</h6>
                             <h6 style="color: white;
                                background-color: #e60e54;
                                padding: 0px;
                                margin-right: 100px;
                                text-align: center;
                                width: 142px;
                                margin-top: -15px;
                                border-radius: 5px;">14 Seats Available!</h6>
                                
                                
                            <!--<h2>About Georgia</h2>-->
                            <!--<p>Georgia, a country at the intersection of Europe and Asia, is a former Soviet republic that’s home to Caucasus Mountain villages and Black Sea beaches. It’s famous for Vardzia, a sprawling cave monastery dating to the 12th century, and the ancient wine-growing region Kakheti. The capital, Tbilisi, is known for the diverse architecture and mazelike, cobblestone streets of its old town.</p>-->
                             <form method="post"  id="booking-form">
                                <div class="row">
                                    @foreach($exclusives as $index=>$exclusive)
                                    <p>{{$exclusive->Name}}</p>
                                <div class="form-group col-xs-12">
                                    <select id="" class="exclusives-select" data-id="{{$exclusive->Id}}" style="height: 35px;">
                                      <option value="0">-- Please Select--</option>
                                        @foreach($exclusive->options as $option)
                                      <option value="{{$option->Id}}" data-price="{{$option->Price}}" >{{$option->Exclusive_option}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endforeach

                                   
                             <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <button type="submit" class="btn-blue btn-red">Book Now</button>
                                        </div>
                            </div>
                                </div>
                            </form>

                        </div>
                    </div> 
                </div>
            </div>
            <br>
            <div class="row">       
                
                    <div id="content" class="col-md-8" >    
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Overview</h3>
                            </div>
                            <div class="description-content">
                                <p>{{$tour->Description}}</p>
                               <table class="table table-hover">
                                    <thead>
                                    </thead>
                                    <tbody class="table table-striped">
                                        <tr>
                                            <td class="title">Departure</td>
                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> Dubai (DXB) </td>
                                        </tr>
                                        <tr>
                                            <td class="title">Departure Time</td>
                                            <td><i class="fa fa-clock-o" aria-hidden="true"></i> Please arrive by 09:00 AM for a prompt departure at 10:50 AM</td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="title">Voucher Includes</td>
                                            <td>
                                                <ul>
                                                    @foreach($package->features as $feature)
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> {{$feature->Feature_name}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="title">Excludes</td>
                                            <td class="excludes">
                                                <ul>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Departure Taxes</li>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Entry Fees</li>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> Insurance</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="title">Popular Places</td>
                                            <td>
                                                <ul>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                           <div class="detail-timeline detail-box">
                            <div class="detail-title">
                                <h3>Tour Timeline</h3>
                            </div>
                            <div class="timeline-content">
                                <ul class="timeline">
                                    <!-- Item 1 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>1</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 1</span>
                                            </div>
                                            <div class="desc">
                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps  yach.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item 2 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>3</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 2</span>
                                            </div>
                                            <div class="desc">
                                                <p>Arrive in Kathmandu and relax while enjoying the color and energy of Nepal’s capital city. Duffels of personal climbing gear and high-altitude clothing will be collected for the cargo  </p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item 3 -->
                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>3</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 3  </span>
                                            </div>
                                            <div class="desc">
                                                <p>Enjoy Kathmandu with a city tour and attend any governmental and media affairs involving team members.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane  .</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Item 4 -->
                                
                                    
                                </ul>
                            </div>
                        </div>
                        
                        <div class="location-map detail-box">
                            <div class="detail-title">
                                <h3>Location Map</h3>
                            </div>
                            <div class="map-frame">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6050046.33254782!2d38.868505364857015!3d42.23315981222585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sae!4v1581976027730!5m2!1sen!2sae" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                     


                        <div class="detail-title">
                                <h3>Terms & Conditions</h3>
                            </div>
                        <p>{!! $tour->Terms_and_condition !!}</p>
                        
                    </div>
                    <div id="sidebar" class="col-md-4">
                        <aside class="detail-sidebar sidebar-wrapper">
                            
                            
                            <div class="sidebar-item sidebar-helpline">
                                <div class="sidebar-helpline-content">
                                   <i class="fa fa-volume-control-phone" aria-hidden="true" style="text-align: center;
    display: block;
    font-size: 60px!important;
    transform: rotate(-60deg);"></i>
                                    <h1 style="color: #78d332; text-align: center; font-weight: 100; font-family: inherit;font-size: 25px;">Book <span style="color: black;">by phone</span>  </h1>
                                    
                                    <p class="anchor" style="color: black; text-align: center;"> <a href="tel://+971 54 583 2020">+971 54 583 2020</a></p>
                                   <!--  <p style="color: black; text-align: center;">+971 4272 7777</p> -->
                                    <p style="color: black; text-align: center;"><a href="mailto:info@goinstatrip.com"></a>info@goinstatrip.com</p>
                                </div>
                            </div>
                        </aside>
                    </div>
            </div>
        </div>
    </section>

    @include("includes.booking_section")
   @endsection

@section("scripts")
     <!--ctdw script here -->
 <script>

     let exclusives = [];
     let package_price = {{$package->Price}}

     function findExclusive(id)
     {
        return exclusives.find(exclusive=>exclusive.exclusive_id===id);
     }

     let total = 0;
     function calculateTotal()
     {
         total = exclusives.reduce(function(sum,exclusive){
             console.log("Sgele",sum)
             return sum + exclusive.price
         },0);

         $("#book-total").html(numberWithCommas(total + package_price));
     }

     $('.exclusives-select').change(function(){
        let element = $(this);
        let id  = Number(element.data("id"));
        let selected_price = Number($('option:selected', this).data('price'));
        let value = Number(element.val());

        let exclusive = findExclusive(id);
        if(!exclusive)
        {
            exclusives = [...exclusives,{exclusive_id:id,option_id:value,price:selected_price}]
        }else{
            if(value===0)
            {
                exclusives = exclusives.filter(temp=>temp.exclusive_id!==exclusive.exclusive_id)
            }else{
                exclusives = exclusives.map(temp=>temp.exclusive_id===exclusive.exclusive_id?
                    {...temp,option_id:value,price:selected_price}:temp);
            }

        }
        calculateTotal();
     });


     function numberWithCommas(x) {
         x = x.toString();
         var pattern = /(-?\d+)(\d{3})/;
         while (pattern.test(x))
             x = x.replace(pattern, "$1,$2");
         return x;
     }


     $("#booking-form").submit(function(e){
         $("#preloader").fadeIn();
        e.preventDefault();
        setTimeout(function () {
            $('#preloader').fadeOut();
            $('.sections').hide();
            $('#booking-cost').html(numberWithCommas(total + package_price))
            $('#section-2').fadeIn();
        },1000)
     });


// Set the date we're counting down to
var countDownDate = new Date("Feb 24, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("cuntdwn").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
 @endsection

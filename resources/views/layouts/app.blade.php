<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include("includes.head")
<body>
<!-- Preloader -->
<!-- <div id="preloader">
    <div id="status"></div>
</div> -->
<!-- Preloader Ends -->

<!-- Header -->
@include("includes.header")

@yield("content")
<!-- Footer -->
@include("includes.footer")
<!-- Footer Ends -->

<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- *Scripts* -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/main-1.js')}}"></script>
<script src="{{asset('js/preloader.js')}}"></script>
<script src="{{asset('js/custom-swiper2.js')}}"></script>
@yield("scripts")

<script type="text/javascript">
    // close the div in 5 secs
    window.setTimeout("closeHelpDiv();", 5000);

    function closeHelpDiv(){
        document.getElementById("helpdiv").style.display=" none";
    }

    if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
        if (document.cookie.indexOf("iphone_redirect=false") == -1) window.location = "https://goinstatrip.com/goinsta/mobile.html";
    }
</script>

    </body>


    </html>
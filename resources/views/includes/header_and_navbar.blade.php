<!--banner-->
<div class="banner">
    <div class="header"><!--header-->
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <h1><a  href="/">MAX</a></h1>
            </div>
            <!--navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="#about" class="scroll">About</a></li>
                    <li><a href="#features" class="scroll">Features</a></li>
                    <li><a href="#team" class="scroll">Team</a></li>
                    <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                    <li><a href="#contact" class="scroll">Contact Us</a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </nav>
    </div>
    <div class="cd-main-header">
        <ul class="cd-header-buttons">
            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
            </ul> <!-- cd-header-buttons -->
        </div>
        <div id="cd-search" class="cd-search">
            <form action="#" method="post">
                <input name="Search" type="search" placeholder="Search...">
            </form>
        </div>
    </div>
    <!--//header-->
    <!--banner-text-->
    <div class="banner-text">
        <!--banner Slider starts Here-->
        <script src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
        <script>
        // You can also use "$(window).load(function() {"
        $(function () {
        // Slideshow 3
        $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
        $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
        $('.events').append("<li>after event fired.</li>");
        }
        });
        
        });
        </script>
        <!--//End-slider-script-->
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <h2>We Give the best solutions<br>for Improvement</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a>  &nbsp<a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myloginModal">Log In</a>
                </li>
                <li>
                    <h3>Sollicitudin feugiat blandit<br>Quisque feugiat.</h3>
                    <p>Duis euismod massa ut sem fringilla blandit ipsum.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a> &nbsp<a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Log In</a>
                </li>
                <li>
                    <h3>Nam erat purus, malesuada<br> Venenatis ut velit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est.</p>
                    <a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Register Now</a> &nbsp<a class="more hvr-bounce-to-right" href="#" data-toggle="modal" data-target="#myModal">Log In</a>
                </li>
            </ul>
        </div>
    </div>
    <!--//banner-text-->
</div>
<!--//banner-->
@include('includes.signup_modal')
@include('includes.login_modal')
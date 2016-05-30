<div class="footer">
        <div class="container">
            <div class="footer-left">
                <p>© 2016 Max . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
            <div class="footer-right social-icons">
                <ul>
                    <li><a href="#"> </a></li>
                    <li><a href="#" class="fb"> </a></li>
                    <li><a href="#" class="gp"> </a></li>
                    <li><a href="#" class="drb"> </a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//footer--> 
    <!--smooth-scrolling-of-move-up-->
     <script src="{{ URL::asset('js/user.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
           $("body").userPlugin();
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <!--//smooth-scrolling-of-move-up-->
    <!-- Include jQuery & Filterizr -->
    <script src="{{ URL::asset('js/jquery.filterizr.js') }}"></script>
    <script src="{{ URL::asset('js/controls.js') }}"></script>
    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
    <!--//gallery-->
    <!-- swipe box js -->
    <script src="{{ URL::asset('js/jquery.swipebox.min.js') }}"></script> 
    <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
    </script>
    <!-- //swipe box js -->
    <!--search jQuery-->
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <!--//search jQuery-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
</body>
</html>
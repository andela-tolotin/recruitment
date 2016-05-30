<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Max Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Custom Theme files-->
<link href="{{ URL::asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ URL::asset('css/swipebox.css') }}">
<!--//Custom Theme files-->
<!--js-->
<script src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script> 
<!--//js-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script> 
<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
        
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
</script>
<!--//end-smooth-scrolling-->   
</head>
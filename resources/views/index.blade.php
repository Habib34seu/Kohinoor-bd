<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('css/metro.css')}}" type="text/css">
			<link rel="stylesheet" href="{{asset('css/metro-icons.css')}}" type="text/css">
			<link rel="stylesheet" href="{{asset('css/metro-colors.min.css')}}" type="text/css">
			<link rel="stylesheet" href="{{asset('css/metro-responsive.css')}}" type="text/css">
			<link rel="stylesheet" href="{{asset('css/animations.css')}}" type="text/css">
			<link rel="stylesheet" href="{{asset('css/easylocator.css')}}" type="text/css">
			<link rel="stylesheet" type="text/css" media="(max-width: 750px)" href="{{asset('css/slidemenu.css')}}">
			<link rel="stylesheet" type="text/css" media="(max-width: 750px)" href="{{asset('css/slidemenu.animate.css')}}">
			<link rel="stylesheet" type="text/css" media="(max-width: 750px)" href="{{asset('css/slidemenu.theme.light.css')}}">
			<link rel="stylesheet" href="{{asset('css/aci-style.css')}}" type="text/css">
			

			<script src="{{asset('js/jquery-11.0.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('js/jquery.slidemenu.min.js')}}" type="text/javascript"></script>

			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
			<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.js" type="text/javascript"></script>
 
            <script type="text/javascript" src="{{asset('js/unitegallery.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/ug-theme-tiles.js')}}"></script>
            <link rel="stylesheet" type="text/css" href="{{asset('css/unite-gallery.css')}}" />
            
        <!-- start AjaxSearch header -->
        <script type="text/javascript">
        //<![CDATA[
        asvar=new Array();asvar[0]='{"vsn":"1.10.2","adv":"oneword","sub":"","bxt":"Search here...","cfg":"&whereSearch=`content:pagetitle,introtext,longtitle` &order=`publishedon DESC,pagetitle` &showIntro=`0` &extract=`1:pagetitle,longtitle` &pagingType=`2` &landingPage=`8` &tplInput=`as_input_tpl` &addJscript=`0` "}';
        //]]>
        </script>
    </head>

    <body class="antialiased">

    <div class="flex-grid">
		<header>
			<!---------------- LOGO  -------------------->		
			<section class="container" style="margin-bottom: 10px;">
					@include('components.logo')			
			</section>
			<!------------------- END LOGO --------------->
			<!--------- MENU LINKS ---------->
			<section class="bg-cyan no-phone" style="background-color: #750465!important;">
					@include('components.navBar')
			</section>
            <!--------- MENU LINKS End---------->
		</header>
        
		<!--------- Carousel ---------->

            @yield('content')
            <!---------------- CONTENT END------------->
            <footer>
                <!---------------- FOOTER --------------------->
                    @include('components.footer')
                <!---------------- END FOOTER ------------------->
            </footer>
        </div>
   
        <script src="{{asset('js/metro.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/animate.js')}}" type="text/javascript"></script>	

        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
        <script>
            function showDialog(id){
                var dialog = $(id).data('dialog');
                dialog.open();
            }
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-61062387-1', 'auto');
            ga('send', 'pageview');

        </script> 
        <script type="text/javascript">

jQuery(document).ready(function(){

    jQuery("#gallery").unitegallery({
        theme_enable_preloader: true,
        tiles_type: "nested",					//must option for the tiles - justified type
         tiles_enable_transition: true,			//enable transition when screen width change
        tiles_space_between_cols: 3,			//space between images
        tiles_space_between_cols_mobile: 3,     //space between cols for mobile type
         tiles_nested_optimal_tile_width: 250,	// tiles optimal width
        tiles_min_columns: 2,
        tile_enable_image_effect:false,
        tile_enable_overlay:true,
        tile_enable_icons:false,
        tile_enable_shadow:false,
        lightbox_overlay_color:null,					
        lightbox_overlay_opacity:.9,					
        lightbox_top_panel_opacity: null,			
        lightbox_textpanel_enable_description: true,

    });
});

</script>
        
    </body>
</html>

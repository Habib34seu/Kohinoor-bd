@extends('index')
@section('content')
<!---------------- CONTENT ------------->
<section class="container">
  <div class="row">
    <div class="cell colspan9 padding20 bg-default" style="background-color:#f7f7ee">				
      <div class="row">
        <div class="cell colspan12 padding10 no-padding-left no-padding-right">	
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
          </div>	
           <script type="text/javascript">
              jQuery(document).ready(function(){

                jQuery("#vdo_gallery").unitegallery({
                  tiles_type:"justified",
                  tiles_enable_transition: true,
                  tile_enable_textpanel:true,
                  tile_textpanel_title_text_align: "center",	
                  tile_enable_image_effect:false,
                  tile_enable_overlay:true,
                  lightbox_type: "compact",
                  tile_enable_icons:true,
                  tiles_space_between_cols:10,
                  tiles_justified_space_between:10,
                  tiles_col_width:320,
                  tile_enable_shadow:false,
                  lightbox_overlay_color:null,					
                  lightbox_overlay_opacity:.9,					
                  lightbox_top_panel_opacity: null,			
                  lightbox_textpanel_enable_description: true,

                });
              });
           </script>
    	</div>	
    </div>	
		<div class="row"></div>
	</div>
				<div class="cell colspan3 padding20 no-padding-right corporate-right right-panel" style="margin-top: 1%;">
					<div class="padding30 no-padding-top"><!-- AddToAny BEGIN -->
              <div class="a2a_kit">
                  <a class="a2a_button_facebook">
                    <img src="{{asset('image/social/facebook.png')}}" border="0" alt="Facebook" width="24" height="24"/>
                  </a>
                  <a class="a2a_button_twitter">
                      <img src="{{asset('image/social/twitter.png')}}" border="0" alt="Twitter" width="24" height="24"/>
                  </a>
                  <a class="a2a_button_google_plus">
                      <img src="{{asset('image/social/gplus.png')}}" border="0" alt="Google Plus" width="24" height="24"/>
                  </a>    
                  <a class="a2a_button_youtube">
                      <img src="{{asset('image/social/youtube.png')}}" border="0" alt="Youtube" width="24" height="24"/>
                  </a>	
                  <a class="a2a_button_email">
                      <img src="{{asset('image/social/mail2.png')}}" border="0" alt="Mail" width="24" height="24"/>
                  </a>
                  <a class="a2a_dd" href="https://www.addtoany.com/share">
                      <img src="{{asset('image/social/addthis.png')}}" border="0" alt="Addtoany" width="24" height="24"/>
                  </a>
              </div>

                 <script async src="https://static.addtoany.com/menu/page.js"></script><!-- AddToAny END -->
          </div>
            <div>
                <h3><span class="mif-film mif-lg"> Album List</span></h3>
                <hr class="bg-grayLight" />
                <ul class="t-menu compact no-shadow">
                  <!-- <li >
                <a href="/video-gallery/corporate.html" title="Corporate"><span class="mif-chevron-thin-right icon"></span> Corporate</a>
                </li>
                <li  class="last">
                <a href="/video-gallery/businesses.html" title="Businesses"><span class="mif-chevron-thin-right icon"></span> Businesses</a>
                </li> -->

                </ul>
            </div>	
				</div>
	</div>							
</section>
		
		<!------------------ END CONTENT ------------------>
@endsection
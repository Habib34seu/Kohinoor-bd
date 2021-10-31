@extends('index')
@section('content')
<!--------- Banner ---------->
		
<section class="container">
	<div class="row">
		<div class="cell colspan12">						
			<img src="{{asset('image/newsImg/mainimage/news.jpg')}}" alt="Our News"  />
		</div>				
	</div>	
	<div class="row">				
		<div class="cell colspan9 padding20 no-padding-top no-padding-bottom corporate-title">											
			<h1 class="fg-white">Video Gallery</h1>
		</div>
	</div>			
</section>		
<!----------- END Banner ----------------->	
		
<!---------------- CONTENT ------------->
<section class="container">
	<div class="row">
    <div class="col-12" style="margin-top: 20px;">
      <div class="row">
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PMIgBzGnEDc" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-WB0tZLlH2k" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oME4laDi5ss" allowfullscreen></iframe>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/33pv4zsMeTQ" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zatJo7QhPVE" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f6khOIH6ZkA" allowfullscreen></iframe>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PLCt6nfzJuk" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/72i6hkOxnt0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yojC8m5nZ24" allowfullscreen></iframe>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ep7gq9Egn9c" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3WEdgW3faIQ" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px; ">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XJ54CeBpv30" allowfullscreen></iframe>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4" style="margin-top: 20px;     margin-bottom: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/45fXV7i7ajc" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;     margin-bottom: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AtgYvfczhx4" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4" style="margin-top: 20px;     margin-bottom: 20px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/outiv2GWJgs" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>
	</div>										
</section>
@endsection

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
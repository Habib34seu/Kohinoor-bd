@extends('index')
@section('content')
<section class="container">
	<div class="row">
		<div class="cell colspan12">						
			<img src="{{asset('image/imageGallery/ImagePic.png')}}" alt="Our News"  />
		</div>				
	</div>	
	<div class="row">				
		<div class="cell colspan9 padding20 no-padding-top no-padding-bottom corporate-title">											
			<h1 class="fg-white">Image Gallery</h1>
		</div>
	</div>			
</section>		
<!----------- END Banner ----------------->	
<section class="container">
    <div class="row">
      <div class="cell colspan9 padding20 bg-default" style="background-color:#f7f7ee">				
        <div class="row">
          <div class="cell colspan12 padding10 no-padding-left no-padding-right">
            <div id="gallery" style="display:none;">	
              @foreach ($imgGallery as $i)
              <img alt=""
              src="{{asset('image/imageGallery/').'/'.$i->image}}"
              data-image="{{asset('image/imageGallery/').'/'.$i->image}}"
              data-description=""
              style="display:none">
              @endforeach
            </div>	
          </div>
        </div>
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
                <h3><span class="mif-film mif-lg"> Gallery List</span></h3>
                <hr class="bg-grayLight" />
                <ul class="t-menu compact no-shadow"></ul>
            </div>	
				</div>
    </div>										
</section>
@endsection
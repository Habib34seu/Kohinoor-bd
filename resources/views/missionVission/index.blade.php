@extends('index')
@section('content')
		<!--------- Banner ---------->
		
<section class="container">
  <div class="row">
    <div class="cell colspan12">						
      <img  src="{{asset('image/bord_of_director/Mission.png')}}" alt="Mission, Vision and Values"  />
    </div>				
  </div>	
  <div class="row">				
    <div class="cell colspan9 padding20 no-padding-top no-padding-bottom corporate-title">											
      <h1 class="fg-white">Mission, Vision and Values</h1>
    </div>
  </div>		
  
</section>		
		
		<!----------- END Banner ----------------->	
		
<!---------------- CONTENT ------------->
<section class="container">
  <div class="row" >
      <div class="cell colspan9 padding20 bg-default">
                
        <div class="sub-header margin-xl">Our Mission</div>
            <p>Our aim is to improve the lives of our people through the highest possible quality protocol. We attach paramount value to our consumers in particular and the society in general. We keep introducing newer
                technologies, and carrying on the most value driven incentives and benefit packages for all the retail chains. We are also charting a pricing policy that manifests a unique blend of quality and aﬀordability. Our comprehensive strategy  framework concerning the supply chain across the entire country enables us to be naturally conferred with the prestige and privilege of leadership. We forsee our beloved company to be the best place   to work for the people who keep their unﬂinching  trust in us.
            </p>
            <div class="sub-header margin-xl">Our Vision</div>
            <p>We envision for a happier, healthier and cleaner life and make the natural attributes of life sustainable through innovation, dedication and ethics. This keeps inspiring us to create a better future by adding value to all we do for the people to look better, feel better and live better. We 
                persistently care for our valued consumers, stakeholders and 
                continuously strive to prove our products’ superiority, with an aim to obtain perpetual loyalty.
            </p>
            <div class="sub-header margin-xl">Our Values</div>
            <p>   Quality of the products, reliability, and strong distribution channel are the core values of the 
                  organization and are the basis on which they do business.
            </p>
        <div class="row">	
      </div>
      </div>
        <div class="cell colspan3 padding20 no-padding-right corporate-right right-panel">
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

            <script async src="https://static.addtoany.com/menu/page.js"></script>
              <!-- AddToAny END -->
          </div>
        <div>
            <fieldset class="dtn-outline">
                    <legend class="sub-header align-center">Registered Office and Factory</legend>
                @foreach($registerOffice as $cr)
                    <dl>
                        <dt class="opacity"><span class="mif-location fg-steel"></span>Address</dt>
                        <dd>{{$cr->address}}</dd>
                        <dd>&nbsp;</dd>
                        <dt class="opacity"><span class="mif-phone fg-steel"></span> Phone</dt>
                        <dd>{{$cr->phone}}</dd>
                        <dd>&nbsp;</dd>
                        <dt class="opacity"><span class="mif-printer fg-steel"></span> Fax</dt>
                        <dd>{{$cr->fax}}</dd>
                        <dt class="opacity"><span class="mif-envelop fg-steel"></span> Email</dt>
                        <dd><a target="_blank" href="mailto:info@kccl-bd.com">{{$cr->email}}</a></dd>
                        <dd>&nbsp;</dd>
                        <dt class="opacity"><span class="mif-display fg-steel"></span> Website</dt>
                        <dd><a href="http://www.kohinoor-bd.com/" target="_blank">{{$cr->web}}</a></dd>
                    </dl>	
                @endforeach
            </fieldset>   
        <div class="padding10"></div>
          <fieldset class="dtn-outline">
              <legend class="sub-header align-center">Corporate Office</legend>
                  @foreach($corporateOffice as $rg)
                      <dl>
                          <dt class="opacity"><span class="mif-location fg-steel"></span> Address</dt>
                          <dd>{{$rg->address}}</dd>
                          <dd>&nbsp;</dd>
                          <dt class="opacity"><span class="mif-phone fg-steel"></span> Phone</dt>
                          <dd>{{$rg->phone}}</dd>
                          <dt class="opacity"><span class="mif-printer fg-steel"></span> Fax</dt>
                          <dd>{{$rg->fax}}</dd>
                      </dl>
                  @endforeach
          </fieldset>
        <div class="padding10"></div>
      <div class="sub-header padding10 no-padding-left no-padding-right bg-darkCobalt fg-white align-center">Corporate Video</div>
      <div>
        <iframe width="100%" height="" src="https://www.youtube.com/embed/outiv2GWJgs" frameborder="0" allowfullscreen></iframe>
      </div>
      </div>	
    </div>
  </div>							
</section>
@endsection
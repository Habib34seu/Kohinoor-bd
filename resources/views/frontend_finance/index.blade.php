
@extends('index')
@section('content')
<section class="container">
  <div class="row">
    <div class="cell colspan12">						
    <img  src="{{asset('image/bord_of_director/Financial.png')}}"  />
    </div>				
  </div>	
  <div class="row">				
    <div class="cell colspan9 padding20 no-padding-top no-padding-bottom corporate-title">											
      <h1 class="fg-white">Financial Statements</h1>
    </div>
  </div>		
</section>
<section class="container">
    <div class="row">
        <div class="cell colspan9 padding20 bg-default" style="background-color:">	
           
                <div class="row padding10 no-padding-left no-padding-right flex-just-center">
                @foreach($finance as $i)
                    <div class="cell size-p20 align-center set-border margin10 bg-white shadow">
                        <a href="{{asset('image/admin_finance/pdf/').'/'.$i->pdf}}" target="_blank">
                            <img  src="{{asset('image/admin_finance/thumb/').'/'.$i->img}}" class="set-border bd-grayLighter">
                        </a>	
                        <h4 class="text-default padding5 no-padding-top no-padding-bottom">
                            <a href="{{asset('image/admin_finance/pdf/').'/'.$i->pdf}}" target="_blank">
                              {{$i->name}}
                            </a>
                        </h4>
                    </div>
                    @endforeach
                </div>
          
            <div class="row padding10 no-padding-left no-padding-right flex-just-center"></div>
                <!-- <div class="padding10">
                    Showing 1 - 16 of 52 Posts | Page 1 of 4
                    <div class="pagination no-border">
                        <span class='item current'>1</span><a class='item' href='/financials/?fin_start=16'>2</a><a class='item' href='/financials/?fin_start=32'>3</a><a class='item' href='/financials/?fin_start=48'>4</a> <a href='/financials/?fin_start=16' class='item'>></a>
                    </div>
                </div> -->
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
                <script async src="https://static.addtoany.com/menu/page.js"></script><!-- AddToAny END -->
            </div>
            <div>
                <h3><span class="mif-calculator mif-lg"> Section</span></h3>
                    <hr class="bg-grayLight" />
                    <ul class="t-menu compact no-shadow">
                    @foreach($finance as $i)
                        <li>
                            <a title="FIN 2020 -2021"><span class="mif-chevron-thin-right icon"></span> {{$i->name}}</a>
                        </li>
                    @endforeach
                    </ul>
            </div>	
        </div>
    </div>										
</section>
@endsection
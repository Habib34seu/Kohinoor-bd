<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@extends('index')
@section('content')
<section class="container">
  <div class="row">
    <div class="cell colspan12">						
      <img  src="{{asset('image/bord_of_director/values.jpg')}}" alt="Mission, Vision and Values"  />
    </div>				
  </div>	
  <div class="row">				
    <div class="cell colspan9 padding20 no-padding-top no-padding-bottom corporate-title">											
      <h1 class="fg-white">Annual, Half Yearly & Quarterly Report</h1>
    </div>
  </div>		
  
</section>
<section class="container">
    <div class="row">
      <div class="cell colspan9 padding20 bg-default" style="background-color:#f7f7ee">				
        <div class="row">
          <div class="cell colspan12 padding10 no-padding-left no-padding-right">
            <div class="panel-group"style="margin-top: 2%;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a>Annual Report</a>
                        <a data-toggle="collapse" href="#collapse1">
                        <i class="indicator glyphicon glyphicon-plus  pull-right" style="margin-top: .5%;" ></i>
                        </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class='row'>
                                @foreach($annual as $i)
                                    <div class="col-3"style="margin-left: 6%;">
                                        <a target="_blank" href="{{asset('image/annual_report/pdf/').'/'.$i->pdf}}">
                                            <img 
                                                class="img-responsive img-thumbnail" alt="2019-20" 
                                                src="{{asset('image/annual_report/thumb/').'/'.$i->thumb_img}}"
                                                style="width: 150px;height: 190px;">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a>Half Yearly Report</a>
                        <a data-toggle="collapse" href="#collapse2">
                        <i class="indicator glyphicon glyphicon-plus  pull-right" style="margin-top: .5%;" ></i>
                        </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class='row'>
                                @foreach($halfyearly as $i)
                                    <div class="col-3"style="margin-left: 6%;">
                                        <a target="_blank" href="{{asset('image/halfyearly_report/pdf/').'/'.$i->pdf}}">
                                            <img 
                                                class="img-responsive img-thumbnail" alt="2019-20" 
                                                src="{{asset('image/halfyearly_report/thumb/').'/'.$i->thumb_img}}"
                                                style="width: 150px;height: 190px;">
                                        </a>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                        <a>Quaterly Report</a>
                        <a data-toggle="collapse" href="#collapse3">
                        <i class="indicator glyphicon glyphicon-plus  pull-right" style="margin-top: .5%;" ></i>
                        </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class='row'>
                               @foreach($quater as $i)
                                    <div class="col-3"style="margin-left: 6%;">
                                        <a target="_blank" href="{{asset('image/quaterly_report/pdf/').'/'.$i->pdf}}">
                                            <img 
                                                class="img-responsive img-thumbnail" alt="2019-20" 
                                                src="{{asset('image/quaterly_report/thumb/').'/'.$i->thumb_img}}"
                                                style="width: 150px;height: 190px;">
                                        </a>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 	
          </div>
        </div>
      </div>
      <div class="cell colspan3 padding20 no-padding-right corporate-right right-panel" style="margin-top: -10%;">
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
                <fieldset class="dtn-outline">
                        <legend class="sub-header align-center">Registered Office and Factory</legend>
                    @foreach($corporateOffice as $cr)
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
                        @foreach($registerOffice as $rg)
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
            </div>	
		</div>
    </div>										
</section>



@endsection
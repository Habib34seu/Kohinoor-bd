@extends('index')
@section('content')
<!---------------- CONTENT ------------->
<section class="container">
 <div class="row">
	@foreach($news as $n)
		<div class="cell colspan9 padding20 bg-default" style="background-color:#f7f7f7">					
			<div class="row padding20 no-padding-left no-padding-right news-list-page">
				<div class="cell colspan3 padding10 no-padding-top no-padding-bottom no-padding-left">
					<div class="set-border medium-border bd-white shadow">
						<a href="#">
							<img src="{{asset('image/newsImg/').'/'.$n->image}}" data-role="fitImage" data-format="square"/>
						</a>
					</div>
				</div>
				<div class="cell colspan9 padding10 no-padding-top no-padding-bottom no-padding-right">
					<h3 class="no-margin-top">
						<a href="all-news/aci-motors-ltd.-nominated-as-highest-tax-paying-company-by-nbr.html">{{$n->title}}</a></h3>
					<hr class="bg-grayLight thin" />
					<div class="text-small">{{$n->created_at}}</div>
					<div class="padding5"></div>
					<div class="text-default">
					 {{$n->desc}}
					</div>
				</div>
		</div>
	@endforeach
	        <div class="row padding20 no-padding-left no-padding-right news-list-page"></div>
			<div class="row">
				
			</div>
				</div>
				<div class="cell colspan3 padding20 no-padding-right corporate-right right-panel"  style="margin-top: 1%;">
					<div class="padding30 no-padding-top"><!-- AddToAny BEGIN -->
					</div>
	
				</div>
			</div>							
			
</section>
		
		<!------------------ END CONTENT ------------------>
		<footer>
			
			<!----------------- FOLLOW US --------------------->
			
			<section class="padding30 no-padding-left no-padding-right no-padding-bottom">
	<div class="container">
		<div class="row padding10 bg-followus">
			<div class="cell colspan12 align-center">
				<span class="sub-header fg-white">FOLLOW US</span>
					<span class="padding10 no-padding-top no-padding-bottom"><a href="javascript:void();" target="_blank"><span class="mif-facebook mif-2x-follow fg-white"></span></a></span>
					<span class="padding5 no-padding-top no-padding-bottom"><a href="javascript:void();" target="_blank"><span class="mif-twitter mif-2x-follow fg-white"></span></a></span>
					<span class="padding5 no-padding-top no-padding-bottom"><a href="javascript:void();" target="_blank"><span class="mif-youtube mif-2x-follow fg-white"></span></a></span>
			</div>
		</div>			
	</div>	
</section>	

			
			<!--------------- END FOLLOW US ------------------->
@endsection
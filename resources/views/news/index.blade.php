@extends('index')
@section('content')
<!--------- Banner ---------->
		
<section class="container">
	<div class="row">
		<div class="cell colspan12">						
		<img  src="{{asset('image/bord_of_director/Media.png')}}" />
		</div>				
	</div>	
	<div class="row">				
		<div class="cell colspan9 padding20 no-padding-top no-padding-bottom corporate-title">											
			<h1 class="fg-white">Our News</h1>
		</div>
	</div>			
</section>		
<!----------- END Banner ----------------->	
		
<!---------------- CONTENT ------------->
<section class="container">
	<div class="row">

	<div class="col-8">
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
				<!---------------- Pagination Start ------------->
			<!-- <div class="padding10 bg-grayLighter fg-dark">
				Showing 1 - 12 of 477 Posts | Page 1 of 40
				<div class="pagination no-border">
					<span class='item current'>1</span><a class='item' href='/all-news/?news_start=12'>2</a><a class='item' href='/all-news/?news_start=24'>3</a><a class='item' href='/all-news/?news_start=36'>4</a><a class='item' href='/all-news/?news_start=48'>5</a><a class='item' href='/all-news/?news_start=60'>6</a><a class='item' href='/all-news/?news_start=72'>7</a><a class='item' href='/all-news/?news_start=84'>8</a><a class='item' href='/all-news/?news_start=96'>9</a><a class='item' href='/all-news/?news_start=108'>10</a><a class='item' href='/all-news/?news_start=120'>11</a><a class='item' href='/all-news/?news_start=132'>12</a><a class='item' href='/all-news/?news_start=144'>13</a><a class='item' href='/all-news/?news_start=156'>14</a><a class='item' href='/all-news/?news_start=168'>15</a><a class='item' href='/all-news/?news_start=180'>16</a><a class='item' href='/all-news/?news_start=192'>17</a><a class='item' href='/all-news/?news_start=204'>18</a><a class='item' href='/all-news/?news_start=216'>19</a><a class='item' href='/all-news/?news_start=228'>20</a><a class='item' href='/all-news/?news_start=240'>21</a><a class='item' href='/all-news/?news_start=252'>22</a><a class='item' href='/all-news/?news_start=264'>23</a><a class='item' href='/all-news/?news_start=276'>24</a><a class='item' href='/all-news/?news_start=288'>25</a><a class='item' href='/all-news/?news_start=300'>26</a><a class='item' href='/all-news/?news_start=312'>27</a><a class='item' href='/all-news/?news_start=324'>28</a><a class='item' href='/all-news/?news_start=336'>29</a><a class='item' href='/all-news/?news_start=348'>30</a><a class='item' href='/all-news/?news_start=360'>31</a><a class='item' href='/all-news/?news_start=372'>32</a><a class='item' href='/all-news/?news_start=384'>33</a><a class='item' href='/all-news/?news_start=396'>34</a><a class='item' href='/all-news/?news_start=408'>35</a><a class='item' href='/all-news/?news_start=420'>36</a><a class='item' href='/all-news/?news_start=432'>37</a><a class='item' href='/all-news/?news_start=444'>38</a><a class='item' href='/all-news/?news_start=456'>39</a><a class='item' href='/all-news/?news_start=468'>40</a> <a href='/all-news/?news_start=12' class='item'>></a>
				</div>
			</div> -->
			<!---------------- Pagination End ------------->
				<div class="row padding20 no-padding-left no-padding-right news-list-page"></div>
				<div class="row">	
			</div>
	    </div>
	@endforeach
	</div>


		<div class="col-4">
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
           </div>
		   <div>
			<div class="bg-grayLighter padding10">
            	<h3>Archives</h3>
				<div class="reflect_archive_list">
					<ul class="reflect_archive">
						<li>
							<a href="/all-news/?news_year=2021&amp;news_month=false&amp;news_day=false" title="2021">2021</a>
						</li>
					</ul>
				</div>
        	</div>
		</div>	
	</div>
		</div>
		
</div>										
</section>
@endsection
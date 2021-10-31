
@php

use App\Models\Product;
use App\Models\ProductCat;
            
// Product start=======================================
$productCatArray = ProductCat::all();
$productarray=[];
for($i=0;$i<count($productCatArray); $i++){
	$productArray = Product::where('pcat_id',$productCatArray[$i]['id'])->get();
	$productCatArray[$i]['productarray']=$productArray;
}
// Product End=========================================
            
@endphp

<section class="bg-cyan no-phone" style="background-color: #750465!important;">
	<div class="container">
		<div class="row">
			<div class="cell colspan12">														
					<ul class="m-menu">
						<li><a href="/">HOME</a></li>    
						<li>
							<a href="#" class="dropdown-toggle">ABOUT US</a>
							<div class="m-menu-container" data-role="dropdown">
								<div class="grid no-margin">
									<div class="row cells12">
										<div class="cell colspan3">
											<ul class="unstyled-list">
												<li>
													<div class="padding5">									
														<img src="assets/images/about-us.jpg">
													</div>
													<span class="fg-grayDark text-accent opacity">Let the Continuous Improvement work for you</span>
												</li>								
											</ul>
										</div>					
										<div class="cell colspan3">
											<ul class="unstyled-list">
											<li><span class="sub-alt-header fg-darkBlue"> About Us</span></li>
										<li><span class="mif-chevron-right fg-darkBlue"></span><a href="/bordOfDirector" class="mif-ani-hover-flash mif-ani-fast">Board of Directors</a></li>
										<li><span class="mif-chevron-right fg-darkBlue"></span><a href="/mission" class="mif-ani-hover-flash mif-ani-fast">Mission, Vision &amp; Values</a></li>
										<li><span class="mif-chevron-right fg-darkBlue"></span><a href="#" class="mif-ani-hover-flash mif-ani-fast">History</a></li>
										<li><a href="#" class="mif-ani-hover-flash mif-ani-fast"></a></li>
										<li><a href="#" class="mif-ani-hover-flash mif-ani-fast"></a></li>
											</ul>
										</div>
									</div>	
								</div>	
							</div>
						</li>
						<li>
						<a href="{{route('finance')}}">FINANCE</a>
					    </li>
						<li>
							<a href="#" class="dropdown-toggle">PRODUCT</a>
							<div class="m-menu-container" data-role="dropdown" data-no-close="true">
								<div class="grid no-margin" style="width: 115%;">
									<div class="row">
									     @foreach( $productCatArray as $pcat)
											<div class="cell colspan2">
												<ul class="unstyled-list col-sm-auto">
													<li><span class="sub-alt-header fg-darkBlue" value="{{$pcat->id}}"> {{$pcat->name}} </span></li>
													@foreach($pcat->productarray as $prod)
														<li>
															<span class="mif-chevron-right fg-darkBlue"></span>
															<a href="{{route('product.show',[$prod->id])}}"  value="{{$prod->id}}" class="mif-ani-hover-flash mif-ani-fast">{{$prod->name}}</a>
														</li>
															
									   				 @endforeach
												</ul>
											</div>
										@endforeach	
										
									</div>
								</div>
							</div>
						</li>	
						<li><a href="/report" >REPORT</a></li>	
						<li>
							<a href="#" class="dropdown-toggle">MEDIA</a>
							<div class="m-menu-container" data-role="dropdown" data-no-close="true">
								<div class="grid no-margin">
									<div class="row cells12">
										<div class="cell colspan3">
											<ul class="unstyled-list">
												<li>
													<div class="padding5">									
														<img src="assets/images/media.jpg">
													</div>	
													<span class="fg-grayDark text-accent opacity">Prolongs active Customer Focus</span>
												</li>
											</ul>
										</div>
										<div class="cell colspan2">
											<ul class="unstyled-list">
												<li><span class="sub-alt-header fg-darkBlue"> Media</span></li>
												<li><span class="mif-chevron-right fg-darkBlue"></span><a href="/news" class="mif-ani-hover-flash mif-ani-fast">News</a></li>
												<li><span class="mif-chevron-right fg-darkBlue"></span><a href="/imgGllary" class="mif-ani-hover-flash mif-ani-fast">Image Gallery</a></li>
												<li><span class="mif-chevron-right fg-darkBlue"></span><a href="/vGellary" class="mif-ani-hover-flash mif-ani-fast">Video Gallery</a></li>
												<li><a href="#" class="mif-ani-hover-flash mif-ani-fast"></a></li>
												<li><a href="#" class="mif-ani-hover-flash mif-ani-fast"></a></li>
											</ul>
										</div>
													
									</div>
								</div>
							</div>
						</li>
				</ul>												
			</div>
		</div>			
	</div>			
</section>
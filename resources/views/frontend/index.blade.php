@extends('index')
@section('content')
           <section>
              @include('components.carousel')
            </section>
		<!----------- END Carousel ----------------->	
        <!---------------- CONTENT START ------------->
            <section style="margin-top: 5%;">
            <!----------- Social START ----------------->	
                <div class="container">
                    <div class="row">
                        <div class="cell colspan9 padding20 main-text"  style="background-color:">
                            <div class="social-media padding20 no-padding-left no-padding-top no-padding-right sub-alt-header">
                                @include('components.social')
                            </div>
                            @include('components.overView')
                            <div class="sub-header"style="margin-top: 10%;">Products</div>
                            @include('components.product')
                        </div>
                        @include('components.businessContract')
                    </div>
                </div>
            <!----------- Social END  ----------------->	
            </section>
@endsection
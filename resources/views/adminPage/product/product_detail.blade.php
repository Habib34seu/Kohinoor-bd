@extends('index')
@section('content')
<section>
    <div class="container">
        <div class="row" style="margin-top: 2%;margin-bottom: 2%;">
            <div class="cell colspan6 padding20 no-padding-top no-padding-bottom">
                
                <h1 class="no-margin-top opacity">{{$product->name}}</h1>
                <p>
                {{$product->desc}}
                </p>
            </div>
            <div class="cell colspan6 mask zoom block-shadow" style="height: 360px;">
                <img src="{{asset('image/product/').'/'.$product->img}}"/>
            </div>
        </div>	
    </div>	
</section>
@endsection

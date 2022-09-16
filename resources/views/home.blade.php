@extends('layout.main')

@section('home-content')
<section id="series">
    <div class="container">
        <h1>CURRENT SERIES</h1>
        <div class="card-container"> 
            @foreach ($comics as $item)
            <div class="card">
                <img src="{{$item['thumb']}}" alt="">
                <h4>{{$item['series']}}</h4>
            </div>
            @endforeach
        </div>
        <h3>Load more</h3>
    </div>
</section>
<section id="merchandise">
    <div class="container">
        <div class="merchandise-card">
            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
            <h3>Digital comics</h3> 
        </div>
        <div class="merchandise-card">
            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
            <h3>Dc merchandise</h3>
        </div>
        <div class="merchandise-card">
            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
            <h3>subscription</h3>
        </div>
        <div class="merchandise-card">
            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
            <h3>comic shop locator</h3>
        </div>
        <div class="merchandise-card">
            <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
            <h3>dc power visa</h3>
        </div>
    </div>
</section>
@endsection
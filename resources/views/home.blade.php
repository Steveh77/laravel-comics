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
@endsection
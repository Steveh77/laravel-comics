@extends('layout.main')

@section('main-content')
    <section id="book-details">
        <div class="blue-bar2">
            <div class="book-image">
                <img src="{{ $book['thumb'] }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="description">
                <h3>{{ $book['title'] }}</h3>
                <div class="price">
                    <h4>U.S. Price: {{ $book['price'] }}</h4>
                </div>
                <p>{{ $book['description'] }}</p>
            </div>
            <div class="advertisement">
                <img src="{{ asset('images/madv.jpg') }}" alt="">
            </div>
        </div>
    </section>
@endsection

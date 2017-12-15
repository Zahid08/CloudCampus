@extends('frontend.master')
@section('title')
    Gallery
@endsection
@section('content')

    <div class="gallery">
        <div class="container">
            <h3 class="tittle">Gallery</h3>
            <div class="gallery-grids">

                @foreach($gallerys as $gallery)
                    <div class="gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                        <a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
                            <img class="img-responsive"  src="{{ asset($gallery->image_path) }}">
                            <div class="b-wrapper">
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
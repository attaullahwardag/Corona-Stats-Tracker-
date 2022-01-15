@extends('layouts.app')
@section('meta')
    <link rel="canonical" href="http://w3corona.com">
    <link rel="alternate" href="http://w3corona.com" hreflang="x-default">
    <link rel="alternate" href="http://w3corona.com" hreflang="en">
    <meta name="robots" content="index,follow">
    <meta name="description" content="{{ $post_details->title }}">
    <meta name="keywords" content="{{ $post_details->keywords }}">
    <meta name="author" content="Attaullah Wardag">
    <meta name="language" content="en">
    <meta name="lang" content="en"> 
    <meta name="thumbnail" content="{{URL::asset('images/'.$post_details->picture.'')}}">
    <meta property="og:title" content="{{ $post_details->title }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{URL::asset('images/'.$post_details->picture.'')}}">
    <meta property="og:url" content="http://w3corona.com/">
    <meta property="og:description" content="{{ $post_details->title }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $post_details->title }}">
    <meta name="twitter:description" content="{{ $post_details->title }}">
    <meta name="twitter:creator" content="@AttaullahKhanWr">
    <meta name="twitter:image:src" content="{{URL::asset('images/'.$post_details->picture.'')}}">
    <meta name="twitter:domain" content="http://w3corona.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
@endsection
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 ">
        <div class="card mb-3">
            <img src="../storage/images/{{ $post_details->picture }}" class="card-img-top" alt="...">
            <div class="card-body blogfont">
              <h1 class="card-title h1sm"> {{ $post_details->title }} </h1>
              <p class="card-text">{!! $post_details->content !!} </p>
              <p class="card-text"><small class="text-muted"> Posted At: {{ $post_details->updated_at }}</small></p>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <h1 class="h1sm">Latest Posts </h1>
        @foreach ( $lposts as $lpost )
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="../storage/images/{{ $lpost->picture }}" class="rimg" alt="{{ $lpost->picture }}">
              </div>
              <div class="col-md-8">
                <a href="/details/{{ $lpost->slug }}">
                <div class="card-body">
                  <p class="card-text"> {{ $lpost->title }} </p>
                </div>
                </a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection 
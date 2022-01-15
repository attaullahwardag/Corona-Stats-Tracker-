@extends('layouts.app')
@section('meta')
    <link rel="canonical" href="http://w3corona.com">
    <link rel="alternate" href="http://w3corona.com" hreflang="x-default">
    <link rel="alternate" href="http://w3corona.com" hreflang="en">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Corona Virus live Statistic Tracker - Stay on this website to stay updated from Covid-19 corona virus 2019-2020.">
    <meta name="keywords" content="Corona, Covid19, CoronaVirus, Covid-19, Deaths, Death, Recovered, new cases, today deaths, Live Tracker, Live Statistics">
    <meta name="author" content="Attaullah Wardag">
    <meta name="language" content="en">
    <meta name="lang" content="en"> 
    <meta name="thumbnail" content="{{URL::asset('images/homethumb.png')}}">
    <meta property="og:title" content="Corona Virus Live Statistics world wide,Updates of new cases, deaths and recoveries">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{URL::asset('images/homethumb.png')}}">
    <meta property="og:url" content="http://w3corona.com/">
    <meta property="og:description" content="Corona Virus Live Statistics Tracker - Stay on this website and see it update live! - country wise cases report">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="w3corona">
    <meta name="twitter:description" content="Corona Virus Live Statiscis Tracker - Stay on this website and see it update live!">
    <meta name="twitter:creator" content="@AttaullahKhanWr">
    <meta name="twitter:image:src" content="{{URL::asset('images/homethumb.png')}}">
    <meta name="twitter:domain" content="http://w3corona.com/">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
        <h1 class="h1sm"> World-wide Covid-19 Corona Virus Cases Statistics Report </h1>
        </div>
        <div class="col-lg-8 content">
            <world-summery/>
        </div>
        <div class="col-lg-4 content">
            <div class="statsinner">
                <pie-chartw/>
            </div>
        </div>
    </div>
    <div class="row margin-top">
        <div class="col-lg-4 "> 
            <country-component/>
        </div>
        <div class="col-lg-8 ">
         <div id="try" class="">
            @foreach ($post as $p)
            <div class="Blog">
                <div class="blog-image-box">
                    <img src="storage/images/{{ $p->picture}}" class="blog-image" />
                </div>
                <div class="blog-content blogfont">
                    <h3 class="blog-title"><a href="/details/{{ $p->slug }}" > {{ $p->title }} </a></h3>
                    <p class="blog-content">
                    {!! substr($p->content, 0,  400)  !!} ....
                    </p>
                     <a href="/details/{{ $p->slug }}" class="btn btn-success read" > Read more ....</a>
                </div>
            </div>
            @endforeach
         </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('meta')
    <meta name="robots" content="index,follow">
    <meta name="description" content="{{ $country }}'s Corona Virus live Statistic. Covid-19 Full report of deaths, recovries and new cases of {{ $country }}">
    <meta name="keywords" content="Corona, Covid19, CoronaVirus, Covid-19, Deaths, Death, Recovered, new cases, today deaths, Live Tracker, Live Statistics">
    <meta name="author" content="Attaullah Wardag">
    <meta name="language" content="en">
    <meta name="lang" content="en"> 
    <meta name="thumbnail" content="{{URL::asset('images/homethumb.png')}}">
    <meta property="og:title" content="{{ $country }}'s Corona Virus Live Statistics world wide,Updates of new cases, deaths and recoveries. {{ $country }}'s covid-19 report">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{URL::asset('images/homethumb.png')}}">
    <meta property="og:url" content="http://w3corona.com/">
    <meta property="og:description" content="{{ $country }}'s Corona Virus Live Statistics Tracker - Stay on this website and see it update live! {{ $country }}'s covid-19 report">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="w3corona">
    <meta name="twitter:description" content=" {{ $country }}'s Corona Virus Live Statiscis Tracker - Stay on this website and see it update live! {{ $country }}'s covid-19 report">
    <meta name="twitter:creator" content="@AttaullahKhanWr">
    <meta name="twitter:image:src" content="{{URL::asset('images/homethumb.png')}}">
    <meta name="twitter:domain" content="http://w3corona.com/">
@endsection
@section('content')
    <single-country/> 
@endsection
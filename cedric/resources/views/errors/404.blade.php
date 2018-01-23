{{-- extend the parent tpl --}}
@extends('layout.master')

@section('title')
Home | Cedric Vleminckx
@endsection

@section('css')
<link rel="stylesheet" href="css/home.css">
@endsection

@section('navbar')
<li><a class="active" href="{{url('/Home')}}">Home</a></li>
<li><a href="{{url('/About')}}">About</a></li>
<li><a href="{{url('/Contact')}}">Contact</a></li>
<li><a target="_blank" href="{{asset('/images/cv.pdf')}}">My CV</a></li>
@endsection

@section('content')

<div class="slogan">
  <p id="name">Epic fail: error 404</p>
  <p class="title">This page is not found: check the url</p>
</div>

@endsection

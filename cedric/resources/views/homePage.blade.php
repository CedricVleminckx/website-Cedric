{{-- extend the parent tpl --}}
@extends('layout.master')

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
  <p id="name">Cedric Vleminckx</p>
  <p class="title">Web developer</p>
</div>

@endsection

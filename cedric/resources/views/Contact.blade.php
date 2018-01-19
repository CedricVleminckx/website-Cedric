{{-- extend the parent tpl --}}
@extends('layout.master')

@section('css')
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/shared.css">
@endsection

@section('navbar')
<li><a href="{{url('/Home')}}">Home</a></li>
<li><a href="{{url('/About')}}">About</a></li>
<li><a class="active" href="{{url('/Contact')}}">Contact</a></li>
<li><a target="_blank" href="{{asset('/images/cv.pdf')}}">My CV</a></li>
@endsection

@section('content')

<div class="content">
  <p class="title">Feel free to contact me</p>
  <img src="{{asset('/images/contact.jpg')}}" alt="">
  <div class="contact">
    {!! Form::open(['url' => '/sendmail']) !!}
      {!! Form::token() !!}
      {!! Form::text('Name', null, array('placeholder' => 'Name')) !!}
      {!! Form::email('Email', null, array('placeholder' => 'Email')) !!}
      {!! Form::textarea('Question', null, array('placeholder' => 'Your question here')) !!}
      {!! Form::submit('Send message', array('class' => 'submit')) !!}
    {!! Form::close() !!}
  </div>
</div>

<footer>
  <div class="copy">
    <p>&copy;Cedric Vleminckx 2018</p>
  </div>
</footer>

@endsection

{{-- extend the parent tpl --}}
@extends('layout.master')

@section('title')
Contact | Cedric Vleminckx
@endsection

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
<h2 class="hidden">Contact me</h2>
<div class="content">
  <p hidden class="notification">Email succesfully sent!</p>
  <h3 class="title">Feel free to contact me</h3>
  <div class="contactPara">
    <img src="{{asset('/images/typ.jpg')}}" alt="">
    <div class="contact">
      {!! Form::open(['url' => '/sendmail']) !!}
        {!! Form::token() !!}

        @if($errors->has('Name'))
        <p class='error'>Please fill in your name</p>
        @endif
        {!! Form::text('Name', null, array('placeholder' => 'Name')) !!}

        @if($errors->has('Email'))
        <p class='error'>Please fill in your email</p>
        @endif
        {!! Form::email('Email', null, array('placeholder' => 'Email')) !!}

        @if($errors->has('Question'))
        <p class='error'>I can&apos;t help you without a question</p>
        @endif
        {!! Form::textarea('Question', null, array('placeholder' => 'Your question here')) !!}

        {!! Form::submit('Send message', array('class' => 'submit')) !!}
      {!! Form::close() !!}
    </div>
  </div>
</div>

@if (session('status'))
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/notification.js') }}"></script>
@endif
@endsection

@section('footer')
<footer>
  <div class="copy">
    <p>&copy;Cedric Vleminckx 2018</p>
  </div>
</footer>
@endsection

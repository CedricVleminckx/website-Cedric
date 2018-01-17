{{-- extend the parent tpl --}}
@extends('layout.master')

@section('css')
<link rel="stylesheet" href="css/about.css">
@endsection

@section('navbar')
<li><a href="{{url('/Home')}}">Home</a></li>
<li><a class="active" href="{{url('/About')}}">About</a></li>
<li><a href="#">Contact</a></li>
@endsection

@section('content')

<div class="content">
  <div class="paragraph1">
    <img id="profilePic" src="{{asset('images/cedric.png')}}" alt="">
    <p class="hidden">s</p>
    <p class="title">Who am I?</p>
    <p>I am a Cedric Vleminckx. I am 20 years old and student at the technologiecampus Gent. I am  adeveloper with a heart for backend applications.</p>
  </div>
  <div class="paragraph2">
    <p class="title">What are my skills?</p>
    <div class="skills">
      <div class="web">
        <p>Web</p>
        <ul>
          <li>HTML &amp; CSS</li>
          <li>PHP &amp; laravel</li>
          <li>Javascrip &amp; jquery</li>
        </ul>
      </div>
      <div class="progLang">
        <p>Languages</p>
        <ul>
          <li>C#</li>
          <li>Java</li>
          <li>SQL</li>
        </ul>
      </div>
      <div class="infra">
        <p>Infrastructure</p>
        <ul>
          <li>Cisco CCNA 1 &amp; 2</li>
          <li>Linux and UNIX client and server</li>
        </ul>
      </div>
      <div class="office">
        <p>Other skills</p>
        <ul>
          <li>Microsoft Office 365</li>
          <li>Atom (Text editor)</li>
          <li>GIT</li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection

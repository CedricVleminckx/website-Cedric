{{-- extend the parent tpl --}}
@extends('layout.master')

@section('css')
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="css/shared.css">
@endsection

@section('navbar')
<li><a href="{{url('/Home')}}">Home</a></li>
<li><a class="active" href="{{url('/About')}}">About</a></li>
<li><a href="{{url('/Contact')}}">Contact</a></li>
<li><a target="_blank" href="{{asset('/images/cv.pdf')}}">My CV</a></li>
@endsection

@section('content')

<div class="content">
  <div class="whoAmI">
    <img id="profilePic" src="{{asset('images/cedric.png')}}" alt="">
    <p class="title">Who am I?</p>
    <p>I am Cedric Vleminckx. I&apos;m 20 years old and student at the campus of technology Gent. I&apos;m an enthusiastic developer with a heart for backend applications.</p>
  </div>
  <div class="skillsPara">
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
          <li>C&#35;</li>
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
  <div class="hobby">
    <p class="title">Do I have hobbies?</p>
    <p>Yes! I do have hobbies. I practise jiu&#45;jitsu at my local sports hall. In the winter I love to go snowboarding and enjoy the beautiful view of the mountains. In the summer I ride my longboard and I go sailing sometimes.</p>
    <img src="{{asset('/images/snowboard.jpg')}}" alt="view of mountains">
    <img src="{{asset('/images/kroatie.jpg')}}" alt="view over water">
  </div>
</div>

<footer>
  <div class="copy">
    <p>&copy;Cedric Vleminckx 2017</p>
  </div>
</footer>

@endsection

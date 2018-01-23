{{-- extend the parent tpl --}}
@extends('layout.master')

@section('title')
About | Cedric Vleminckx
@endsection

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
<h2 class="hidden">About me</h2>
<div class="content">
  <div class="whoAmI">
    <img id="profilePic" src="{{asset('images/cedric3.png')}}" alt="">
    <h3 class="title">Who am I?</h3>
    <p>I am Cedric Vleminckx. I&apos;m 20 years old and student at the campus of technology Gent. I&apos;m an enthusiastic developer with a heart for backend applications.</p>
  </div>
  <div class="skillsPara">
    <h3 class="title">What are my skills?</h3>
    <div class="skills">
      <div class="web">
        <p class="subTitle">Web</p>
        <ul>
          <li>HTML &amp; CSS</li>
          <li>PHP &amp; laravel</li>
          <li>Javascript &amp; jquery</li>
        </ul>
      </div>
      <div class="progLang">
        <p class="subTitle">Languages</p>
        <ul>
          <li>C&#35;</li>
          <li>Java</li>
          <li>SQL</li>
        </ul>
      </div>
      <div class="infra">
        <p class="subTitle">Infrastructure</p>
        <ul>
          <li>Cisco CCNA 1&amp;2</li>
          <li>Linux and UNIX client and server</li>
        </ul>
      </div>
      <div class="office">
        <p class="subTitle">Other skills</p>
        <ul>
          <li>Microsoft Office 365</li>
          <li>Atom (Text editor)</li>
          <li>GIT</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="softSkillsPara">
    <h3 class="title">I also have soft skills</h3>
    <div class="softSkillsLeft">
      <div class="social">
          <p class="subTitle">Social &amp; teamplayer</p>
          <p>I was a committee member of the student organization Moeder KILA. Beside the daily operations, I was responible for logistics.</p>
      </div>
      <div class="perseverance collum2">
        <p class="subTitle">Perseverance</p>
        <p>When I set or get a goal, I will work until I get the job done.</p>
      </div>
    </div>
    <div class="softSkillsRight">
      <div class="inquisitiveness">
        <p class="subTitle">Inquisitiveness</p>
        <p>In my spare time I love the search the web for interresting science experiments.</p>
      </div>
      <div class="stressManagement collum2">
        <p class="subTitle">Stress management</p>
        <p>Even under a lot of pressure I keep performing at my best.</p>
      </div>
    </div>
  </div>
  <div class="hobbyPara">
    <h3 class="title">Do I have hobbies?</h3>
    <p>Yes! I do have hobbies. I practise jiu&#45;jitsu at my local sports hall. In the winter I love to go snowboarding and enjoy the beautiful view of the mountains. In the summer I ride my longboard and I go sailing sometimes.</p>
    <img src="{{asset('/images/snowboard.jpg')}}" alt="view of mountains">
    <img src="{{asset('/images/longboard.jpg')}}" alt="view over water">
  </div>
</div>

<footer>
  <div class="copy">
    <p>&copy;Cedric Vleminckx 2018</p>
  </div>
</footer>

@endsection

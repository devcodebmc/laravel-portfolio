@extends('layouts.main')

@section('content')


  <section class="section intro">
      <h1 class="section-heading gft-font">
          Bryan 
      </h1>
      <br>
      <p class="text-center text-large">💻 First of all thanks for visiting my personal website.</p>
      <div class="bar bar-sm">
        <div class="bar-item" role="progressbar" style="width:100%;" aria-valuemax="100"></div>
      </div>
      <br>
      <h2 class="text-center">📌Hey there, I'm Brayan ICT Engineer and Web Developer.</h2>
      <br>
      <p class="text-center text-large">
        🤝 I enjoy sharing my knowledge and helping others when possible.
      </p>
      <br>
      <div class="">
        <a href="#" class="fill br-btn"> 
          Resume 
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="slide br-btn">
            <div>Github</div>
            <i class="icon icon-arrow-right"></i>
        </a>
      </div> 
  </section>

    @include('components.cardProjects')

    @include('components.timeline')

    @include('components.skills')

    

@endsection

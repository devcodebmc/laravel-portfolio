@extends('layouts.main')

@section('content')
  <section class="hero-section">
    <div class="hero-content">
      <h1 class="hero-title gft-font">
        Brayan Manzano
      </h1>
      
      <div class="hero-divider">
        <div class="divider-line" aria-hidden="true"></div>
      </div>
      
       <h5 class="hero-subtitle gft-font">
        Web Developer
      </h5>
      
      <p class="hero-description">
        Thank you for visiting my personal website.
        I enjoy sharing knowledge and helping others.
      </p>

      <div class="hero-actions">
        <a href="#" class="fill br-btn"> 
          Resume 
        </a>
        <a href="https://github.com/devcodebmc" target="_blank" rel="noopener noreferrer" class="slide br-btn">
          <div>Github</div>
          <i class="icon icon-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  @include('components.cardProjects')
  @include('components.timeline')
  @include('components.skills')

@endsection

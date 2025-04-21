@extends('layouts.main')

@section('content')
  <section class="hero-section">
    <div class="hero-content">
      <h1 class="hero-title gft-font">
        bryan
      </h1>
      
      <div class="hero-divider">
        <div class="divider-line" aria-hidden="true"></div>
      </div>
      
      <p class="hero-subtitle">
        <span class="emoji">💻</span> First of all, thank you for visiting my personal website.
      </p>
      
      <div class="progress-indicator">
        <div class="progress-bar" role="progressbar" style="width:100%;" aria-valuemax="100"></div>
      </div>
      
      <h2 class="hero-heading">
        <span class="emoji">📌</span> Hey there, I'm Bryan — ICT Engineer and Web Developer.
      </h2>
      
      <p class="hero-description">
        <span class="emoji">🤝</span> I enjoy sharing my knowledge and helping others when possible.
      </p>
      
      <div class="hero-actions">
        <a href="#" class="fill br-btn gft-font"> 
          resume 
        </a>
        <a href="https://github.com/devcodebmc" target="_blank" rel="noopener noreferrer" class="slide br-btn gft-font" style="letter-spacing: 4px;">
          <div>gIThub</div>
          <i class="icon icon-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  @include('components.cardProjects')
  @include('components.timeline')
  @include('components.skills')

@endsection

<div class=" bg-secondary" style="padding-top: 2rem;">
    @include('layouts.partials.header', ['sectionName' => 'My Social', 'placeContent' => 'center',  'size' => 'clamp(2rem, 3vw, 3.5rem)'])
</div>
  
<section class="social-section bg-gray" id="foo">
  <div class="social-container">
      <div class="tip">Links</div>
      <div class="share-window">
          <div class="share-bar">
              <div class="trigger">
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-instagram'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="https://github.com/devcodebmc" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-github'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="https://codepen.io/bryandevcode" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-codepen'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-facebook'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-instagram'></i>
                </a>
              </div>
              <div class="trigger">
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <i class='bx bxl-behance'></i>
                </a>
              </div>
          </div>
      </div>
      <div class="like">
          <div class="trigger like-btn">
            <a href="#">
              <i class='bx bxs-heart-circle'></i>
              Like <span id="counter">{{ App\Models\LikeCount::getCount() }}</span>
            </a>
          </div>
      </div>
  </div>
  <div class="footer-note">
      @include('layouts.partials.mailField')
      <p class="copyleft">Developed with 
        <i class='bx bx-heart-circle'></i> 
        <small class="gft-font">Bryan</small> 
         © 2025 - All rights reserved
      </p> 
  </div>
  @include('layouts.partials.floatMail')
</section>


@push('js')
<script>

  const likeButton = document.querySelector('.like');
  const likeCount = document.getElementById('counter');
  const heartIcon = document.querySelector('.bxs-heart-circle');

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  likeButton.addEventListener('click', (e) => {

    e.preventDefault();

    heartIcon.classList.add('like-heart');

    fetch('{{route('like')}}', { 
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      }
    })
      .then(response => response.json())
      .then(data => likeCount.textContent = data.count);

    setTimeout(() => {
      heartIcon.classList.remove('like-heart');
    }, 500)

  });

</script>
@endpush

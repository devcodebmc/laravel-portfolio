<div class="bg-gray" style="padding-top: 4rem;">
  @include('layouts.partials.header', ['sectionName' => 'Experiences', 'placeContent' => 'center',  'size' => 'clamp(2rem, 3vw, 3.5rem)'])
</div>

<section class="section bg-gray">
    <div class="section-container p-centered">
        <div class="docs-demo columns ">
            <div class="column col-8 col-sm-12">
              <br>
              <div class="timeline">
                <div class="timeline-item" id="Aiko">
                  <div class="timeline-left"><a class="timeline-icon icon-lg tooltip" href="#Aiko" data-tooltip="2022 - 2023"><i class="icon icon-check"></i></a></div>
                  <div class="timeline-content">
                    <div class="tile">
                      <div class="tile-content">
                        <p class="tile-subtitle">September 2024 - Present</p>
                        <p class="tile-title">
                          <span class="label">Software Developer</span>
                        </p>
                        <p class="tile-title">
                          <a href="https://aiko.com.mx/" target="_blank" rel="noopener noreferrer">
                            Aiko solutions
                          </a>: 
                          Multi platform application development and maintenance
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tile-action">
                    <a class="btn" href="https://aiko.com.mx/" target="_blank" rel="noopener noreferrer">
                      View
                    </a>
                  </div>
                </div>
                <div class="timeline-item" id="Bisturi-News">
                  <div class="timeline-left"><a class="timeline-icon icon-lg tooltip" href="#Bisturi-News" data-tooltip="2021 - 2024"><i class="icon icon-check"></i></a></div>
                  <div class="timeline-content">
                    <div class="tile">
                      <div class="tile-content">
                        <p class="tile-subtitle">July 2021 - August 2024</p>
                        <p class="tile-title">
                          <span class="label">Web Developer & Community Manager</span>
                        </p>
                        <p class="tile-title">
                          <a href="https://bisturinoticias.online/" target="_blank" rel="noopener noreferrer">Bisturí Noticias</a>: 
                          Website development for Bisturi News
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tile-action">
                    <a class="btn" href="https://bisturinoticias.online/" target="_blank" rel="noopener noreferrer">
                      View
                    </a>
                  </div>
                </div>
                <div class="timeline-item" id="P51">
                  <div class="timeline-left"><a class="timeline-icon icon-lg tooltip" href="#P51" data-tooltip="2021 - 2022"><i class="icon icon-check"></i></a></div>
                  <div class="timeline-content">
                    <div class="tile">
                      <div class="tile-content">
                        <p class="tile-subtitle">Jane 2020 - June 2021</p>
                        <p class="tile-title">
                          <span class="label">Web Developer</span>
                        </p>
                        <p class="tile-title">
                          <a href="https://www.p51.mx/index.html" target="_blank" rel="noopener noreferrer">P51</a>: 
                          Websites building and maintenance
                        </p>
                      </div>
                      <div class="tile-action">
                        <a class="btn" href="https://www.p51.mx/index.html" target="_blank" rel="noopener noreferrer">
                          View
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="timeline-item" id="health-clinic">
                  <div class="timeline-left"><a class="timeline-icon icon-lg tooltip" href="#health-clinic" data-tooltip="2020 - 2021"><i class="icon icon-check"></i></a></div>
                  <div class="timeline-content">
                    <div class="tile">
                      <div class="tile-content">
                        <p class="tile-subtitle">January 2020 - May 2020</p>
                        <p class="tile-title">
                          <span class="label">Web Developer</span>
                        </p>
                        <p class="tile-title">
                          <a href="javascript:void(0)">Xonacatlán health clinic</a>: 
                          QR attendance system development and deployment
                        </p>
                      </div>
                      <div class="tile-action">
                        <a class="btn" href="javascript:void(0)">
                          View
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column col-4 col-sm-12">
              <br>
              @include('components.education')
            </div>
        </div>
    </div>
</section>

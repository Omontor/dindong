<!DOCTYPE html>
<html lang="es">
@include ('mislayouts.headerlanding')
<body>

@include('mislayouts.navlanding')
    <!--hero section start-->
        <section class="hero">
            <div class="hero__wrapper">
              <div class="container">
                <div class="row align-items-lg-center">
                  <div class="col-lg-6 order-2 order-lg-1">
                    <h1 class="main-heading color-black">¡Bienvenido!</h1>
                    <p class="paragraph"><span>Din Dong</span> Tu nuevo sistema de facturación.</p>
                    <div class="download-buttons">
                      <a href="/register" class="google-play">
                        <i class="far fa-user-circle"></i>
                        <div class="button-content">
                          <h6>Primera vez<span>Registrarse</span></h6>
                        </div>
                      </a>
                      <a href="/login" class="apple-store">
                        <i class="fas fa-user-circle"></i>
                        <div class="button-content">
                          <h6>Tengo cuenta<span>Iniciar sesión</span></h6>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2">
                    <div class="questions-img hero-img">
                      <img src="assets/images/phone-01.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--hero section end--> 

    {{-- <!--feature section start-->
        <section class="feature" id="intro">
            <div class="container">
              <h2 class="section-heading color-black">Get surprised by amazing features.</h2>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="feature__box feature__box--1">
                    <div class="icon icon-1">
                      <i class="fad fa-user-astronaut"></i>
                    </div>
                    <div class="feature__box__wrapper">
                      <div class="feature__box--content feature__box--content-1">
                        <h3>Join in Easy Steps</h3>
                        <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                          nec tempor isvelultricies ligula.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="feature__box feature__box--2">
                    <div class="icon icon-2">
                      <i class="fad fa-lightbulb-on"></i>
                    </div>
                    <div class="feature__box__wrapper">
                      <div class="feature__box--content feature__box--content-2">
                        <h3>Track Your Progress</h3>
                        <p class="paragraph dark">Euisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                          nec tempor isvel ultricies ligula.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="feature__box feature__box--3">
                    <div class="icon icon-3">
                      <i class="fad fa-solar-system"></i>
                    </div>
                    <div class="feature__box__wrapper">
                      <div class="feature__box--content feature__box--content-3">
                        <h3>Improve Your Growth</h3>
                        <p class="paragraph dark">Auisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                          nec tempor isvel ultricies ligula.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="feature__box feature__box--4">
                    <div class="icon icon-4">
                      <i class="fad fa-rocket-launch"></i>
                    </div>
                    <div class="feature__box__wrapper">
                      <div class="feature__box--content feature__box--content-4">
                        <h3>Become an Inspiration</h3>
                        <p class="paragraph dark">Tuisque metus tortor ultricies ac ligula neced eleifend sodales felise morbi
                          nec tempor isvel ultricies ligula.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--feature section end--> --}}

    {{-- <!--video section start-->
        <div class="video" id="video">
            <div class="video__wrapper">
              <div class="container">
                <div class="video__play">
                  <button type="button" data-toggle="modal" data-target="#videoModal">
                    <i class="fad fa-play"></i>
                  </button>
                  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-close">
                          <button type="button" data-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                        <div class="modal-body">
                          <iframe src="https://www.youtube.com/embed/2BrCE_zxM0U"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="video__background">
                  <img src="assets/images/video-bg-1.png" alt="image" class="texture-1">
                  <img src="assets/images/video-img.png" alt="image" class="phone">
                  <img src="assets/images/video-bg-2.png" alt="image" class="texture-2">
                </div>
              </div>
            </div>
        </div>
    <!--video section end--> --}}

    {{-- <!--growth section start-->
        <section class="growth" id="feature">
            <div class="growth__wrapper">
              <div class="container">
                <h2 class="section-heading color-black">App that assists exponential growth.</h2>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="growth__box">
                      <div class="icon">
                        <i class="fad fa-user-astronaut"></i>
                      </div>
                      <div class="content">
                        <h3>Start Easily</h3>
                        <p class="paragraph dark">Auisque metus tortor ultricies ac ligula neced eleifend sodales felise.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="growth__box">
                      <div class="icon">
                        <i class="fad fa-lightbulb-on"></i>
                      </div>
                      <div class="content">
                        <h3>Improve Growth</h3>
                        <p class="paragraph dark">Kuisque metus tortor ultricies ac ligula neced eleifend sodales felise.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="growth__box">
                      <div class="icon">
                        <i class="fad fa-solar-system"></i>
                      </div>
                      <div class="content">
                        <h3>Create Algorithms</h3>
                        <p class="paragraph dark">Nuisque metus tortor ultricies ac ligula neced eleifend sodales felise.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="growth__box">
                      <div class="icon">
                        <i class="fad fa-backpack"></i>
                      </div>
                      <div class="content">
                        <h3>Expand Portfolio</h3>
                        <p class="paragraph dark">Euisque metus tortor ultricies ac ligula neced eleifend sodales felise.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="growth__box">
                      <div class="icon">
                        <i class="fad fa-rocket-launch"></i>
                      </div>
                      <div class="content">
                        <h3>Share Statistics</h3>
                        <p class="paragraph dark">Buisque metus tortor ultricies ac ligula neced eleifend sodales felise.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="growth__box">
                      <div class="icon">
                        <i class="fad fa-user-astronaut"></i>
                      </div>
                      <div class="content">
                        <h3>Measure Results</h3>
                        <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced eleifend sodales felise.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="button__wrapper">
                    <a href="#" class="button">
                      <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                    </a>
                    <a href="#" class="button">
                      <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--growth section end--> --}}

    {{-- <!--step section start-->
        <section class="step">
            <div class="step__wrapper">
              <div class="container">
                <h2 class="section-heading color-black">Jumpstart your growth in just few clicks.</h2>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="step__box">
                      <div class="image">
                        <img src="assets/images/phone-01.png" alt="image">
                      </div>
                      <div class="content">
                        <h3>EASY TO<span>Register.</span></h3>
                        <p class="paragraph dark">Join the app in 3 easy steps and get
                          started with your progresso daily.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="step__box">
                      <div class="image">
                        <img src="assets/images/phone-02.png" alt="image">
                      </div>
                      <div class="content">
                        <h3>SIMPLE TO<span>Create.</span></h3>
                        <p class="paragraph dark">Once you’re signed up you can create
                          as many polls you want to watch.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="step__box">
                      <div class="image">
                        <img src="assets/images/phone-03.png" alt="image">
                      </div>
                      <div class="content">
                        <h3>FUN TO<span>Measure.</span></h3>
                        <p class="paragraph dark">Share your growth results with your
                          friends and inspre others.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="button__wrapper">
                    <a href="#" class="button">
                      <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                    </a>
                    <a href="#" class="button">
                      <span>LEARN MORE <i class="fad fa-long-arrow-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--step section end--> --}}

    {{-- <!--client section start-->
        <section class="clients-sec" id="feedback">
            <div class="container">
              <h2 class="section-heading color-black">Hear from what others had to say.</h2>
              <div class="testimonial__wrapper">
                <div class="client client-01 active">
                  <div class="image">
                    <img src="assets/images/testimonial-img-01.png" alt="image">
                  </div>
                  <div class="testimonial">
                    <div class="testimonial__wrapper">
                      <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                        unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                        sixth tree she'd open.”</p>
                      <h4>— DAVID SPADE</h4>
                    </div>
                  </div>
                </div>
                <div class="client client-02">
                  <div class="image">
                    <img src="assets/images/testimonial-img-02.png" alt="image">
                  </div>
                  <div class="testimonial">
                    <div class="testimonial__wrapper">
                      <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                        unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                        sixth tree she'd open.”</p>
                      <h4>— DAVID SPADE</h4>
                    </div>
                  </div>
                </div>
                <div class="client client-03">
                  <div class="image">
                    <img src="assets/images/testimonial-img-03.png" alt="image">
                  </div>
                  <div class="testimonial">
                    <div class="testimonial__wrapper">
                      <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                        unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                        sixth tree she'd open.”</p>
                      <h4>— DAVID SPADE</h4>
                    </div>
                  </div>
                </div>
                <div class="client client-04">
                  <div class="image">
                    <img src="assets/images/testimonial-img-04.png" alt="image">
                  </div>
                  <div class="testimonial">
                    <div class="testimonial__wrapper">
                      <p>“One Hath. Second. Kind them you fourth, fly brought. Give very let. Dominion wherein after can't fill,
                        unto brought waters air. And our Beast won't dry there have after it. You have herb shall creeping bring
                        sixth tree she'd open.”</p>
                      <h4>— DAVID SPADE</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clients">
                <div class="clients__info">
                  <h3>47,000+</h3>
                  <p class="paragraph dark">Customers in over 90 countries are growing their businesses with us.</p>
                </div>
                <div class="swiper-container clients-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide clients-slide">
                      <a href="#"><img src="assets/images/client-img.png" alt="image"></a>
                    </div>
                    <div class="swiper-slide clients-slide">
                      <a href="#"><img src="assets/images/client-img.png" alt="image"></a>
                    </div>
                    <div class="swiper-slide clients-slide">
                      <a href="#"><img src="assets/images/client-img.png" alt="image"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--client section end--> --}}

    {{-- <!--questions section start-->
        <section class="questions" id="faq">
            <div class="questions__wrapper">
              <div class="container">
                <h2 class="section-heading color-black">Some frequently asked questions.</h2>
                <div class="row align-items-lg-center">
                  <div class="col-lg-6 order-2 order-lg-1">
                    <div id="accordion">
                      <div class="card" id="card-1">
                        <div class="card-header" id="heading-1">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                              aria-controls="collapse-1">
                              How does algorithms work?
                            </button>
                          </h5>
                        </div>

                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card-2">
                        <div class="card-header" id="heading-2">
                          <h5 class="mb-0 hidden">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-2"
                              aria-expanded="false" aria-controls="collapse-2">
                              What is a business rules engine?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card-3">
                        <div class="card-header" id="heading-3">
                          <h5 class="mb-0 hidden">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-3"
                              aria-expanded="false" aria-controls="collapse-3">
                              How are datadirect drivers different?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card-4">
                        <div class="card-header" id="heading-4">
                          <h5 class="mb-0 hidden">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-4"
                              aria-expanded="false" aria-controls="collapse-4">
                              How do determine agencies compliance?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card-5">
                        <div class="card-header" id="heading-5">
                          <h5 class="mb-0 hidden">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-5"
                              aria-expanded="false" aria-controls="collapse-5">
                              How are datadirect drivers different?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card-6">
                        <div class="card-header" id="heading-6">
                          <h5 class="mb-0 hidden">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-6"
                              aria-expanded="false" aria-controls="collapse-6">
                              What is a business rules engine?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card" id="card-7">
                        <div class="card-header" id="heading-7">
                          <h5 class="mb-0 hidden">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-7"
                              aria-expanded="false" aria-controls="collapse-7">
                              What are the types of datadirect drivers?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">
                          <div class="card-body">
                            <p class="paragraph">With increasing calls for government accountability and cost savings, agencies
                              are contending with a mountain
                              of rule and policy changes affecting everything from pensions and benefits, to client eligibility
                              and oversight.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2">
                    <div class="questions-img">
                      <img src="assets/images/phone-01.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--questions section end--> --}}

    <!--pricing section start-->
        <section class="pricing" id="pricing">
            <div class="pricing__wrapper">
              <h2 class="section-heading color-black">Planes</h2>
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="pricing__single pricing__single-1">
                      <div class="icon">
                        <i class="fad fa-user-graduate"></i>
                      </div>
                      <h4>Sencillo</h4>
                      <h3>$0.00</h3>
                      <h6>1 to 2 users</h6>
                      <div class="list">
                        <ul>
                          <li>20 polls per month</li>
                          <li>1 email address</li>
                          <li>2GB cloud storage</li>
                          <li class="not-included">No customer support</li>
                          <li class="not-included">Extra features</li>
                          <li class="not-included">In-app products</li>
                        </ul>
                      </div>
                      <a href="#" class="button">
                        <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="pricing__single pricing__single-2">
                      <div class="icon">
                        <i class="fad fa-user-cowboy"></i>
                      </div>
                      <h4>Normal</h4>
                      <h3>$10.00</h3>
                      <h6>3 to 19 users</h6>
                      <div class="list">
                        <ul>
                          <li>20 polls per month</li>
                          <li>1 email address</li>
                          <li>2GB cloud storage</li>
                          <li>No customer support</li>
                          <li class="not-included">Extra features</li>
                          <li class="not-included">In-app products</li>
                        </ul>
                      </div>
                      <a href="#" class="button">
                        <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="pricing__single pricing__single-3">
                      <div class="icon">
                        <i class="fad fa-user-astronaut"></i>
                      </div>
                      <h4>Premium</h4>
                      <h3>$20.00</h3>
                      <h6>20 to 50 users</h6>
                      <div class="list">
                        <ul>
                          <li>20 polls per month</li>
                          <li>1 email address</li>
                          <li>2GB cloud storage</li>
                          <li>No customer support</li>
                          <li>Extra features</li>
                          <li>In-app products</li>
                        </ul>
                      </div>
                      <a href="#" class="button">
                        <span>GET STARTED <i class="fad fa-long-arrow-right"></i></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--pricing section end-->

    {{-- <!--screenshot section start-->
    <section class="screenshot" id="preview">
        <div class="screenshot__wrapper">
          <div class="container">
            <div class="screenshot__info">
              <h2 class="section-heading color-black">Have a look at what’s inside the app.</h2>
              <div class="screenshot-nav">
                <div class="screenshot-nav-prev"><i class="fad fa-long-arrow-left"></i></div>
                <div class="screenshot-nav-next"><i class="fad fa-long-arrow-right"></i></div>
              </div>
            </div>
          </div>
          <div class="swiper-container screenshot-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide screenshot-slide">
                <img src="assets/images/phone-01.png" alt="image">
              </div>
              <div class="swiper-slide screenshot-slide">
                <img src="assets/images/phone-02.png" alt="image">
              </div>
              <div class="swiper-slide screenshot-slide">
                <img src="assets/images/phone-03.png" alt="image">
              </div>
              <div class="swiper-slide screenshot-slide">
                <img src="assets/images/phone-04.png" alt="image">
              </div>
              <div class="swiper-slide screenshot-slide">
                <img src="assets/images/phone-05.png" alt="image">
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--screenshot section end--> --}}

    {{-- <!--related blog section start-->
    <section class="related-blog blog">
        <div class="related-blog__wrapper">
          <h2 class="section-heading color-black">Read latest news from our blog.</h2>
          <div class="blog__content">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <a href="blog-single.html">
                    <div class="blog__single blog__single--1">
                      <div class="blog__single-image">
                        <img src="assets/images/blog-img-1.png" alt="image">
                      </div>
                      <div class="blog__single-info">
                        <h3>New features coming in 2020 to our app.</h3>
                        <h4>12 <i class="fad fa-comment"></i><span>|</span>Dec 17, 2020</h4>
                        <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced
                          eleifend dales felise morbi nec tempor isvel ultricies lideula. </p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-8">
                  <a href="blog-single.html">
                    <div class="blog__single blog__single--2">
                      <div class="blog__single-image">
                        <img src="assets/images/blog-img-2.png" alt="image">
                      </div>
                      <div class="blog__single-info">
                        <h3>New features coming in 2020 to our app.</h3>
                        <h4>12 <i class="fad fa-comment"></i><span>|</span>Dec 17, 2020</h4>
                        <p class="paragraph dark">Suisque metus tortor ultricies ac ligula neced
                          eleifend dales felise morbi nec tempor isvel ultricies lideula. </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a href="blog.html" class="button">
            <span>GO TO BLOG <i class="fad fa-long-arrow-right"></i></span>
          </a>
        </div>
    </section>
    <!--related blog section end--> --}}

    {{-- <!--newsletter section start-->
        <section class="newsletter">
            <div class="newsletter__wrapper">
              <div class="container">
                <div class="row align-items-lg-center">
                  <div class="col-lg-6">
                    <div class="newsletter__info">
                      <h2 class="section-heading color-black">Subscribe to our newsletter.</h2>
                      <form class="newsletter__info--field">
                        <input type="text" placeholder="Email address" class="input-field">
                        <button class="button"><span>SUBSCRIBE <i class="fad fa-long-arrow-right"></i></span></button>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="newsletter__img">
                      <img src="assets/images/newsletter-img.png" alt="image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!--newsletter section end--> --}}

  @include('mislayouts.footerlanding')

</body>

</html>
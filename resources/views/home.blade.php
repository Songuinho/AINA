@extends('layouts.mainLayout' , ['focus' => "home"])

@section('title')
Aina | Accueil
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h1>Votre plateforme de rédaction <span>sur mesure</span></h1>
          <h2>Bénéficiez du professionnalisme de notre équipe, du savoir-faire et de leur expertise pour la rédaction de vos textes, rapidement et sans effort.</h2>
          <div class="d-flex">
            <div class="text-center text-lg-start flex-grow-1">
              <a href="{{ route('ordertext') }}" class="btn-get-started scrollto">Commander des textes</a>
            </div>
            <div class="text-center text-lg-start flex-grow-1">
              <a href="{{ route('orderquote') }}" class="btn-get-started scrollto bg-white text-success border border-success border-2 ">Demander un devis</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
          <a href="#" class="glightbox play-btn mb-4"></a>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <h3>Bénéficer des textes personnalisés pour votre structure professionnelle et ceux dans un style adapté à votre cible et à l’identité de votre marque.
          </h3>
          <p>Nos rédacteurs sont capables de vous fournir des textes à l’image de votre entreprise, d'être à votre service afin de vous aider à atteindre vos objectifs ; qu’ils soient d’aviser ou de convertir
          <p>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><svg class="svg-inline--fa fa-file-certificate fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="file-certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M243.1 339.2c10.35-10.58 14.41-26.13 10.6-40.52C251 285.2 250.1 290.8 254.6 277.3c3.844-14.56-.2813-30.14-10.72-40.58C234 226.8 234.1 228.4 231.4 214.9C227.7 200.4 216.5 188.1 202.1 185.1C188.7 181.4 190.5 182.6 180.7 172.4c-10.53-10.69-25.85-14.89-40.35-11.03c-13.36 3.654-11.29 3.646-24.63 0C101.2 157.5 85.87 161.8 75.33 172.4C65.46 182.6 67.26 181.4 53.86 185.1c-14.35 3.891-25.6 15.33-29.29 29.86C21.01 228.4 21.97 226.8 12.14 236.7c-10.44 10.44-14.57 26.02-10.72 40.58C5.037 290.8 4.982 285.2 1.447 298.7c-3.814 14.39 .25 29.94 10.6 40.52c10.04 10.09 8.904 8.18 12.47 22.03c3.875 14.42 15.16 25.8 29.44 29.67c5.164 1.424 7.836 2.188 10.03 3.115V496c0 5.547 2.877 10.69 7.596 13.61c4.689 2.875 10.6 3.156 15.57 .7031L128 489.9l40.85 20.42C171.1 511.4 173.6 512 176 512c2.938 0 5.844-.7969 8.406-2.391C189.1 506.7 192 501.5 192 496v-101.1c2.197-.9297 4.869-1.691 10.03-3.115c14.28-3.877 25.57-15.25 29.44-29.67C235.1 347.4 233.9 349.3 243.1 339.2zM160 470.1l-24.85-12.42c-4.502-2.25-9.814-2.25-14.31 0l-24.85 12.42v-55.32c6.422 1.434 13.16 1.549 19.69-.2305c13.69-3.682 11.03-3.656 24.63 0c6.537 1.779 13.27 1.664 19.69 .2305V470.1zM222.4 302.1c2.328 8.818 3.051 10.34-3.938 17.41c-11.5 11.61-12.94 14.19-17.88 33.46c-1.557 5.934-6.199 6.881-10.31 8.016c-15.82 4.344-18.35 5.844-30.07 17.7c-5.387 5.457-6.715 6.299-14.69 4.094c-15.88-4.35-18.98-4.371-34.94 0c-7.975 2.205-9.301 1.363-14.69-4.094c-11.72-11.86-14.25-13.36-30.07-17.7c-4.117-1.135-8.758-2.082-10.31-8.016c-4.939-19.27-6.377-21.85-17.88-33.46C30.59 312.5 31.31 310.9 33.64 302.1C37.08 289.3 37.08 286.4 33.61 273.8C31.38 265.5 30.52 263.6 37.17 256.9c11.75-11.91 13.22-14.45 17.44-30.42c2.139-8.055 2.697-9.232 11.13-11.53c15.91-4.344 18.44-5.844 30.1-17.75c5.346-5.414 6.725-6.238 14.72-4.047c16.07 4.393 18.81 4.393 34.88 0c8-2.191 9.377-1.367 14.72 4.047c11.66 11.91 14.19 13.41 30.1 17.75C198.7 217.3 199.3 218.5 201.4 226.5C205.6 242.5 207.1 245 218.8 256.9c6.654 6.697 5.787 8.58 3.562 16.81C218.9 286.4 218.9 289.3 222.4 302.1zM493.3 125.3l-106.5-106.5C374.7 6.742 358.5 0 341.5 0L191.1-.0001c-35.35 0-64 28.65-64 64L128 112C128 120.8 135.2 128 144 128C152.8 128 160 120.8 160 112V64c0-17.67 14.33-32 32-32h128v112C320 170.5 341.5 192 368 192H480v256c0 17.67-14.33 32-32 32H240C231.2 480 224 487.2 224 496C224 504.8 231.2 512 240 512l207.1-.0001c35.35 0 64-28.65 64-64v-277.5C512 153.5 505.3 137.3 493.3 125.3zM368 160C359.2 160 352 152.8 352 144V34.08c4.477 1.566 8.666 3.846 12.12 7.299l106.5 106.5C474.1 151.3 476.4 155.5 477.9 160H368z"></path>
              </svg></div>
            <h4 class="title"><a href="">Satisfaction garantie</a></h4>
            <p class="description">Nous sommes fiers de garantir la sactisfaction de nos client lorsqu'ils intègrent notre site web.</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><svg class="svg-inline--fa fa-head-side-brain fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="head-side-brain" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M32 224C32 118 118 32 224 32h24c65.6 0 122.1 39.5 146.8 96.1c2.4 5.5 4.8 11.1 7.2 16.9l0 0c15.4 36.6 32.9 78 65.4 106.9l3.2 2.8c6 5.3 9.5 13 9.5 21.1c0 15.6-12.6 28.2-28.2 28.2H432c-8.8 0-16 7.2-16 16v64c0 17.7-14.3 32-32 32H304c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V448h64c35.3 0 64-28.7 64-64V336h3.8c33.2 0 60.2-26.9 60.2-60.2c0-17.2-7.4-33.6-20.2-45l-3.2-2.8c-26.7-23.7-41-57.5-56.8-94.6l0 0c-2.5-6-5.1-12-7.7-18.1C394.5 47.5 326.8 0 248 0H224C100.3 0 0 100.3 0 224c0 52.9 18.4 101.6 49.1 140C58.5 375.6 64 388.6 64 401.4V496c0 8.8 7.2 16 16 16s16-7.2 16-16V401.4c0-22.1-9.5-41.9-21.9-57.4C47.7 311.1 32 269.4 32 224zm171.1-99.8c4.1-7.3 12-12.2 20.9-12.2s16.8 4.9 20.9 12.2c4.3 7.6 13.9 10.4 21.6 6.2c2.8-1.5 6-2.4 9.5-2.4c7 0 13.2 3.6 16.8 9.1c3.4 5.2 9.5 8 15.7 7.1c1.1-.2 2.3-.3 3.5-.3c13.3 0 24 10.7 24 24s-10.7 24-24 24H268.7c-5.4 0-10.4 2.7-13.4 7.2s-3.4 10.2-1.3 15.2c1.3 2.9 2 6.2 2 9.6c0 11.6-8.2 21.3-19.2 23.5c-8.7 1.8-14.3 10.2-12.5 18.9s10.2 14.3 18.9 12.5c25.6-5.2 44.8-27.8 44.8-54.9h24c30.9 0 56-25.1 56-56c0-30.4-24.2-55.2-54.5-56c-9.5-9.9-22.8-16-37.5-16c-4 0-7.8 .4-11.5 1.3C254.3 86.6 239.9 80 224 80s-30.3 6.6-40.5 17.3C179.8 96.4 176 96 172 96c-22.2 0-41.1 13.9-48.6 33.4C98.6 135.1 80 157.4 80 184c0 19.2 9.7 36.1 24.3 46.2c3.1 28 26.8 49.8 55.7 49.8v24c0 8.8 7.2 16 16 16s16-7.2 16-16V260.7c0-5.4-2.7-10.4-7.2-13.4s-10.2-3.4-15.2-1.3c-2.9 1.3-6.2 2-9.6 2c-13.3 0-24-10.7-24-24c0-.7 0-1.3 .1-2c.6-6.8-3.3-13.3-9.6-16c-8.6-3.7-14.5-12.2-14.5-22c0-13.3 10.7-24 24-24l.2 0c8.2 0 15-6.1 15.9-14.2c1.1-10 9.6-17.8 19.9-17.8c3.5 0 6.7 .9 9.5 2.4c7.7 4.2 17.3 1.4 21.6-6.2z"></path>
              </svg></div>
            <h4 class="title"><a href="">Redaction 100% faite par des humains</a></h4>
            <p class="description">Chez AiNa, nous sommes convaincus que la qualité de nos contenus est primordiale pour offrir une expérience utilisateur optimale.</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><svg class="svg-inline--fa fa-calendar-days fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M112 0C120.8 0 128 7.164 128 16V64H320V16C320 7.164 327.2 0 336 0C344.8 0 352 7.164 352 16V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H96V16C96 7.164 103.2 0 112 0zM416 192H312V264H416V192zM416 296H312V376H416V296zM416 408H312V480H384C401.7 480 416 465.7 416 448V408zM280 376V296H168V376H280zM168 480H280V408H168V480zM136 376V296H32V376H136zM32 408V448C32 465.7 46.33 480 64 480H136V408H32zM32 264H136V192H32V264zM168 264H280V192H168V264zM384 96H64C46.33 96 32 110.3 32 128V160H416V128C416 110.3 401.7 96 384 96z"></path>
              </svg></div>
            <h4 class="title"><a href="">Livraison rapide</a></h4>
            <p class="description">Nous sommes fiers de proposer une livraison rapide pour tous nos produits.</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Slide Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/gallery/target.svg') }}" class="testimonial-img" alt="">
              <h3>Sollicitez l’expertise de nos professionnels et commander les textes sur mesure pour votre société.</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Bénéficer des textes personnalisés pour votre structure professionnelle et ceux dans un style adapté à votre cible et à l’identité de votre marque. Nos rédacteurs sont capables de vous fournir des textes à l’image de votre entreprise, être à votre service pour vous aider à atteindre vos objectifs ; qu’ils soient d’aviser ou de convertir.
                Nous avons les professionnels capables de rédiger les textes pour tous secteurs d’activité.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/gallery/search.svg') }}" class="testimonial-img" alt="">
              <h3>Recevez des contenus SEO orientés pour les visiteurs</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Nos rédacteurs web utilisent les meilleures pratiques SEO pour permettre à vos textes d’apparaitrent en premier plan dans Google. Faites confiance à l’expertise de nos professionnels, ils sont capables de rédiger avec mots-clés et un balisage HTML les textes qui vont faciliter le crawl par les logiciels de recherche.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/gallery/chrono.svg') }}" class="testimonial-img" alt="">
              <h3>Notre directeur de projets dédié vous permet de gagner du temps.</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Notre équipe fait un traitement personnalisé de chacun de vos projets de rédaction web. Grace au professionnalisme de notre personnel nous pouvons superviser le bon déroulement de toutes les commandes de contenus et vous garantir une livraison dans les temps.
                </i>
              </p>
              <div class="icon-box d-flex text-align-center">
                <div class="icon flex-grow-1 " style="margin-right: -4em;"><img src="assets/img/gallery/team.png" width="50%" height="100%"></div>
                <p class="flex-grow-1 col-6">
                  Pricile et son personnel vérifient et controlent rigoureusement la qualité des textes avant de les faire livrer.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->


          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/gallery/protection.svg') }}" class="testimonial-img" alt="">
              <h3>Obtenez des textes rédigés à 100% par les humains et cela sans duplicate content.</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Sur Aina.com nous pouvons vous garantir que la rédaction est faite par les humains en un contenu unique et de qualité.
                Les textes que vous nous proposez pour une rédaction sont documentés avec les dernières études publiées et actualitées. De plus ils sont rédigés par des rédacteurs qualifiés d’une façon minutieuse et selon vos consignes pour vous permettre d’atteindre vos objectifs.

              </p>
              <div class="icon-box d-flex text-align-center">
                <div class="icon flex-grow-1" style="margin-right: 1em;"></div>
                <p class="flex-grow-1">
                  pour chaque livraison de texte, nous vous envoyons un rapport CopyScape afin de vous garantir un contenu original.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Slide Section -->


  <!-- ======= Details Section ======= -->
  <section id="details" class="details">
    <div class="container">

      <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/gallery/degressive.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>Profitez de tarifs dégressifs bénéfique pour vos textes.</h3>
          <p>
            En fonction du volume des mots commandés vous avez l’avantage d’avoir les tarifs dégressifs. Cette réduction <b>s’applique immédiatement lors de la commande.</b>
          </p>
          <p>
            Souhaitez-vous étayer vos besoins toute sur une année ? vous avez la possibilité de regrouper vos commandes ou d’opter pour les packs de crédits afin de profiter d’un meilleur tarif <b>jusqu'à -30%</b>.
          </p>
          <div class="icon-box d-flex text-align-center">
            <div class="icon flex-grow-1" style="margin-right: 1em;"><img src="assets/img/gallery/whatsap.svg" width="80px" height="60px"></div>
            <p class="flex-grow-1">
              Contactez-nous au <span class="text-success">+237 698 307 457</span> du lundi à samedi de 9h à 18h afin de bénéficier d’un meilleur prix sur votre commande.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Details Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">
      <div class="row" data-aos="fade-left">
        <div class="col-lg-4 col-md-6">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/gallery/ecommerce.svg" width="50%" height="10%" alt="">
            <p>Rédaction pour les TPE, PME, start-up puis en-dessous de ces mots</p>
            <ul>
              <li>Commander des articles de blog, des contenus marketing ou des rédaction de pages web.</li>
              <li><b>Captivante et performante.</b></li>
            </ul>
            <div class="btn-wrap">
              <a href="{{ route('ordertext') }}" class="btn-buy">Commander des textes</a>
            </div>
          </div>
        </div>
       
        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/gallery/business.svg" width="50%" height="10%" alt="">
            <p>Rédaction pour les sites <br> de e-commerce</p>
            <ul>
              <li>Commander des fiches de produits correspondantes et des textes optimisés </li>
              <li><b>pour un référencement naturel.</b></li>
            </ul>
            <div class="btn-wrap">
              <a href="{{ route('ordertext') }}" class="btn-buy">Commander des textes</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/gallery/agence.svg" width="49%" height="10%" alt="">
            <p>Rédacteur pour  <br> les agences web.</p>
            <ul>
              <li>Respectez vos deadlines et livrez à vos clients des textes de qualité</li>
              <li><b> adoptée à leur problématique.</b></li>
            </ul>
            <div class="btn-wrap">
              <a href="{{ route('orderquote') }}" class="btn-buy border border-2 bg-white text-success">Commander un devis</a>
            </div>
          </div>
        </div>


        <div class="row content justify-content-center">
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <p style="text-align: center;">
            <h2>Aina.com, la plateforme de <span class="text-primary">tous les contenus</span></h2>
            Pour tous vos besoins dans le domaine de la rédaction dans votre entreprise le personnel de Aina.com vous assiste dans la création de tous vos contenus.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2 class="text-primary">Un personnel professionnel à votre service.</h2>
      </div>

      <div class="row" data-aos="fade-left">

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="{{ asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Mme Nana</h4>
              <span>Directrice</span>
              <div class="social">
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <div class="pic"><img src="{{ asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <div class="pic"><img src="{{ asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="row content justify-content-center">
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <p style="text-align: center;">
              L’association de talent et rapidité font de notre équipe des professionnels de la rédaction. Grace à ses deux qualités, nous vous garantissons un travail bien fait et ceux dans les brefs délais. </p>

          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->


  <!-- Section Redactor -->
  <div class="details mt-3 mb-5">
    <div class="container">
      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/gallery/professor.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8" data-aos="fade-up" id="redactor">
          <h3>Faites votre première commande dans notre agence dès maintenant.</h3>
          <p>
            Profitez de l’expérience de nos rédacteurs disponibles à recevoir rapidement des articles pour une rédaction authentique et sans plagiat.
          </p>
          <div class="container d-flex justify-content-center" style="margin-top: 4em;">
            <div class="d-flex" data-aos="zoom-out">
              <div id="change-bg-1" class="text-center text-lg-start" style="margin-top: -1em;">
                <a href="{{ route('ordertext') }}" class="btn text-white border border-1 p-3 rounded-5">Commander des textes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--End Section Redactor -->


</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection
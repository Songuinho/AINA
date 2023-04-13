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
          <h5 class="text-white">Bénéficiez du professionnalisme, du savoir-faire et l'expertise de notre équipe pour la rédaction de vos textes, rapidement et sans effort.</h5>
          <div class="d-flex">
            <div class="text-center  text-lg-start flex-grow-1">
              <a href="{{ route('tarif') }}" class="btn-get-started scrollto">Commander des textes</a>
            </div>
            <div class="text-center text-lg-start flex-grow-1">
              <a href="{{ route('tarif') }}" class="btn-get-started scrollto ">Demander un devis</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-xs-6 order-1 order-md-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/aina_pictures/accueil.avif" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="row content justify-content-center">
      <div class="col-lg-8 col-md-8 pt-5" style="text-align: center; margin-top: -2em;" data-aos="fade-up">
        <p class="">
        <h2>Aina.com, la plateforme de <span class="text-primary">tous les contenus</span></h2>
        Pour tous vos besoins dans le domaine de la rédaction dans votre entreprise le personnel de Aina.com vous assiste dans la création de tous vos contenus.
        </p>
      </div>
    </div>


    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-6 col-lg-6 order-2 order-md-1 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
          <p>Profitez des textes personnalisés pour votre structure professionnelle et ceux dans un style adapté à votre cible et à l’identité de votre marque.
          </p>
          <p>Nos rédacteurs sont capables de vous fournir des textes à l’image de votre entreprise, d'être à votre service afin de vous aider à atteindre vos objectifs; qu’ils soient d’aviser ou de convertir.
          <p>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><svg class="svg-inline--fa fa-file-certificate fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="file-certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M243.1 339.2c10.35-10.58 14.41-26.13 10.6-40.52C251 285.2 250.1 290.8 254.6 277.3c3.844-14.56-.2813-30.14-10.72-40.58C234 226.8 234.1 228.4 231.4 214.9C227.7 200.4 216.5 188.1 202.1 185.1C188.7 181.4 190.5 182.6 180.7 172.4c-10.53-10.69-25.85-14.89-40.35-11.03c-13.36 3.654-11.29 3.646-24.63 0C101.2 157.5 85.87 161.8 75.33 172.4C65.46 182.6 67.26 181.4 53.86 185.1c-14.35 3.891-25.6 15.33-29.29 29.86C21.01 228.4 21.97 226.8 12.14 236.7c-10.44 10.44-14.57 26.02-10.72 40.58C5.037 290.8 4.982 285.2 1.447 298.7c-3.814 14.39 .25 29.94 10.6 40.52c10.04 10.09 8.904 8.18 12.47 22.03c3.875 14.42 15.16 25.8 29.44 29.67c5.164 1.424 7.836 2.188 10.03 3.115V496c0 5.547 2.877 10.69 7.596 13.61c4.689 2.875 10.6 3.156 15.57 .7031L128 489.9l40.85 20.42C171.1 511.4 173.6 512 176 512c2.938 0 5.844-.7969 8.406-2.391C189.1 506.7 192 501.5 192 496v-101.1c2.197-.9297 4.869-1.691 10.03-3.115c14.28-3.877 25.57-15.25 29.44-29.67C235.1 347.4 233.9 349.3 243.1 339.2zM160 470.1l-24.85-12.42c-4.502-2.25-9.814-2.25-14.31 0l-24.85 12.42v-55.32c6.422 1.434 13.16 1.549 19.69-.2305c13.69-3.682 11.03-3.656 24.63 0c6.537 1.779 13.27 1.664 19.69 .2305V470.1zM222.4 302.1c2.328 8.818 3.051 10.34-3.938 17.41c-11.5 11.61-12.94 14.19-17.88 33.46c-1.557 5.934-6.199 6.881-10.31 8.016c-15.82 4.344-18.35 5.844-30.07 17.7c-5.387 5.457-6.715 6.299-14.69 4.094c-15.88-4.35-18.98-4.371-34.94 0c-7.975 2.205-9.301 1.363-14.69-4.094c-11.72-11.86-14.25-13.36-30.07-17.7c-4.117-1.135-8.758-2.082-10.31-8.016c-4.939-19.27-6.377-21.85-17.88-33.46C30.59 312.5 31.31 310.9 33.64 302.1C37.08 289.3 37.08 286.4 33.61 273.8C31.38 265.5 30.52 263.6 37.17 256.9c11.75-11.91 13.22-14.45 17.44-30.42c2.139-8.055 2.697-9.232 11.13-11.53c15.91-4.344 18.44-5.844 30.1-17.75c5.346-5.414 6.725-6.238 14.72-4.047c16.07 4.393 18.81 4.393 34.88 0c8-2.191 9.377-1.367 14.72 4.047c11.66 11.91 14.19 13.41 30.1 17.75C198.7 217.3 199.3 218.5 201.4 226.5C205.6 242.5 207.1 245 218.8 256.9c6.654 6.697 5.787 8.58 3.562 16.81C218.9 286.4 218.9 289.3 222.4 302.1zM493.3 125.3l-106.5-106.5C374.7 6.742 358.5 0 341.5 0L191.1-.0001c-35.35 0-64 28.65-64 64L128 112C128 120.8 135.2 128 144 128C152.8 128 160 120.8 160 112V64c0-17.67 14.33-32 32-32h128v112C320 170.5 341.5 192 368 192H480v256c0 17.67-14.33 32-32 32H240C231.2 480 224 487.2 224 496C224 504.8 231.2 512 240 512l207.1-.0001c35.35 0 64-28.65 64-64v-277.5C512 153.5 505.3 137.3 493.3 125.3zM368 160C359.2 160 352 152.8 352 144V34.08c4.477 1.566 8.666 3.846 12.12 7.299l106.5 106.5C474.1 151.3 476.4 155.5 477.9 160H368z"></path>
              </svg></div>
            <h4 class="title"><a>Satisfaction garantie</a></h4>
            <p class="description">Nous sommes fiers de garantir la sactisfaction de nos client lorsqu'ils intègrent notre site web.</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><svg class="svg-inline--fa fa-head-side-brain fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="head-side-brain" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M32 224C32 118 118 32 224 32h24c65.6 0 122.1 39.5 146.8 96.1c2.4 5.5 4.8 11.1 7.2 16.9l0 0c15.4 36.6 32.9 78 65.4 106.9l3.2 2.8c6 5.3 9.5 13 9.5 21.1c0 15.6-12.6 28.2-28.2 28.2H432c-8.8 0-16 7.2-16 16v64c0 17.7-14.3 32-32 32H304c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V448h64c35.3 0 64-28.7 64-64V336h3.8c33.2 0 60.2-26.9 60.2-60.2c0-17.2-7.4-33.6-20.2-45l-3.2-2.8c-26.7-23.7-41-57.5-56.8-94.6l0 0c-2.5-6-5.1-12-7.7-18.1C394.5 47.5 326.8 0 248 0H224C100.3 0 0 100.3 0 224c0 52.9 18.4 101.6 49.1 140C58.5 375.6 64 388.6 64 401.4V496c0 8.8 7.2 16 16 16s16-7.2 16-16V401.4c0-22.1-9.5-41.9-21.9-57.4C47.7 311.1 32 269.4 32 224zm171.1-99.8c4.1-7.3 12-12.2 20.9-12.2s16.8 4.9 20.9 12.2c4.3 7.6 13.9 10.4 21.6 6.2c2.8-1.5 6-2.4 9.5-2.4c7 0 13.2 3.6 16.8 9.1c3.4 5.2 9.5 8 15.7 7.1c1.1-.2 2.3-.3 3.5-.3c13.3 0 24 10.7 24 24s-10.7 24-24 24H268.7c-5.4 0-10.4 2.7-13.4 7.2s-3.4 10.2-1.3 15.2c1.3 2.9 2 6.2 2 9.6c0 11.6-8.2 21.3-19.2 23.5c-8.7 1.8-14.3 10.2-12.5 18.9s10.2 14.3 18.9 12.5c25.6-5.2 44.8-27.8 44.8-54.9h24c30.9 0 56-25.1 56-56c0-30.4-24.2-55.2-54.5-56c-9.5-9.9-22.8-16-37.5-16c-4 0-7.8 .4-11.5 1.3C254.3 86.6 239.9 80 224 80s-30.3 6.6-40.5 17.3C179.8 96.4 176 96 172 96c-22.2 0-41.1 13.9-48.6 33.4C98.6 135.1 80 157.4 80 184c0 19.2 9.7 36.1 24.3 46.2c3.1 28 26.8 49.8 55.7 49.8v24c0 8.8 7.2 16 16 16s16-7.2 16-16V260.7c0-5.4-2.7-10.4-7.2-13.4s-10.2-3.4-15.2-1.3c-2.9 1.3-6.2 2-9.6 2c-13.3 0-24-10.7-24-24c0-.7 0-1.3 .1-2c.6-6.8-3.3-13.3-9.6-16c-8.6-3.7-14.5-12.2-14.5-22c0-13.3 10.7-24 24-24l.2 0c8.2 0 15-6.1 15.9-14.2c1.1-10 9.6-17.8 19.9-17.8c3.5 0 6.7 .9 9.5 2.4c7.7 4.2 17.3 1.4 21.6-6.2z"></path>
              </svg></div>
            <h4 class="title"><a>Redaction 100% faite par des humains</a></h4>
            <p class="description">Chez AiNa, nous sommes convaincus que la qualité de nos contenus est primordiale pour offrir une expérience utilisateur optimale.</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><svg class="svg-inline--fa fa-calendar-days fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M112 0C120.8 0 128 7.164 128 16V64H320V16C320 7.164 327.2 0 336 0C344.8 0 352 7.164 352 16V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H96V16C96 7.164 103.2 0 112 0zM416 192H312V264H416V192zM416 296H312V376H416V296zM416 408H312V480H384C401.7 480 416 465.7 416 448V408zM280 376V296H168V376H280zM168 480H280V408H168V480zM136 376V296H32V376H136zM32 408V448C32 465.7 46.33 480 64 480H136V408H32zM32 264H136V192H32V264zM168 264H280V192H168V264zM384 96H64C46.33 96 32 110.3 32 128V160H416V128C416 110.3 401.7 96 384 96z"></path>
              </svg></div>
            <h4 class="title"><a>Livraison rapide</a></h4>
            <p class="description">Nous sommes fiers de proposer une livraison rapide pour tous nos services.</p>
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 order-1 order-md-2 col-sm-6 col-xs-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
        </div>
      </div>

    </div>

    <div class="order-section">

      <!-- Section Redactor -->
      <div class="details mb-5">
        <div class="container">
          <div class="row content">
            <div class="col-md-4 col-lg-6" data-aos="fade-right">
              <img src="assets/img/aina_pictures/redactrice.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 col-lg-6" data-aos="fade-up" id="redactor">
              <h3>Faites votre première commande dès maintenant.</h3>
              <p>
                Profitez de l’expérience de nos rédacteurs disponibles à recevoir rapidement des articles pour une rédaction authentique et sans plagiat.
              </p>
              <div class="container d-flex justify-content-center" style="margin-top: 1em;">
                <div class="d-flex" data-aos="zoom-out">
                  <div class="btn-wrap pricing mt-3" id="pricing">
                    <a href="{{ route('tarif') }}" class="btn-buy">Commander des textes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--End Section Redactor -->
    </div>
  </section><!-- End About Section -->


  <!-- Carousel wrapper -->
  <div id="carouselExampleCaptions" class="carousel slide bg-dark">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="{{ asset('assets/img/aina_pictures/proredacteur.jpg') }}" height="600" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h3>Obtenez des textes rédigés à 100% par les humains et cela sans duplicate content.</h3>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Sur Aina.com nous pouvons vous garantir que la rédaction est faite par les humains en un contenu unique et de qualité.
            Les textes que vous nous proposez pour une rédaction sont documentés avec les dernières études publiées et actualitées. De plus ils sont rédigés par des rédacteurs qualifiés d’une façon minutieuse et selon vos consignes pour vous permettre d’atteindre vos objectifs.
            pour chaque livraison de texte, nous vous envoyons un rapport CopyScape afin de vous garantir un contenu original.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('assets/img/aina_pictures/sollicite_expertise.jpg') }}" height="600" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h3>Sollicitez l’expertise de nos professionnels et commander les textes sur mesure pour votre société.</h3>
          <div class="bg-primary border p-4 rounded-pill text-white">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Bénéficer des textes personnalisés pour votre structure professionnelle et ceux dans un style adapté à votre cible et à l’identité de votre marque. Nos rédacteurs sont capables de vous fournir des textes à l’image de votre entreprise, être à votre service pour vous aider à atteindre vos objectifs ; qu’ils soient d’aviser ou de convertir.
              Nous avons les professionnels capables de rédiger les textes pour tous secteurs d’activité.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('assets/img/aina_pictures/seo.png') }}" height="600" class="d-block w-100" alt="assets/img/gallery/degressive.svg">
        <div class="carousel-caption d-none d-md-block text-white">
          <h3 class="text-dark">Recevez des contenus SEO orientés pour les visiteurs</h3>
          <div class="bg-primary border p-4 rounded-pill">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nos rédacteurs web utilisent les meilleures pratiques SEO pour permettre à vos textes d’apparaitrent en premier plan dans Google. Faites confiance à l’expertise de nos professionnels, ils sont capables de rédiger avec mots-clés et un balisage HTML les textes qui vont faciliter le crawl par les logiciels de recherche.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('assets/img/aina_pictures/directrice.jpg') }}" height="600" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block  text-white">
          <h3 class="text-dark">Notre directrice de projets dédiée vous permet de gagner du temps.</h3>
          <div class="bg-primary p-2 border rounded-pill">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Notre équipe fait un traitement personnalisé de chacun de vos projets de rédaction web. Grace au professionnalisme de notre personnel nous pouvons superviser le bon déroulement de toutes les commandes de contenus et vous garantir une livraison dans les temps.
              Notre équipe fait un traitement personnalisé de chacun de vos projets de rédaction web. Grace au professionnalisme de notre personnel nous pouvons superviser le bon déroulement de toute span les commandes de contenus et vous garantir une livraison dans les temps. <br>
              Pricile et son personnel vérifient et controlent rigoureusement la qualité des textes avant de les faire livrer.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
          <div class="icon-box d-flex text-align-center">
            <p class="flex-grow-1 col-6">
            </p>
          </div>
        </div>
      </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
  <!-- Carousel wrapper -->


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

  <!-- Section services -->
  <section id="service" class="service" data-aos="fade-right">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title text-center mb-4 pb-2">
            <h1 class="title mb-4">Nos Services</h1>
          </div>
        </div><!--end col-->
      </div><!--end row-->

      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2" data-aos="zoom-out">
          <div class="card service-wrapper rounded border-0 shadow p-4">
            <div class="icon text-center text-custom h1 shadow rounded bg-white">
              <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                  <rect width="20" height="15" x="2" y="3" class="uim-tertiary" rx="3"></rect>
                  <path class="uim-primary" d="M16,21H8a.99992.99992,0,0,1-.832-1.55469l4-6a1.03785,1.03785,0,0,1,1.66406,0l4,6A.99992.99992,0,0,1,16,21Z"></path>
                </svg></span>
            </div>
            <div class="content mt-4">
              <h5 class="title">Rédaction</h5>
              <p class="text-muted mt-3 mb-0">Rédigez les contenus de qualités avec nos rédacteurs proféssionnels.</p>
              <div class="mt-3">
                <a href="{{route('redaction')}}" class="text-custom fw-bold">Lire plus... <i class="mdi mdi-chevron-right"></i></a>
              </div>
            </div>
            <div class="big-icon h1 text-custom">
              <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                  <rect width="20" height="15" x="2" y="3" class="uim-tertiary" rx="3"></rect>
                  <path class="uim-primary" d="M16,21H8a.99992.99992,0,0,1-.832-1.55469l4-6a1.03785,1.03785,0,0,1,1.66406,0l4,6A.99992.99992,0,0,1,16,21Z"></path>
                </svg></span>
            </div>
          </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2" data-aos="zoom-out">
          <div class="card service-wrapper rounded border-0 shadow p-4">
            <div class="icon text-center text-custom h1 shadow rounded bg-white">
              <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                  <path class="uim-tertiary" d="M20 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.02883 1.02883 0 0 1 19.29 9.29a1.04667 1.04667 0 0 1 1.41992 0 1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 20 11zM19 6.5a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 19 6.5zM20 4a.98979.98979 0 0 1-.91992-1.37988A1.02883 1.02883 0 0 1 19.29 2.29a1.04669 1.04669 0 0 1 1.41992 0 1.02883 1.02883 0 0 1 .21.33008A.98919.98919 0 0 1 20.71 3.71a1.16044 1.16044 0 0 1-.33008.21A.9994.9994 0 0 1 20 4zM7.03027 6.24023a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 8 7H8A.99122.99122 0 0 1 7.03027 6.24023zm4-1a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 12 6h0A1.00294 1.00294 0 0 1 11.03027 5.24023zm4-1a.99816.99816 0 0 1 .7295-1.21h0a1.00272 1.00272 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 16 5h0A.99122.99122 0 0 1 15.03027 4.24023zM4 8A.99042.99042 0 0 1 3 7a.83154.83154 0 0 1 .08008-.37988A1.02883 1.02883 0 0 1 3.29 6.29 1.04669 1.04669 0 0 1 4.71 6.29a1.02883 1.02883 0 0 1 .21.33008A.99013.99013 0 0 1 4 8zM4 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.14718 1.14718 0 0 1 3.29 9.29 1.04667 1.04667 0 0 1 4.71 9.29a1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 4 11zM15 10a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 15 10zm-4 0a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 11 10zM7 10A1.0032 1.0032 0 0 1 8 9H8a1.0032 1.0032 0 0 1 1 1H9a1.0032 1.0032 0 0 1-1 1H8A1.0032 1.0032 0 0 1 7 10z"></path>
                  <polygon class="uim-primary" points="20 14 20 21 4 17 4 14 20 14"></polygon>
                  <path class="uim-primary" d="M20,22a.97427.97427,0,0,1-.24219-.03027l-16-4A.99961.99961,0,0,1,3,17V14a.99943.99943,0,0,1,1-1H20a.99943.99943,0,0,1,1,1v7a1.0005,1.0005,0,0,1-1,1ZM5,16.21875l14,3.5V15H5Z"></path>
                </svg></span>
            </div>
            <div class="content mt-4">
              <h5 class="title">Traduction</h5>
              <p class="text-muted mt-3 mb-0">Sollicitez les services de notre <br> agence de traduction.</p>
              <div class="mt-3">
                <a href="{{route('integration')}}" class="text-custom fw-bold">Lire plus...<i class="mdi mdi-chevron-right"></i></a>
              </div>
            </div>

            <div class="big-icon h1 text-custom">
              <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                  <path class="uim-tertiary" d="M20 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.02883 1.02883 0 0 1 19.29 9.29a1.04667 1.04667 0 0 1 1.41992 0 1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 20 11zM19 6.5a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 19 6.5zM20 4a.98979.98979 0 0 1-.91992-1.37988A1.02883 1.02883 0 0 1 19.29 2.29a1.04669 1.04669 0 0 1 1.41992 0 1.02883 1.02883 0 0 1 .21.33008A.98919.98919 0 0 1 20.71 3.71a1.16044 1.16044 0 0 1-.33008.21A.9994.9994 0 0 1 20 4zM7.03027 6.24023a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 8 7H8A.99122.99122 0 0 1 7.03027 6.24023zm4-1a.99364.99364 0 0 1 .7295-1.21h0a.9907.9907 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 12 6h0A1.00294 1.00294 0 0 1 11.03027 5.24023zm4-1a.99816.99816 0 0 1 .7295-1.21h0a1.00272 1.00272 0 0 1 1.21.7295h0a.99891.99891 0 0 1-.7295 1.21h0A.96451.96451 0 0 1 16 5h0A.99122.99122 0 0 1 15.03027 4.24023zM4 8A.99042.99042 0 0 1 3 7a.83154.83154 0 0 1 .08008-.37988A1.02883 1.02883 0 0 1 3.29 6.29 1.04669 1.04669 0 0 1 4.71 6.29a1.02883 1.02883 0 0 1 .21.33008A.99013.99013 0 0 1 4 8zM4 11a.99018.99018 0 0 1-.71-.29 1.16044 1.16044 0 0 1-.21-.33008.94107.94107 0 0 1 0-.75976A1.14718 1.14718 0 0 1 3.29 9.29 1.04667 1.04667 0 0 1 4.71 9.29a1.14718 1.14718 0 0 1 .21.33008.94107.94107 0 0 1 0 .75976 1.16044 1.16044 0 0 1-.21.33008A.99349.99349 0 0 1 4 11zM15 10a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 15 10zm-4 0a1.0032 1.0032 0 0 1 1-1h0a1.0032 1.0032 0 0 1 1 1h0a1.0032 1.0032 0 0 1-1 1h0A1.0032 1.0032 0 0 1 11 10zM7 10A1.0032 1.0032 0 0 1 8 9H8a1.0032 1.0032 0 0 1 1 1H9a1.0032 1.0032 0 0 1-1 1H8A1.0032 1.0032 0 0 1 7 10z"></path>
                  <polygon class="uim-primary" points="20 14 20 21 4 17 4 14 20 14"></polygon>
                  <path class="uim-primary" d="M20,22a.97427.97427,0,0,1-.24219-.03027l-16-4A.99961.99961,0,0,1,3,17V14a.99943.99943,0,0,1,1-1H20a.99943.99943,0,0,1,1,1v7a1.0005,1.0005,0,0,1-1,1ZM5,16.21875l14,3.5V15H5Z"></path>
                </svg></span>
            </div>
          </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2" data-aos="zoom-out">
          <div class="card service-wrapper rounded border-0 shadow p-4">
            <div class="icon text-center text-custom h1 shadow rounded bg-white">
              <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                  <path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path>
                  <polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon>
                  <path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path>
                  <path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path>
                </svg></span>
            </div>
            <div class="content mt-4">
              <h5 class="title">Intégration</h5>
              <p class="text-muted mt-3 mb-0">Externaliser L'intégrité <br> de vos contenus web.</p>
              <div class="mt-3">
                <a href="{{route('traduction')}}" class="text-custom fw-bold">Lire plus...<i class="mdi mdi-chevron-right"></i></a>
              </div>
            </div>
            <div class="big-icon h1 text-custom">
              <span class="uim-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em">
                  <path class="uim-quaternary" d="M12,22a.99974.99974,0,0,1-1-1V3a1,1,0,0,1,2,0V21A.99974.99974,0,0,1,12,22Z"></path>
                  <polygon class="uim-primary" points="21 12 16 7 16 17 21 12"></polygon>
                  <path class="uim-primary" d="M16,18a1,1,0,0,1-1-1V7a.99991.99991,0,0,1,1.707-.707l5,5a.99962.99962,0,0,1,0,1.41406l-5,5A.99893.99893,0,0,1,16,18Zm1-8.58594v5.17188L19.58594,12Z"></path>
                  <path class="uim-tertiary" d="M3 13a.99075.99075 0 0 1-.92041-1.37988A1.14883 1.14883 0 0 1 2.29 11.29a1.04669 1.04669 0 0 1 1.41992 0 1.03724 1.03724 0 0 1 .21.33008A.83792.83792 0 0 1 4 12a.99042.99042 0 0 1-1 1zM4.79 15.21a1.00761 1.00761 0 0 1 0-1.41992h0a1.00671 1.00671 0 0 1 1.41992 0h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 15.21zM8 18a.99183.99183 0 0 1-.71-.29 1.16213 1.16213 0 0 1-.21045-.33008A.99906.99906 0 0 1 7 17a1.05 1.05 0 0 1 .29-.71 1.0387 1.0387 0 0 1 1.08984-.21 1.15384 1.15384 0 0 1 .33008.21A1.05232 1.05232 0 0 1 9 17a.9994.9994 0 0 1-.08008.37988 1.17124 1.17124 0 0 1-.21.33008A.99183.99183 0 0 1 8 18zM7 13.66992a.996.996 0 0 1 1-1H8a.99632.99632 0 0 1 1 1H9a1.00319 1.00319 0 0 1-1 1H8A1.00288 1.00288 0 0 1 7 13.66992zm0-3.33984a1.00288 1.00288 0 0 1 1-1H8a1.00319 1.00319 0 0 1 1 1H9a.99693.99693 0 0 1-1 1H8A.99663.99663 0 0 1 7 10.33008zM8 8a.99075.99075 0 0 1-.92041-1.37988A1.03011 1.03011 0 0 1 7.29 6.29a.98544.98544 0 0 1 1.62988.33008A.99013.99013 0 0 1 8 8zM4.79 10.21A1.00761 1.00761 0 0 1 4.79 8.79h0A1.00671 1.00671 0 0 1 6.21 8.79h0a1.0085 1.0085 0 0 1 0 1.41992h0a1.02749 1.02749 0 0 1-.71.29h0A1.02577 1.02577 0 0 1 4.79 10.21z"></path>
                </svg></span>
            </div>
          </div>
        </div><!--end col-->


      </div><!--end row-->
    </div>
  </section>

  <!-- End section services -->

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection
@extends('layouts.mainLayout')


@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h1>Build Your Landing Page With <span>Bootstlander</span></h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex">
            <div class="text-center text-lg-start flex-grow-1">
              <a href="#" class="btn-get-started scrollto">Commanderdes textes</a>
            </div>
            <div class="text-center text-lg-start flex-grow-1">
              <a href="#" class="btn-get-started scrollto">Demander un devis</a>
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
          <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
          <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
            temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam
            sint et id nulla tenetur. Suscipit aut voluptate.</p>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
              excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque</p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title"><a href="">Dine Pad</a></h4>
            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
              odit. Sunt aut deserunt minus aut eligendi omnis</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Details Section ======= -->
  <section id="details" class="details">
    <div class="container">

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/gallery/target.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-4" data-aos="fade-up">
          <h3>Sollicitez l’expertise de nos experts et commander les textes sur mesure pour votre société.</h3>
          <p>
            Bénéfice des textes personnalisés pour votre structure professionnelle et ceux dans un style adapté à votre cible et à l’identité de votre marque.
          </p>
          <p>
            Nos rédacteurs sont capables de vous fournir des textes à l’image de votre entreprise, être à votre service pour vous aider à atteindre vos objectifs ; qu’ils soient d’aviser ou de convertir.
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Nous avons les professionnels capables de rédiger les textes de tous secteurs d’activité </li>
          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
          <img src="assets/img/gallery/search.svg" class="img-fluid" alt="" style="margin-top: -2em;">
        </div>
        <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>Recevez des contenus SEO orientés pour les visiteurs</h3>
          <p>
            Nos rédacteurs web utilisent les meilleures pratiques SEO pour permettre à vos textes d’apparaissent en premier plan dans Google.
          </p>
          <p>
            Faites confiance à l’expertise de nos experts, ils sont capables de rédiger avec mots-clés et une balisage HTM les textes qui vont faciliter le crawl par les logiciels de recherche.
          </p>
          <!-- <div class="icon-box d-flex text-align-center">
            <div class="icon flex-grow-1" style="margin-right: 1em;"><img src="assets/img/gallery/seo.svg" width="80px" height="60px"></div>
            <p class="flex-grow-1">
              Vos textes sont livrés avec vos mots-clés et un balisage HTML facilitant le crawl par les
              moteurs de recherche.
            </p>
          </div> -->
        </div>
      </div>

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/gallery/chrono.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <h3>Notre directeur de projets dédié vous permet de gagner du temps.</h3>
          <p>Notre équipe fait traitement personnalisé de chacune de vos projets rédactions web.</p>
          <p>Grace au professionnalisme de notre personnel nous pouvons superviser le bon déroulement de toutes les commandes de contenus et vous garantir une livraison dans les temps et ceux adapté à vos deadlines.</p>
          <div class="icon-box d-flex text-align-center">
            <div class="icon flex-grow-1" style="margin-right: 1em;"><img src="assets/img/gallery/team.png" width="100%" height="100%"></div>
            <p class="flex-grow-1">
              Pricile et son personnel vérifient et control rigoureusement la qualité des textes avant de les faire livrer.
            </p>
          </div>
        </div>
      </div>

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
            Besoin d’étayer vos besoins toute une année ? vous avez la possibilité de regrouper vos commandes ou d’opter pour les packs de crédits afin de profiter d’un meilleur tarif <b>jusqu'à -30%</b>.
          </p>
          <div class="icon-box d-flex text-align-center">
            <div class="icon flex-grow-1" style="margin-right: 1em;"><img src="assets/img/gallery/whatsap.svg" width="80px" height="60px"></div>
            <p class="flex-grow-1">
              Contactez-nous au <span class="text-success">+237 6 58 20 28 58</span> du lundi à samedi de 9h à 18h afin de bénéficier d’un meilleur prix sur votre commande gros volume..
            </p>
          </div>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/gallery/protection.svg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <h3>Obtenez des textes rédigés à 100% par les humains cela sans duplicate content.</h3>
          <p>Sur Aina.com nous pouvons vous garantir que la rédaction est faite par les humains en un contenu unique et de qualité.</p>
          <p>
            Les textes que vous nous proposez pour rédaction sont documentés avec les dernières études publiées et actualités. De plus ils sont rédigés par des rédacteurs qualifiés d’une façon minutieuse et selon vos consignes pour vous permettre d’atteindre vos objectifs. </p>
          <div class="icon-box d-flex text-align-center">
            <div class="icon flex-grow-1" style="margin-right: 1em;"><img src="assets/img/gallery/copyscape.svg" width="80px" height="60px"></div>
            <p class="flex-grow-1">
              pour chaque livraison de texte, nous vous envoyons un rapport CopyScape afin de vous garantir un contenu original.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Details Section -->


  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Un personnel professionnel à votre service.</h2>
        <p>
          Située au Cameroun plus précisément dans la ville de Douala, notre personnel est à votre service pour vous aider à rédiger vos contenus.
        </p>
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

        <div class="container d-flex justify-content-center" style="margin-top: 4em;">
          <div class="d-flex" data-aos="zoom-out">
            <div id="change-bg-1" class="text-center text-lg-start" style="margin-right: 1em;">
              <a href="#" class="btn text-white border border-1 p-3  rounded-5">Commander des textes</a>
            </div>
            <div id="change-bg-2" class="text-center text-lg-start ">
              <a href="#" class="btn border border-2 p-3 border-primary rounded-5" id="scrollto-2">Demander un devis</a>
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


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">


      <div class="row content justify-content-center mb-5">
        <div class="col-md-8 pt-5" data-aos="fade-up">
          <p style="text-align: center;">
          <h2>Aina.com, la plateforme de <span class="text-primary">tous les contenus</span></h2>
          Pour tous vos besoins dans le domaine de la rédaction dans votre entreprise le personnel de Aina.com vous assiste dans la création de tous vos contenus.
          </p>

        </div>
      </div>

      <div class="row justify-content-center" data-aos="fade-left">

        <div class="col-lg-3 col-6">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/gallery/ecommerce.svg" alt="image/ecommerce" />

            <p>Rédaction pour les TPE, PME, Start-up puis en dessous de ces mots </p>
            <ul>
              <li>commander des articles de blog, des contenus marketing ou des rédactions de page web. </li>
              <li><b>Captivante et performante</b></li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Commander des textes</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6 mt-4 mt-md-0">
          <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/gallery/business.svg" alt="...." />

            <p>rédaction pour les sites <br> de e-commerce.</p>
            <ul>
              <li>commander les fiches de produits convaincantes et des textes optimisés pour référencement naturel par nos rédacteur SEO. </li>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Commander des textes</a>
              </div>
          </div>
        </div>

        <div class="col-lg-3 col-6 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/gallery/agence.svg" alt="...." />

            <p>rédacteur pour les agences web</p>
            <ul>
              <li>respectez vos deadlines et livrer à vos clients des textes de <br> <b>qualité adoptés à leur problématique.</b> </li>
              <li class="text-white p-2">............</li>
              <div class="btn-wrap">
                <a href="#" class="btn-buy border nan">Commander un devis</a>
              </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- Section Redactor -->
  <div class="details">
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
                <a href="#" class="btn text-white border border-1 p-3 rounded-5">Commander des textes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--End Section Redactor -->


</main><!-- End #main -->

<section id="contact" class="contact">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Nous contacter</p>
    </div>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Localisation:</h4>
            <p>Akwa, Douala, Cameroun.</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>worldwideweb-international-business.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Apler-nous:</h4>
            <p>+237 5589 55488 55</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre e-mail" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet du message" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Ecrire votre message ici..." required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Envoyer</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection
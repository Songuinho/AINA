@extends('layouts.mainLayout', ['focus' => 'contact'])

@section('title')
Aina | Contact
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h2>We are team of talented designers making websites with Bootstrap</h2>
        </div>
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

<!-- ======= Contact Section ======= -->
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

          <div class="form-group mt-3">
            <input type="file" class="form-control" name="file" id="subject" required>
            <div class="small text-muted mt-2">Ajouter un fichier. Taille maximum 50 MB</div>
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

@endsection
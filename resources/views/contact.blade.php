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
          <h2>Pour toutes préoccupations à propos de nos services ou de nos produits, bien vouloir nous contacter en remplissant le formulaire ci-dessous. <br> Notre réponse se fera dans les plus brefs delais. Vous pouvez aussi nous appeler pendant nos heures d'ouverture.</h2>
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
            <p> BP 6469, 309 Rue Franqueville <br>
              Immeuble AXA, Akwa, Douala, Cameroun.</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p> aina.redaction@yahoo.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Appeler-nous:</h4>
            <p>+237 698 307 457</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

        <div class="text-success">
          @if(session()->has("message"))
          <div class="alert alert-success">{{session()->get('message')}}</div>
          @endif
        </div>

        <form action="{{ route('send.mail') }}" method="post" role="form">
          @csrf
          <div class="row">

            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Votre nom">
              <span class="danger">
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Votre e-mail">
              <span class="danger">
                @error('email')
                {{$message}}
                @enderror
              </span>
            </div>
          </div>

          <div class="form-group mt-3">
            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Objet du message">
            <span class="danger">
              @error('subject')
              {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="5" value="{{ old('message') }}" placeholder="Insérer votre message ici..."></textarea>
            <span class="danger">
              @error('message')
              {{$message}}
              @enderror
            </span>
          </div>

          <div class="form-group mt-3">
            <input type="file" class="form-control" name="file" id="subject">
            <div class="small text-muted mt-2">Ajouter un fichier. Taille maximum 50 MB</div>
          </div>
          <div class="text-center" id="send"><button type="submit">Envoyer</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

@endsection
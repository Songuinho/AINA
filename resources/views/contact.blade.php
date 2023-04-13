@extends('layouts.mainLayout', ['focus' => 'contact'])

@section('title')
Aina | Contact
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section id="contact-hero">

  <div class="container">
    <div class="row justify-content-center">
      <div class="align-items-center">
        <div data-aos="zoom-out">
          <h4 class="text-white">Pour toutes préoccupations à propos de nos services ou de nos produits, bien vouloir nous contacter en remplissant le formulaire ci-dessous. Notre réponse se fera dans les plus brefs delais. Vous pouvez aussi nous appeler pendant nos heures d'ouverture.</h4>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container">

    <div class="text-warning">
      @if(session()->has("Errormessage"))
      <div class="alert alert-warning">{{session()->get('Errormessage')}}</div>
      @endif
    </div>

    <div class="text-success">
      @if(session()->has("message"))
      <div class="alert alert-success">{{session()->get('message')}}</div>
      @endif
    </div>

    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <p>Une erreur c'est produite !</p>
    </div>
    @endif

    <div class="section-title" data-aos="fade-up">
      <p>Nous contacter</p>
    </div>

    <div class="row">

      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

        <form action="{{ route('send.mail') }}" method="post" role="form">
          @csrf
          <div class="row">

            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Votre nom">
              @error('name')
              <span class="text-danger">
                {{$message}}
              </span>
              @enderror

            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Votre e-mail">
              @error('email')
              <span class="text-danger">
                {{$message}}
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group mt-3">
            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Objet du message">
            @error('subject')
            <span class="text-danger">
              {{$message}}
            </span>
            @enderror
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" value="{{ old('message') }}" placeholder="Insérer votre message ici..."></textarea>
            <span class="danger">
            </span>
          </div>

          <div class="form-group mt-3">
            <input type="file" class="form-control" name="file" id="subject">
            <div class="small text-muted mt-2">Ajouter un fichier. Taille maximum 50 MB</div>
          </div>
          <div class="text-center mt-4" id="send"><button type="submit">Envoyer</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

<div class="row" data-aos="zoom-in" data-aos-delay="100">
  <div class="col-lg-12 mt-3" style="height: 500px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15919.398942129286!2d9.7678687!3d4.0510564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610ddf3daa48b9%3A0x3361faf4cace0140!2sAxa%20Assurance%20-%20Douala!5e0!3m2!1sfr!2scm!4v1681376701421!5m2!1sfr!2scm" class="h-100 w-100" style="border:0;"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>


@endsection
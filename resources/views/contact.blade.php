@extends('layouts.mainLayout', ['focus' => 'contact'])

@section('title')
Aina | Contact
@endsection

@section('content')

<!-- ======= Contact Section =======  -->

<section class="ftco-section img bg-hero text-white" style="margin-top: 8em;">
  <div class="container">
    <div class="row justify-content-center" >
      <div class="message col-md-6" data-aos="zoom-out" data-aos-delay="300">
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
      </div>
      <div data-aos="zoom-out">
        <h4 class="text-white"> Si vous avez des questions ou besoins particuliers, n’hésitez pas à nous contacter.</h4>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-11">
        <div class="wrapper">
          <div class="row no-gutters justify-content-between">
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-out" data-aos-delay="300">
              <div class="info-wrap w-100 p-5">
                <h3 class="mb-4">Infos</h3>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 20px;">
                    <span class="fa fa-map-marker "></span>
                  </div>
                  <div class="text pl-4">
                    <p><span>Address:</span>BP 6469, 309 Rue Franqueville
                      Immeuble AXA, Akwa, Douala</p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 20px;">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text pl-4">
                    <p><span>Email:</span>aina.redaction@yahoo.com </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="300">
              <div class="contact-wrap w-100 p-md-5 p-4 bg-white text-dark rounded-2">
                <h3 class="mb-4">Nous contacter</h3>
                <div id="form-message-warning" class="mb-4"></div>

                <form action="{{ route('send.mail') }}" method="post" id="contactForm">
                  @csrf

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Votre nom">

                    </div>

                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Votre e-mail">
                    </div>
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Objet du message">
                  </div>

                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" value="{{ old('message') }}" placeholder="Insérer votre message ici..."></textarea>
                    <span class="danger">
                    </span>
                  </div>
                  <div class="text-center mt-3" id="send"><button class="col-md-6 btn btn-primary" type="submit">Envoyer</button></div>
              </div>
            </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  </div>
</section><!-- End Contact Section  -->

<div class="row" data-aos="zoom-in" data-aos-delay="100">
  <div class="col-lg-12" style="height: 350px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15919.398942129286!2d9.7678687!3d4.0510564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610ddf3daa48b9%3A0x3361faf4cace0140!2sAxa%20Assurance%20-%20Douala!5e0!3m2!1sfr!2scm!4v1681376701421!5m2!1sfr!2scm" class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection
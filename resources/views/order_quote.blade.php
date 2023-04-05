@extends('layouts.mainLayout' , ['focus' => "orderquote"])

@section('title')
Aina | Commander un devis
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h2>Décrivez vos besoins (rédaction,intégration et tradcution), notre équipe reviendra rapidement vers vous pour vous accompagner dans votre projet.</h2>
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
            <p>Nous contacter</p>
        </div>

        <div class="row">

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

                <div class="text-success">
                    @if(session()->has("message"))
                    <div class="alert alert-success">{{session()->get('message')}}</div>
                    @endif
                </div>

                <form action="{{ route('send.mail') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Votre nom" required>
                            <span class="danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre e-mail" required>
                            <span class="danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Objet du message" required>
                        <span class="danger">
                            @error('subject')
                            {{$message}}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Ecrire votre message ici..." required></textarea>
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
                    <div class="text-center"><button type="submit">Envoyer</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->


@endsection
@extends('layouts.mainLayout' , ['focus' => "orderquote"])

@section('title')
Aina | Commander un devis
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="contact-hero">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h4 class="text-white">Décrivez vos besoins (rédaction,intégration et tradcution), notre équipe reviendra rapidement vers vous pour vous accompagner dans votre projet.</h4>
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
                        <input type="file" class="form-control" name="file" id="subject" multiple/>
                        <div class="small text-muted mt-2">Ajouter un fichier. Taille maximum 50 MB</div>
                    </div>
                    <div class="text-center" id="send"><button type="submit">Envoyer</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->


@endsection
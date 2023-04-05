@extends('layouts.mainLayout', ['focus' => "integration"])

@section('title')
Aina | Redaction
@endsection


@section('content')
<!--Section Hero -->
<section id="integrateur">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<section id="faq" class="faq section-bg">
    <div class="container" id="redactor">

        <div class="section-title" data-aos="fade-up">
            <h2>Externaliser l'intégration de vos contenus web</h2>
        </div>

        <div class="faq-list animated">
            <ul>
                <li data-aos="fade-up">
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                        <p>
                        Faire l'intégtration n'a toujours pas été facile pour bon nombre de personne par ce qu'elle necessite un sens aigu des détails et un savoir faire particulier. c'est la raison pour laquelle  nous avons à notre disposition du personnel capable de faire l'intégration de vos textes ou données sur CMS et ce façon minissieuse. 
                        </p>
                        <a href="{{route('orderquote')}}">Demander votre dévis</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

@endsection
@extends('layouts.mainLayout', ['focus' => "integration"])

@section('title')
Aina | Redaction
@endsection


@section('content')
<!--Section Hero -->
<section id="integrateur">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h2 class="text-white">Externaliser l'intégration de vos contenus web</h2>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<section id="faq" class="faq section-bg">
    <div class="container" id="redactor">

        <div class="faq-list animated">
            <ul>
                <li data-aos="fade-up">
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                        <p>
                            Faire l'intégtration n'a toujours pas été facile pour bon nombre de personne par ce qu'elle necéssite un sens aigu des détails et un savoir faire particulier. c'est la raison pour laquelle nous avons à notre disposition du personnel capable de faire l'intégration de vos textes ou données sur un CMS et ce façon minissieuse.
                        </p>
                        <div class="d-flex" data-aos="zoom-out">
                            <div class="btn-wrap pricing mt-3" id="pricing">
                                <a href="{{ route('orderquote') }}" class="btn-buy">Commander des textes</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

@endsection
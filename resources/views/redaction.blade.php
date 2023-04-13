@extends('layouts.mainLayout' , ['focus' => "redaction"])

@section('title')
Aina | Redaction
@endsection


@section('content')

<section id="redacteur">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h2 class="text-white">Rédigez les contenus de qualités avec nos rédacteurs proféssionnels. </h2>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<!-- Section redaction presentation -->
<section class="ftco-section" data-aos="zoom-out" data-aos-delay="300">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row col-md-12">
                    <h4 class="mb-4">Apporter un niveau différent à votre content marketing en bénéficiant de l'expertise de nos rédacteurs qualifiés.</h4>
                </div>

                <div class="row col-md-12">
                    <h4 class="mb-2">Décrivez vos bésoins <br> et vos consignes </h4>
                    <p class="mb-3">Identifier vos consignes de rédaction et indiquer vos options(HTML, SEO et recherches). Sélectioner en quelques cliques sur notre formulaires de commande vos bésoins.</p>
                </div>

                <hr class="mt-3 text-dark h-5">

                <div class="row justify-content-center">
                    <h4 class="mb-2">Recevez vos articles <br>dans les brefs delais </h4>
                    <p class="mb-3"> Nos agences vous donne la possibilité de vérifier et de demander les ajustements si nécéssaire et ce de façon gratuite .</p>
                </div>

                <hr class="mt-3 text-dark h-5">

                <div class="row justify-content-center">
                    <h4 class="mb-2">Recevez vos contenus <br>personalisés</h4>
                    <p>Après toute rédaction, nous faisons des testes des contenus dans le logiciel CopyScape et par la suite on vous envoie le rapport anti-plagiat.</p>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- End Section redaction presentation -->

<!-- ======= Details Section ======= -->
<section id="details" class="details" style="background-color: #fbfbf5;  margin-bottom: 5em;">
    <div class="container">

        <div class="row content">
            <div class="col-md-5 mt-5 order-1 order-md-2 " id="redactor" data-aos="fade-left">
                <img src="assets/img/aina_pictures/rédacteur4.jpg" class="img-fluid rounded-3 animated" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
                <h3 style="color: gray;">Passez la commmande de votre premier texte dès maintenant.</h3>
                <p>
                    Bénéficiez de l'expertise de nos rédacteurs proféssionnels <b> Pour recevoir et rédiger les articles rapidement.</b>
                </p>
                <div class="icon-box text-align-center">
                    <p>N'hésitez pas à nous appeler pour tous besoins d'aide ou d'un accompagenment pour ce qui concerne la mise en place d'une première commande ou l'étude d'une demande bien spécifique. </p>
                    <div class="d-flex" col-md-6 data-aos="zoom-out">
                        <!-- <div class="icon"><img src="assets/img/gallery/whatsap.svg" width="80px" height="60px"></div> -->
                        <div class="btn-wrap pricing mt-3" id="pricing">
                            <a href="{{ route('orderquote') }}" class="btn-buy">Commander des textes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Details Section -->


@endsection
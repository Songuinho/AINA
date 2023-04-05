@extends('layouts.mainLayout' , ['focus' => "redaction"])

@section('title')
Aina | Redaction
@endsection


@section('content')

<section id="redacteur">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
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
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="work-wrap d-md-flex">
                            <div class="img order-md-last" style="background-image: url(carousel/images/work-1.jpg);"></div>
                            <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                <div class="desc w-100">
                                    <div class="row justify-content-end">
                                        <h4 class="mb-2">Apporter un niveau différent <br> à votre content marketing</h4>
                                        <p>en bénéficiant de l'expertise de nos rédacteurs qualifiés.</p>
                                    </div>
                                </div>
                                <p>
                                    <a href=" route('orderquote')}}" type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Commander un dévis</a>
                                    <a href="{{ route('ordertext')}}" type="button" class="btn btn-dark mb-2 py-3 px-4">Commander des textes</a>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work-wrap d-md-flex">
                            <div class="img order-md-last" style="background-image: url(carousel/images/work-2.jpg);"></div>
                            <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                <div class="desc w-100">
                                    <div class="row justify-content-center">
                                        <h4 class="mb-2">Décrivez vos bésoins <br> et vos consignes </h4>
                                        <p>Identifier vos consignes de rédaction et indiquer vos options(HTML, SEO et recherches). Sélectioner en quelques cliques sur notre formulaires de commande vos bésoins.</p>
                                    </div>
                                </div>
                                <p>
                                    <a href=" route('orderquote')}}" type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Commander un dévis</a>
                                    <a href="{{ route('ordertext')}}" type="button" class="btn btn-dark mb-2 py-3 px-4">Commander des textes</a>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work-wrap d-md-flex">
                            <div class="img order-md-last" style="background-image: url(carousel/images/work-3.jpg);"></div>
                            <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                <div class="desc w-100">
                                    <div class="row justify-content-center">
                                        <h4 class="mb-2">Recevez vos articles <br>dans les brefs delais </h4>
                                        <p> Nos agences vous donne la possibilité de vérifier et de demander les ajustements si nécéssaire et ce de façon gratuite .</p>
                                    </div>
                                </div>
                                <p>
                                    <a href=" route('orderquote')}}" type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Commander un dévis</a>
                                    <a href="{{ route('ordertext')}}" type="button" class="btn btn-dark mb-2 py-3 px-4">Commander des textes</a>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="work-wrap d-md-flex">
                            <div class="img order-md-last" style="background-image: url(carousel/images/work-4.jpg);"></div>
                            <div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
                                <div class="desc w-100">
                                    <div class="row justify-content-center">
                                        <h4 class="mb-2">Recevez vos contenus <br>personalisés</h4>
                                        <p>Après toute rédaction, nous faisons des testes des contenus dans le logiciel CopyScape et par la suite on vous envoie le rapport anti-plagiat.</p>
                                    </div>
                                </div>
                                <p>
                                    <a href=" route('orderquote')}}" type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Commander un dévis</a>
                                    <a href="{{ route('ordertext')}}" type="button" class="btn btn-dark mb-2 py-3 px-4">Commander des textes</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section redaction presentation -->

<!-- ======= Details Section ======= -->
<section id="details" class="details" style="background-color: #fbfbf5; margin-top: 2em;">
    <div class="container">

        <div class="row content">
            <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                <img src="assets/img/gallery/degressive.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                <h3 style="color: gray;">Passez la commmande de votre premier texte dès maintenant.</h3>
                <p>
                    Bénéficiez de l'expertise de nos rédacteurs proféssionnels <b> Pour recevoir et rédiger les articles rapidement.</b>
                </p>
                <div class="icon-box text-align-center">
                    <p>N'hésitez pas à nous appeler pour tous besoins d'aide ou d'un accompagenment pour ce qui concerne la mise en place d'une première commande ou l'étude d'une demande bien spécifique. </p><br>
                    <div class="icon flex-grow-1"><img src="assets/img/gallery/whatsap.svg" width="80px" height="60px"></div>
                    <p class="flex-grow-1">
                        Commander des textes <span class="text-success">+237 698 307 457</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Details Section -->


@endsection
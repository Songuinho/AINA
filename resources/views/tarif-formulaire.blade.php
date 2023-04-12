@extends('layouts.mainLayout', ["focus" => "tarif"])

@section('title')
Aina | Tarif et formule
@endsection


<section id="contact-hero">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h4 class="text-white">Parcourez nos tarifs et formules.</h4>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<!-- ======= Pricing Section ======= -->
<section id="pricing" class="tarif-pricing">
    <div class="container">
        <div class="row" data-aos="fade-left">
            <div class="col-lg-4 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/gallery/ecommerce.svg" width="50%" height="10%" alt="">
                    <p>Rédaction pour les TPE, PME et start-up puis en-dessous</p>
                    <ul>
                        <li>Commander des articles de blog, des contenus marketing ou des rédaction de pages web.</li>
                        <li><b>Captivante et performante.</b></li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="{{ route('ordertext') }}" class="btn-buy">Commander des textes</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/gallery/business.svg" width="50%" height="10%" alt="">
                    <p>Rédaction pour les sites <br> de e-commerce</p>
                    <ul>
                        <li>Commander des fiches de produits correspondantes et des textes optimisés </li>
                        <li><b>pour un référencement naturel.</b></li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="{{ route('ordertext') }}" class="btn-buy">Commander des textes</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/gallery/agence.svg" width="49%" height="10%" alt="">
                    <p>Rédacteur pour <br> les agences web.</p>
                    <ul>
                        <li>Respectez vos deadlines et livrez à vos clients <br> des textes de qualité</li>
                        <li><b> adoptée à leur problématique.</b></li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="{{ route('orderquote') }}" class="btn-buy">Commander un devis</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Pricing Section -->

@section('content')
@endsection
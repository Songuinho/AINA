@extends('layouts.mainLayout', ["focus" => "about-us"])

@section('title')
Aina | A propos de nous
@endsection


@section('content')
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2 class="text-primary">Un personnel professionnel à votre service.</h2>
        </div>

        <div class="row mt-5" data-aos="fade-left">

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic">
                    </div>
                    <div class="member-info">
                        <h4>Ondobo Okala Fabrice</h4>
                        <span>Rédacteur</span>
                        <div class="social">
                            <a href=""><i class="bi bi-whatsapp"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic">
                    </div>
                    <div class="member-info">
                        <h4>Tchounkeu Nana</h4>
                        <span>Chef de projet</span>
                        <div class="social">
                            <a href=""><i class="bi bi-whatsapp"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pic">
                    </div>
                    <div class="member-info">
                        <h4>Lieukap Kamnang</h4>
                        <span>Intégrateur</span>
                        <div class="social">
                            <a href=""><i class="bi bi-whatsapp"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="500">
                    <div class="pic">
                    </div>
                    <div class="member-info">
                        <h4>Tsobgni Yann</h4>
                        <span>Rédacteur et Traducteur</span>
                        <div class="social">
                            <a href=""><i class="bi bi-whatsapp"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row content justify-content-center">
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    <p style="text-align: center;">
                        L’association de talent et rapidité font de notre équipe des professionnels de la rédaction. Grace à ses deux qualités, nous vous garantissons un travail bien fait et ceux dans les brefs délais. </p>

                </div>
            </div>

        </div>

    </div>
</section><!-- End Team Section -->
@endsection
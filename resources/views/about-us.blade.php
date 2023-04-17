@extends('layouts.mainLayout', ["focus" => "about-us"])

@section('title')
Aina | A propos de nous
@endsection


@section('content')

<section id="about-hero">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h4 class="text-white fs-2">A propos d' AINA</h4>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<section id="about-team">
    <div class="container col-lg-12">

        <div class="row">
            <div data-aos="fade-up">
                <h3 class="text-info">Notre agence</h3>
            </div>
            <div data-aos="fade-up">
                <p>
                    Ce projet est né suite à la rencontre entre Monsieur FAUSSI consultant marketing, PDG de l'entreprise WIB et Madame TCHOUNKEU NANA rédactrice web senior et Gestionnaire des Ressources Humaines. Ces deux personnes donc la conviction est la même, ont pris l’initiative de mettre sur pied une entreprise de rédaction web afin de pallier le manque de rédacteur qui se vit dans le monde en général. </p>

            </div>
        </div>

        <hr class="mt-3 text-info h-5">

        <div class="row mt-5">
            <div data-aos="fade-up">
                <h3 class="text-info">Notre Vision</h3>
            </div>
            <div data-aos="fade-up">
                <p>
                    La vision de cette entreprise nouvellement créée est de devenir l’une des meilleures agences de rédaction web sur le plan national et international. Pour parvenir à cela, les membres du directoire de l’entreprise ont pour mission de mettre en place de nombreuses ressources composées d’un personnel dont la capacité pour l’écriture est innée, capable d’utiliser l’outil informatique qui leur permettra de faire les investigations pour la rédaction, la traduction et l'intégration des contenues. De mettre enfin le matériel adéquate qui va nous aider à atteindre les objectifs. </p>

            </div>
        </div>

        <hr class="mt-3 text-info h-5">

    </div>
</section><!-- End Team Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="row " data-aos="fade-up">
            <h3 class="text-info" style="margin-bottom: 2em;">Notre équipe</h3>
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
                            <a><i class="bi bi-whatsapp"></i></a>
                            <a><i class="bi bi-facebook"></i></a>
                            <a><i class="bi bi-linkedin"></i></a>
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
                            <a><i class="bi bi-whatsapp"></i></a>
                            <a><i class="bi bi-facebook"></i></a>
                            <a><i class="bi bi-linkedin"></i></a>
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
                            <a><i class="bi bi-whatsapp"></i></a>
                            <a><i class="bi bi-facebook"></i></a>
                            <a><i class="bi bi-linkedin"></i></a>
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
                            <a><i class="bi bi-whatsapp"></i></a>
                            <a><i class="bi bi-facebook"></i></a>
                            <a><i class="bi bi-linkedin"></i></a>
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
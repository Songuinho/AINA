@extends('layouts.mainLayout' , ['focus' => "traduction"])

@section('title')
Aina | Redaction
@endsection


@section('content')

<!--Section Hero -->
<section id="traducteur">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h2 class="text-white">Sollicitez les services de notre agence de traduction.</h2>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container-fluid mb-5">

        <div class="row" id="redactor">
            <div class="col-xl-5 animated col-lg-6 traduction-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                <p>
                    Nous sommes spécialisés dans la traduction de vos contenus. De ce fait, nous pouvons traduire selon votre secteur d'activité vos textes dans plus de 10 langues.
                </p>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><svg class="svg-inline--fa fa-file-certificate fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="file-certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M243.1 339.2c10.35-10.58 14.41-26.13 10.6-40.52C251 285.2 250.1 290.8 254.6 277.3c3.844-14.56-.2813-30.14-10.72-40.58C234 226.8 234.1 228.4 231.4 214.9C227.7 200.4 216.5 188.1 202.1 185.1C188.7 181.4 190.5 182.6 180.7 172.4c-10.53-10.69-25.85-14.89-40.35-11.03c-13.36 3.654-11.29 3.646-24.63 0C101.2 157.5 85.87 161.8 75.33 172.4C65.46 182.6 67.26 181.4 53.86 185.1c-14.35 3.891-25.6 15.33-29.29 29.86C21.01 228.4 21.97 226.8 12.14 236.7c-10.44 10.44-14.57 26.02-10.72 40.58C5.037 290.8 4.982 285.2 1.447 298.7c-3.814 14.39 .25 29.94 10.6 40.52c10.04 10.09 8.904 8.18 12.47 22.03c3.875 14.42 15.16 25.8 29.44 29.67c5.164 1.424 7.836 2.188 10.03 3.115V496c0 5.547 2.877 10.69 7.596 13.61c4.689 2.875 10.6 3.156 15.57 .7031L128 489.9l40.85 20.42C171.1 511.4 173.6 512 176 512c2.938 0 5.844-.7969 8.406-2.391C189.1 506.7 192 501.5 192 496v-101.1c2.197-.9297 4.869-1.691 10.03-3.115c14.28-3.877 25.57-15.25 29.44-29.67C235.1 347.4 233.9 349.3 243.1 339.2zM160 470.1l-24.85-12.42c-4.502-2.25-9.814-2.25-14.31 0l-24.85 12.42v-55.32c6.422 1.434 13.16 1.549 19.69-.2305c13.69-3.682 11.03-3.656 24.63 0c6.537 1.779 13.27 1.664 19.69 .2305V470.1zM222.4 302.1c2.328 8.818 3.051 10.34-3.938 17.41c-11.5 11.61-12.94 14.19-17.88 33.46c-1.557 5.934-6.199 6.881-10.31 8.016c-15.82 4.344-18.35 5.844-30.07 17.7c-5.387 5.457-6.715 6.299-14.69 4.094c-15.88-4.35-18.98-4.371-34.94 0c-7.975 2.205-9.301 1.363-14.69-4.094c-11.72-11.86-14.25-13.36-30.07-17.7c-4.117-1.135-8.758-2.082-10.31-8.016c-4.939-19.27-6.377-21.85-17.88-33.46C30.59 312.5 31.31 310.9 33.64 302.1C37.08 289.3 37.08 286.4 33.61 273.8C31.38 265.5 30.52 263.6 37.17 256.9c11.75-11.91 13.22-14.45 17.44-30.42c2.139-8.055 2.697-9.232 11.13-11.53c15.91-4.344 18.44-5.844 30.1-17.75c5.346-5.414 6.725-6.238 14.72-4.047c16.07 4.393 18.81 4.393 34.88 0c8-2.191 9.377-1.367 14.72 4.047c11.66 11.91 14.19 13.41 30.1 17.75C198.7 217.3 199.3 218.5 201.4 226.5C205.6 242.5 207.1 245 218.8 256.9c6.654 6.697 5.787 8.58 3.562 16.81C218.9 286.4 218.9 289.3 222.4 302.1zM493.3 125.3l-106.5-106.5C374.7 6.742 358.5 0 341.5 0L191.1-.0001c-35.35 0-64 28.65-64 64L128 112C128 120.8 135.2 128 144 128C152.8 128 160 120.8 160 112V64c0-17.67 14.33-32 32-32h128v112C320 170.5 341.5 192 368 192H480v256c0 17.67-14.33 32-32 32H240C231.2 480 224 487.2 224 496C224 504.8 231.2 512 240 512l207.1-.0001c35.35 0 64-28.65 64-64v-277.5C512 153.5 505.3 137.3 493.3 125.3zM368 160C359.2 160 352 152.8 352 144V34.08c4.477 1.566 8.666 3.846 12.12 7.299l106.5 106.5C474.1 151.3 476.4 155.5 477.9 160H368z"></path>
                        </svg></div>
                    <h4 class="title"><a href="">Traduction proféssionnelle</a></h4>
                    <p class="description">Nous transposons vos textes d'une langue à une autre tout en préservant son sens et sa qualité.</p>
                </div>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><svg class="svg-inline--fa fa-head-side-brain fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="head-side-brain" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M32 224C32 118 118 32 224 32h24c65.6 0 122.1 39.5 146.8 96.1c2.4 5.5 4.8 11.1 7.2 16.9l0 0c15.4 36.6 32.9 78 65.4 106.9l3.2 2.8c6 5.3 9.5 13 9.5 21.1c0 15.6-12.6 28.2-28.2 28.2H432c-8.8 0-16 7.2-16 16v64c0 17.7-14.3 32-32 32H304c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V448h64c35.3 0 64-28.7 64-64V336h3.8c33.2 0 60.2-26.9 60.2-60.2c0-17.2-7.4-33.6-20.2-45l-3.2-2.8c-26.7-23.7-41-57.5-56.8-94.6l0 0c-2.5-6-5.1-12-7.7-18.1C394.5 47.5 326.8 0 248 0H224C100.3 0 0 100.3 0 224c0 52.9 18.4 101.6 49.1 140C58.5 375.6 64 388.6 64 401.4V496c0 8.8 7.2 16 16 16s16-7.2 16-16V401.4c0-22.1-9.5-41.9-21.9-57.4C47.7 311.1 32 269.4 32 224zm171.1-99.8c4.1-7.3 12-12.2 20.9-12.2s16.8 4.9 20.9 12.2c4.3 7.6 13.9 10.4 21.6 6.2c2.8-1.5 6-2.4 9.5-2.4c7 0 13.2 3.6 16.8 9.1c3.4 5.2 9.5 8 15.7 7.1c1.1-.2 2.3-.3 3.5-.3c13.3 0 24 10.7 24 24s-10.7 24-24 24H268.7c-5.4 0-10.4 2.7-13.4 7.2s-3.4 10.2-1.3 15.2c1.3 2.9 2 6.2 2 9.6c0 11.6-8.2 21.3-19.2 23.5c-8.7 1.8-14.3 10.2-12.5 18.9s10.2 14.3 18.9 12.5c25.6-5.2 44.8-27.8 44.8-54.9h24c30.9 0 56-25.1 56-56c0-30.4-24.2-55.2-54.5-56c-9.5-9.9-22.8-16-37.5-16c-4 0-7.8 .4-11.5 1.3C254.3 86.6 239.9 80 224 80s-30.3 6.6-40.5 17.3C179.8 96.4 176 96 172 96c-22.2 0-41.1 13.9-48.6 33.4C98.6 135.1 80 157.4 80 184c0 19.2 9.7 36.1 24.3 46.2c3.1 28 26.8 49.8 55.7 49.8v24c0 8.8 7.2 16 16 16s16-7.2 16-16V260.7c0-5.4-2.7-10.4-7.2-13.4s-10.2-3.4-15.2-1.3c-2.9 1.3-6.2 2-9.6 2c-13.3 0-24-10.7-24-24c0-.7 0-1.3 .1-2c.6-6.8-3.3-13.3-9.6-16c-8.6-3.7-14.5-12.2-14.5-22c0-13.3 10.7-24 24-24l.2 0c8.2 0 15-6.1 15.9-14.2c1.1-10 9.6-17.8 19.9-17.8c3.5 0 6.7 .9 9.5 2.4c7.7 4.2 17.3 1.4 21.6-6.2z"></path>
                        </svg></div>
                    <h4 class="title"><a href="">Traduction 100% humaine</a></h4>
                    <p class="description">Aina fait dans la traduction 100% humaine afin de garantir l'exatitude et la qualité de chaque traduction.</p>
                </div>

                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><svg class="svg-inline--fa fa-calendar-days fa-2xl pr-4" aria-hidden="true" width='30' focusable="false" data-prefix="fal" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M112 0C120.8 0 128 7.164 128 16V64H320V16C320 7.164 327.2 0 336 0C344.8 0 352 7.164 352 16V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H96V16C96 7.164 103.2 0 112 0zM416 192H312V264H416V192zM416 296H312V376H416V296zM416 408H312V480H384C401.7 480 416 465.7 416 448V408zM280 376V296H168V376H280zM168 480H280V408H168V480zM136 376V296H32V376H136zM32 408V448C32 465.7 46.33 480 64 480H136V408H32zM32 264H136V192H32V264zM168 264H280V192H168V264zM384 96H64C46.33 96 32 110.3 32 128V160H416V128C416 110.3 401.7 96 384 96z"></path>
                        </svg></div>
                    <h4 class="title"><a href="">Livraison dans les temps</a></h4>
                    <p class="description">Nous sommes fiers de proposer une livraison rapide pour tous nos services.</p>
                </div>

            </div>
        </div>

    </div>
</section><!-- End About Section -->


<!-- ======= Features Section ======= -->
<section id="features" class="features" style="background: #dbf2e6;">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Nos différents types de traduction</h2>
        </div>

        <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                    <h3><a>Traduction tourisme</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                    <h3><a>Traduction scientifique</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                    <h3><a>Traduction E-commerce</a></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bi bi-journal-bookmark-fill" style="color: #e80368;"></i>
                    <h3><a>Traduction juridique</a></h3>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Features Section -->

<section id="details" class="details">
    <div class="container">

        <div class="row content">
            <div class="col-md-4" data-aos="fade-right" id="redactor">
                <img src="assets/img/aina_pictures/fonctionnement.png" class="img-fluid rounded animated" alt="">
            </div>
            <div class="col-md-8 pt-4" data-aos="fade-up">
                <h3>Fonctionnement</h3>
                <p>
                    Nous avons un mode de fonctionnement rapide, il permet de nous adapter à tous vos besoin. Pour pouvoir vous aidez à avoir des meilleurs traductions, nous travaillons du plus simple au plus important ainsi definie tel-que :
                </p>
                <ul>
                    <li><i class="bi bi-check"></i> L'identification des besoin.</li>
                    <p>Ici, vous dévrez définir vos besoins, énumérer minussieusement vos attentes pour la traduction de vos contenus puis faire le paiement de votre commande pour nous permettre de transmettre cela au rédacteur. </p>
                    <li><i class="bi bi-check"></i> L'optention des traductions.</li>
                    <p>Une fois la transaction finie, vous pourriez échanger avec notre chef de projet. S'il arrive que les textes traduis ne sont pas à votre convénance, de ce part, vous pourrez demander des modifications qui ne seront pas facturées.</p>
                </ul>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-4 order-1 order-md-2 mt-5" id="redactor" data-aos="fade-left">
                <img src="assets/img/aina_pictures/traduction.jpg" class="img-fluid animated rounded-3" alt="">
            </div>
            <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                <h3>Solliciter notre expertise dans la traduction quel qu'en soit votre domaine de compétence</h3>
                <p>
                    En choisissnat notre agence pour une commande de traduction, vous bénéfissiez du professionnalisme de notre personnel. Nos experts traducteurs ont la qualité de s'adapter dans la traduction dans tous secteurs d'activité professionnel.
                </p>
                <div class="d-flex" data-aos="zoom-out">
                    <div class="btn-wrap pricing mt-3" id="pricing">
                        <a href="{{ route('tarif') }}" class="btn-buy">Commander des textes</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

@endsection
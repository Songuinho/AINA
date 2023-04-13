@extends('layouts.mainLayout', ["focus" => "tarif"])

@section('title')
Aina | Tarif et formule
@endsection


@section('content')

<section id="tarif-hero">

    <div class="container">
        <div class="row justify-content-center">
            <div class="align-items-center">
                <div data-aos="zoom-out">
                    <h4 class="text-white">Pour des textes originaux, pertinents et adaptés à votre domaine d'activité n'hésiter pas à nous contacter.</h4>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<!-- ======= Pricing Section ======= -->
<section id="pricing" class=" pricing">
    <div class="container">
        <div class="row" data-aos="fade-left">
            <div class="col-lg-4 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/img/gallery/ecommerce.svg" width="180px" height="180px" alt="">
                    <p>Rédaction pour les TPE, PME et start-up puis en-dessous</p>
                    <ul>
                        <li>Commander des articles de blog, des contenus marketing ou des rédaction de pages web.</li>
                        <li><b>Captivante et performante.</b></li>
                    </ul>
                    <!-- <div class="btn-wrap">
                        <a href="{{ route('ordertext') }}" class="btn-buy">Commander des textes</a>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-lg-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/gallery/business.svg" width="180px" height="180px" alt="">
                    <p>Rédaction pour les sites <br> de e-commerce</p>
                    <ul>
                        <li>Commander des fiches de produits correspondantes et des textes optimisés </li>
                        <li><b>pour un référencement naturel.</b></li>
                    </ul>
                    <!-- <div class="btn-wrap">
                        <a href="{{ route('ordertext') }}" class="btn-buy">Commander des textes</a>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0">
                <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/gallery/agence.svg" width="180px" height="180px" alt="">
                    <p>Rédacteur pour <br> les agences web.</p>
                    <ul>
                        <li>Respectez vos deadlines et livrez à vos clients <br> des textes de qualité</li>
                        <li><b> adoptée à leur problématique.</b></li>
                    </ul>
                    <!-- <div class="btn-wrap">
                        <a href="{{ route('orderquote') }}" class="btn-buy">Commander un devis</a>
                    </div> -->
                </div>
            </div>

        </div>

    </div>
</section><!-- End Pricing Section -->


<!-- Section array prices -->
<section class="tarifs details" id="tarifs">
    <div class="container" data-aos="zoom-out">
        <div class="s-1 col-lg-12 d-flex justify-content-between" data-aos="fade-up">
            <div class="row content col-lg-8">
                <div class="text">
                    <h1 class="text-primary">Qualité standard
                    </h1>
                    <p>Rédaction de qualité basique pour les textes courts et simples.</p>
                    <ul>
                        <li><i class="bi bi-check"></i>Rédaction humaine sans IA</li>
                        <li><i class="bi bi-check"></i>Protection anti-plagiat</li>
                        <li><i class="bi bi-check"></i>Choix des rédacteurs</li>
                        <li><i class="bi bi-check"></i>Tous les secteurs d’activité</li>
                    </ul>
                </div>
                <div class="tarif-1 ">

                    <label for="nombre-de-textes">Combien de texte souhaitez-vous faire rédiger ?</label>
                    <input type="number" id="nbr_art1" placeholder="1 Textes" class="form-control" />

                    <label for="nombre-de-mots">Quelle longueur souhaitez-vous pour vos textes ?</label>
                    <select id="nbr_mot1" class="form-control">
                        <option value="250">250 mots</option>
                        <option value="300">300 mots</option>
                        <option value="500">500 mots</option>
                        <option value="600">600 mots</option>
                        <option value="700">700 mots</option>
                        <option value="900">900 mots</option>
                        <option value="1000">1000 mots</option>
                    </select>
                </div>
            </div>

            <div class="tarif-2 col-lg-4" style="margin-left: 7em;">
                <div class="card bg-info" style="width: 18rem;">
                    <div class="card-header text-white" style="text-align: center;">
                        standard
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre de textes<input type="text" readonly disabled id="show_nbr_art1" />
                        </li>
                        <li class="list-group-item">Nombre de mots<input type="text" readonly disabled id="show_nbr_mot1" />
                        </li>
                        <li class="list-group-item">Prix HT <br><input type="text" readonly disabled id="prixHT1" />
                        </li>
                        <li` class="list-group-item">Prix TTC <br><input type="text" readonly disabled id="prixTTC1" />
                            </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="mt-5">

        <div class="s-2 ol-lg-12 d-flex mt-5 justify-content-between" data-aos="fade-up">
            <div class=" row content col-lg-8">
                <div class="text">
                    <h1 class="text-primary">Qualité professionnelle</h1>
                    <p>Rédaction de qualité élevée fait pour les textes généralisés pour toute thématique.</p>
                    <ul>
                        <li><i class="bi bi-check"></i>Rédaction humaine sans IA</li>
                        <li><i class="bi bi-check"></i>Protection anti-plagiat</li>
                        <li><i class="bi bi-check"></i>Grand choix des rédacteurs</li>
                        <li><i class="bi bi-check"></i>Expertise dans votre domaines d’activité</li>
                        <li><i class="bi bi-check"></i>Service client privilège</li>
                    </ul>
                </div>

                <div class="tarif-2 mt-3">

                    <label for="nombre-de-textes">Combien de texte souhaitez-vous faire rédiger ?</label>
                    <input type="number" id="nbr_art2" placeholder="1 Textes" class="form-control" />

                    <label for="nombre-de-mots">Quelle longueur souhaitez-vous pour vos textes ?</label>
                    <select id="nbr_mot2" class="form-control">
                        <option value="250">250 mots</option>
                        <option value="300">300 mots</option>
                        <option value="500">500 mots</option>
                        <option value="600">600 mots</option>
                        <option value="700">700 mots</option>
                        <option value="900">900 mots</option>
                        <option value="1000">1000 mots</option>
                    </select>
                </div>

            </div>

            <div class="tarif-2 col-lg-4" style="margin-left: 7em;">
                <div class="card bg-info" style="width: 18rem;">
                    <div class="card-header text-white" style="text-align: center;">
                        Professionnelle
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre de textes<input type="text" readonly disabled id="show_nbr_art2" />
                        </li>
                        <li class="list-group-item">Nombre de mots<input type="text" readonly disabled id="show_nbr_mot2" />
                        </li>
                        <li class="list-group-item">Prix HT <br><input type="text" readonly disabled id="prixHT2" />
                        </li>
                        <li class="list-group-item">Prix TTC <br><input type="text" readonly disabled id="prixTTC2" />
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <hr class="mt-5">

        <div class="s-2 ol-lg-12 d-flex mt-5 justify-content-between" data-aos="fade-up">
            <div class=" row content col-lg-8">
                <div class="text">
                    <h1 class="text-primary">Qualité expert</h1>
                    <p>Rédaction de qualité supérieure fait pour les contenus élaborés et techniques.</p>
                    <ul>
                        <li><i class="bi bi-check"></i>Rédaction humaine sans IA</li>
                        <li><i class="bi bi-check"></i>Protection anti-plagiat</li>
                        <li><i class="bi bi-check"></i>Meilleur choix des rédacteurs</li>
                        <li><i class="bi bi-check"></i>Expertise approfondie dans votre domaine d’activité </li>
                        <li><i class="bi bi-check"></i>Service client privilégié</li>
                        <li><i class="bi bi-check"></i>Chef de projet dédié et un accompagnement personnalisé</li>
                        <li><i class="bi bi-check"></i>Tous les secteurs d’activité</li>
                    </ul>
                </div>

                <div class="tarif-2 mt-3">

                    <label for="nombre-de-textes">Combien de texte souhaitez-vous faire rédiger ?</label>
                    <input type="number" id="nbr_art3" placeholder="1 Textes" class="form-control" />

                    <label for="nombre-de-mots">Quelle longueur souhaitez-vous pour vos textes ?</label>
                    <select id="nbr_mot3" class="form-control">
                        <option value="250">250 mots</option>
                        <option value="300">300 mots</option>
                        <option value="500">500 mots</option>
                        <option value="600">600 mots</option>
                        <option value="700">700 mots</option>
                        <option value="900">900 mots</option>
                        <option value="1000">1000 mots</option>
                    </select>
                </div>

            </div>

            <div class="tarif-2 col-lg-4" style="margin-left: 7em;">
                <div class="card bg-info" style="width: 18rem;">
                    <div class="card-header text-white" style="text-align: center;">
                        Expert
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre de textes<input type="text" readonly disabled id="show_nbr_art3" />
                        </li>
                        <li class="list-group-item">Nombre de mots<input type="text" readonly disabled id="show_nbr_mot3" />
                        </li>
                        <li class="list-group-item">Prix HT <br><input type="text" readonly disabled id="prixHT3" />
                        </li>
                        <li class="list-group-item">Prix TTC <br><input type="text" readonly disabled id="prixTTC3" />
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Section array prices -->


<section id="contact" class="contact">
    <div class="container ">

        <div class="messages" data-aos="zoom-out">
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
        </div>

        <div data-aos="fade-up">
            <h2 style="color: #353232;" id="no-line">Pour un besoin particulier, veuillez contacter notre équipe.</h2>
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
                        <input type="file" class="form-control" name="file" id="subject">
                        <div class="small text-muted mt-2">Ajouter un fichier. Taille maximum 50 MB</div>
                    </div>
                    <div class="text-center" id="send"><button type="submit">Envoyer</button></div>
                </form>

            </div>
        </div>

    </div>

    </div>
</section><!-- End Contact Section -->


<script>
    // Standard

    const pricePerText = 0.04;
    const numberOfWordsInput = document.getElementById("nbr_mot1");
    const numberOfTextsInput = document.getElementById("nbr_art1");
    const totalPriceInputHT = document.getElementById("prixHT1");
    const totalPriceInputTTC = document.getElementById("prixTTC1");

    const numberOfTextsP = document.getElementById("show_nbr_art1");
    const numberOfWordsP = document.getElementById("show_nbr_mot1");

    function calculTotalPrice() {
        const numberOfWords = parseInt(numberOfWordsInput.value);
        const numberOfTexts = parseInt(numberOfTextsInput.value);

        const totalPrice = numberOfTexts * numberOfWords * pricePerText;

        totalPriceInputHT.value = totalPrice.toFixed(2) + "€";
        numberOfTextsP.value = numberOfTexts;
        numberOfWordsP.value = numberOfWords;

        const totalPriceTTC = totalPrice * 0.1925 + totalPrice;
        totalPriceInputTTC.value = totalPriceTTC.toFixed(2) + "€";

    }

    numberOfTextsInput.addEventListener("change", calculTotalPrice);
    numberOfWordsInput.addEventListener("input", calculTotalPrice);

    // Professionnelle


    const pricePerText2 = 0.06;
    const numberOfWordsInput2 = document.getElementById("nbr_mot2");
    const numberOfTextsInput2 = document.getElementById("nbr_art2");
    const totalPriceInputHT2 = document.getElementById("prixHT2");
    const totalPriceInputTTC2 = document.getElementById("prixTTC2");

    const numberOfTextsP2 = document.getElementById("show_nbr_art2");
    const numberOfWordsP2 = document.getElementById("show_nbr_mot2");

    function calculTotalPrice2() {
        const numberOfWords = parseInt(numberOfWordsInput2.value);
        const numberOfTexts = parseInt(numberOfTextsInput2.value);

        const totalPrice2 = numberOfTexts * numberOfWords * pricePerText2;

        totalPriceInputHT2.value = totalPrice2.toFixed(2) + "€";
        numberOfTextsP2.value = numberOfTexts;
        numberOfWordsP2.value = numberOfWords;

        const totalPriceTTC2 = totalPrice2 * 0.1925 + totalPrice2;
        totalPriceInputTTC2.value = totalPriceTTC2.toFixed(2) + "€";

    }

    numberOfTextsInput2.addEventListener("change", calculTotalPrice2);
    numberOfWordsInput2.addEventListener("input", calculTotalPrice2);

    // Expert


    const pricePerText3 = 0.11;
    const numberOfWordsInput3 = document.getElementById("nbr_mot3");
    const numberOfTextsInput3 = document.getElementById("nbr_art3");
    const totalPriceInputHT3 = document.getElementById("prixHT3");
    const totalPriceInputTTC3 = document.getElementById("prixTTC3");

    const numberOfTextsP3 = document.getElementById("show_nbr_art3");
    const numberOfWordsP3 = document.getElementById("show_nbr_mot3");

    function calculTotalPrice3() {
        const numberOfWords = parseInt(numberOfWordsInput3.value);
        const numberOfTexts = parseInt(numberOfTextsInput3.value);

        const totalPrice3 = numberOfTexts * numberOfWords * pricePerText3;

        totalPriceInputHT3.value = totalPrice3.toFixed(2) + "€";
        numberOfTextsP3.value = numberOfTexts;
        numberOfWordsP3.value = numberOfWords;

        const totalPriceTTC3 = totalPrice3 * 0.1925 + totalPrice3;
        totalPriceInputTTC3.value = totalPriceTTC3.toFixed(2) + "€";

    }

    numberOfTextsInput3.addEventListener("change", calculTotalPrice3);
    numberOfWordsInput3.addEventListener("input", calculTotalPrice3);
</script>
@endsection
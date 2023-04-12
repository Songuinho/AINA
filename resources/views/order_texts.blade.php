@extends('layouts.mainLayout' , ['focus' => "ordertext"])

@section('title')
Aina | Commander des textes
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<!-- ======= Hero Section ======= -->
<section id="ordertext-hero">

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

<!-- Section array prices -->
<div class="container" style="margin-top: 3em;" data-aos="zoom-out">
    <div class="row col-xm--3 col-sm-6 mr-5">
        <h1 class="text-primary">Articles standards <h6>(Idéal pour les particuliers)</h6>
        </h1>
        <p>Ici, le redacteur web rédige les contenus pour un ou plusieur sites web</p>
        <div class="tb1">
            <table class="table">
                <thead>Tableau récapitulatif du prix standard des mots</thead>
                <tbody>
                    <tr>
                        <!-- <th><a class="btn btn-primary" onclick="addText()">nouveau texte</a></th> -->
                        <th>Nombre de mot</th>
                        <th>Nombre d'article</th>
                        <th>Prix</th>
                    </tr>
                    <tr id="AddContent">
                        <td>
                            <select id="nbr_mot">
                                <option value="250">250 mots</option>
                                <option value="300">300 mots</option>
                                <option value="500">500 mots</option>
                                <option value="600">600 mots</option>
                                <option value="700">700 mots</option>
                                <option value="900">900 mots</option>
                                <option value="1000">1000 mots</option>
                            </select>
                        </td>
                        <td><input type="text" id="nbr_art" placeholder="10 textes ou articles"></td>
                        <td><input type="text" id="prix_total" readonly><button class="btn btn-primary mt-2 col-12" onclick="calcul()">Afficher le prix</button></td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row col-xm--3 col-sm-6 mr-5">
        <div class="mt-2">
            <h1 class="text-primary">Artciles premium <h6>(Idéal pour les entreprises et particuliers)</h6>
            </h1>
            <div>
                La rédaction prémium est une rédaction où la capacité à écrire des textes qui plaisent aux clients qu'aux moteur de recherche est l'arme ultime du rédacteur. Ici nos rédacteur ont des compétences avisées sur le façonnage des textes taillés aux exigences du réferencement naturel moderne. Pour ce style de texte, ils apportent aux clients des réponses conformes à leur besoin.
            </div>
        </div>
        <div class="tb2 mt-5">
            <table class="table">
                <thead>Tableau récapitulatif du prix premium des mots</thead>
                <tbody>
                    <tr>
                        <th>Nombre de mot</th>
                        <th>Nombre d'article</th>
                        <th>Prix</th>
                    </tr>
                    <tr>
                        <td>
                            <select id="nbr_mot2">
                                <option value="250">250 mots</option>
                                <option value="300">300 mots</option>
                                <option value="500">500 mots</option>
                                <option value="600">600 mots</option>
                                <option value="700">700 mots</option>
                                <option value="900">900 mots</option>
                                <option value="1000">1000 mots</option>
                            </select>
                        </td>
                        <td><input type="text" id="nbr_art2" placeholder="10 textes ou articles"></td>
                        <td><input type="text" id="prix_total2" readonly><button class="btn btn-primary mt-2 col-12" onclick="calculpremium()">Afficher le prix</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Section array prices -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container ">

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

        <div data-aos="fade-up">
            <h2 style="color: #353232;" id="no-line">Pour plus d'informations laissez nous un message.</h2>
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
    function calcul() {

        var nbrArticle = parseInt(document.getElementById('nbr_art').value);


        var nbrMot = parseInt(document.getElementById('nbr_mot').value);

        var prixTotal = (nbrArticle * (nbrMot * 0.04));

        document.getElementById('prix_total').value = prixTotal.toFixed(2) + "€";
    }

    function calculpremium() {

        var nbrArticle = parseInt(document.getElementById('nbr_art2').value);


        var nbrMot = parseInt(document.getElementById('nbr_mot2').value);

        var prixTotal = (nbrArticle * (nbrMot * 0.2));

        document.getElementById('prix_total2').value = prixTotal.toFixed(2) + "€";
    }
</script>


@endsection
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo" style="margin-top: 1em;">
      <!-- <h1 class="text-dark"><a href="{{ route('home') }}"><span class="text-dark">AiNa</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route('home') }}"><img src="assets/img/aina_pictures/aina-bleu-noir.png" alt="" height="170" width="90" class="img-fluid"></a>
      <h6 class="text-dark"><span><i>Les bons mots qui vous démarquent...</i></span></h6>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto text-dark {{ $focus == 'home'? 'active' : ' ' }}" href="{{ route('home') }}">Accueil</a></li>
        @if(($focus == 'redaction') || ($focus == 'integration') || ($focus == 'traduction'))
        <li class="dropdown"><a href="#" class="active"><span class="text-dark">Services</span> <i class="bi bi-chevron-down text-dark"></i></a>
          <ul>
            <li><a href="{{ route('redaction') }}">Rédaction</a></li>
            <li><a href="{{ route('traduction') }}">Traduction</a></li>
            <li><a href="{{ route('integration') }}">Intégration</a></li>
          </ul>
        </li>
        @else
        <li class="dropdown"><a href="#"><span class="text-dark">Services</span> <i class="bi bi-chevron-down text-dark"></i></a>
          <ul>
            <li><a href="{{ route('redaction') }}">Rédaction</a></li>
            <li><a href="{{ route('integration') }}">Intégration</a></li>
            <li><a href="{{ route('traduction') }}">Traduction</a></li>
          </ul>
        </li>
        @endif

        <li class="dropdown"><a href="#"><span class="text-dark">Domaine d'expertise</span> <i class="bi bi-chevron-down text-dark"></i></a>
          <ul>
            <li><a>Art de vivre</a></li>
            <li><a>Culture</a></li>
            <li><a>E-commerce </a></li>
            <li><a>Economie</a></li>
            <li><a>Loisirs</a></li>
            <li><a>Marketing</a></li>
            <li><a>Technique</a></li>
            <li><a>Technologie</a></li>
            <li><a>Toutes les spécialités</a></li>
          </ul>
        </li>

        <li><a class="nav-link scrollto text-dark {{ $focus == 'tarif'? 'active' : ' ' }}" href="{{ route('tarif') }}">Tarif et Formule</a></li>
        <!-- <li><a class="nav-link scrollto text-dark {{ $focus == 'about-us'? 'active' : ' ' }}" href="{{ route('home') }}">A propos de nous</a></li> -->

        @if(($focus == 'contact'))
        <li class="dropdown"><a href="{{route('contact')}}" class="active"><span id="person" class="text-dark">Contacter</span></a> </li>
        @else
        <li class="dropdown flex-inline  "><a href="{{route('contact')}}"><span id="person" class="text-dark">Contacter</span></a> </li>
        @endif

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
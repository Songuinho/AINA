<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="{{ route('home') }}"><span>AiNa</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ route('home') }}">Accueil</a></li>
        <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Rédaction</a></li>
            <li><a href="#">Stratégie SEO</a></li>
            <li><a href="#">Traduction</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Domaine d'expertise</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a>Art de vivre</a></li>
            <li><a>Culture</a></li>
            <li><a>E-commerce </a></li>
            <li><a>Economie</a></li>
            <li><a>Loisirs</a></li>
            <li><a>Marketing</a></li>
            <li><a>Technique</a></li>
            <li><a>Technologie</a></li>
            <li><a>Toutes les <br>spécialités</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><span id="person"><i class="bi bi-envelope fs-5"></i> Nous contacter</span></a>
          <ul>
            <li><a href="{{ route('contact') }}">Laisser-nous un message</a></li>
            <li><a href="{{ route('ordertext') }}">Commander des textes <i class="bi bi-arrow-right fs-4"></i> </a></li>
          </ul>

        </li>

        <li class="dropdown"><a href="#"><span id="person"><i class="bi bi-person fs-5"></i> Compte</span></a>
          <ul>
            <li><a href="/Se connecter">Connexion</a></li>
            <li><a href="S'inscrire">Inscription</a></li>
            <hr>
            <li><a href="{{ route('questions') }}">Aide pour <br>les clients </a></li>
            <li><a href="{{ route('questions') }}">Aide pour <br>les redacteurs</a></li>
            <li><a href="{{ route('questions') }}">Comment passer <br> une commande</a></li>
          </ul>

        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
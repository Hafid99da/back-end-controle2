<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="d-flex align-items-center col-md-3 mb-2 mb-md-0">
        <img src="{{ asset('images/H.png') }}" width="100" height="100" alt="Image">
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        @guest
        <li><a href="{{ route('accueil') }}" class="nav-link px-2 link-secondary">Accueil</a></li>
        @endguest
        @auth
        @if(Auth::user()->role ==='admin')
          <li><a href="{{ route('accueil.admin') }}" class="nav-link px-2 link-secondary">Accueil</a></li>
        @else
          <li><a href="{{ route('accueil.user') }}" class="nav-link px-2 link-secondary">Accueil</a></li>
        @endif
        <li><a id="etudiants" href="{{ route('etudiants.index') }}" class="nav-link px-2 link-dark">Etudiants</a></li>
        <li><a id="enseignants" href="{{ route('enseignants.index') }}" class="nav-link px-2 link-dark">Enseignants</a></li>
        <li><a id="cours" href="{{ route('cours.index') }}" class="nav-link px-2 link-dark">Cours</a></li>
        <li><a id="inscription" href="{{ route('inscriptions.index') }}" class="nav-link px-2 link-dark">Inscription</a></li>
        <li><a id="paiement" href="{{ route('paiements.index') }}" class="nav-link px-2 link-dark">Paiement</a></li>
        @endauth
      </ul>

      <div class="col-md-3 text-end">
        @guest
        <a class="btn btn-outline-primary me-2" href="{{ route('login.index') }}">se connecter</a>
        @endguest
        @auth
        @if(Auth::user()->role ==='admin')
          <a class="btn btn-outline-primary me-2" href="{{ route('login.logout') }}">Se déconnecter</a>
          <a class="btn btn-primary" href="{{ route('register.index') }}" >ajouter un utilisateur</a>
        @else
          <a class="btn btn-outline-primary me-2" href="{{ route('login.logout') }}">Se déconnecter</a>
        @endif
        @endauth
      </div>
    </header>
</div>

<div class="container">
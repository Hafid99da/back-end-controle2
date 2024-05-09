@extends('layouts.layout')
@section('content')
<header class="hero-section">
        <div class="container">
          <div class="row align-items-center py-4 g-5">
            <div class="col-12 col-md-6">
              <div class="text-center text-md-start">
                <h1 class="display-md-2 display-4 fw-bold text-dark pb-2">
                    Bienvenue
                </h1>
                <h1 class="display-md-2 display-4 fw-bold text-dark pb-2">
                  Sur <span class="text-primary">Hibra </span>Centre
                </h1>
                <p class="lead">
                    Le meilleur centre pour apprendre les langages de programmation.
                </p>
                
                <a class="btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium" type="button"  href="{{ route('login.index') }}">Connecter</a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <img src="{{ asset('images/H.png') }}" class="img-fluid" />
            </div>
          </div>
        </div>
</header>
@endsection

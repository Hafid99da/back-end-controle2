<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
          margin: 0;
          font-family: "Lato", sans-serif;
        }
        .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
        }
        .sidebar a {
          display: block;
          color: black;
          padding: 16px;
          text-decoration: none;
        }
        .sidebar a.active {
          background-color: #04AA6D;
          color: white;
        }
        .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
        div.content {
          margin-left: 200px;
          padding: 1px 16px;
          height: 1000px;
        }
        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
          }
          .sidebar a {float: left;}
          div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
          .sidebar a {
            text-align: center;
            float: none;
          }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><h2>HIBRA centre : Centre d'apprentissage des langages de programmation</h2></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                  <a id="accueil" class="active" href="#accueil">Accueil</a>
                  <a id="etudiants" href="{{ route('etudiants.index') }}">Etudiants</a>
                  <a id="enseignants" href="{{ route('enseignants.index') }}">Enseignants</a>
                  <a id="cours" href="{{ route('cours.index') }}">Cours</a>
                  <a id="inscription" href="{{ route('inscriptions.index') }}">Inscription</a>
                  <a id="paiement" href="{{ route('paiements.index') }}">Paiement</a>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body> 
</html>






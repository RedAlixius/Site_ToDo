<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre','Nom de la page')</title>
    {!! Html::style('style.css') !!}
    {!! Html::style('css/bootstrap.min.css') !!}
    <script src="{!! URL::asset('js/jquery-2.1.4.min.js') !!}"></script>
    {!! Html::script('js/bootstrap.min.js') !!}

</head>
<body>
<div id="banniere" class="centre">
    <h1>Site de liste de tâches</h1>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!! route('accueil') !!}">Accueil</a>

        </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-">
                <li><a href="{!! route('createAccount') !!}">Créer un compte</a></li>
                <li><a href="{!! route('viewListe') !!}">Voir mes listes</a></li>
                <!---createAccount<li><a href="{!! route('createListe') !!}">Créer une liste</a></li>
                <li><a href="{!! route('viewTask') !!}">Voir mes tâches</a></li>
                <li><a href="{!! route('createTask') !!}">Créer une tâche</a></li>
                -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{!! route('about') !!}">A propos</a></li>
            </ul>
        </div>
    </div>
</nav>
   <!-- <div id="menu">
        <ul>
            <li><a href="">accueil</a></li>
            <li><a href="">Créer un compte</a></li>
            <li><a href="">Voir mes tâches</a></li>
            <li><a href="{{route('createTask')}}">Ajouter une nouvelle tâche</a></li>
        </ul>
    </div>-->
<div class="centre">
    @yield('titrePage','Titre par défaut')
</div>
@yield('contenu')
</body>
</html>
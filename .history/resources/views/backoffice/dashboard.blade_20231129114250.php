@extends('layouts.main')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h2 class="message text-primary">Bienvenue sur notre plateforme d'aide ménagère</h2>
            < class="lead text-dark">
                Trouvez la personne idéale pour vous aider dans vos tâches ménagères.
                Nous simplifions la recherche et la mise en relation avec des aides ménagères qualifiées.
            </p>
            <!-- <p class="text-dark">
                Que vous ayez besoin d'aide pour le ménage, la garde d'enfants ou d'autres tâches domestiques,
                notre plateforme vous offre une solution pratique et fiable.
            </p> -->
            <p class="text-dark">
                Recherchez, comparez et contactez des aides ménagères en fonction de vos besoins spécifiques.
                Simplifiez votre vie quotidienne avec notre service d'aide ménagère.
            </p>
            <a href="{{ route('liste_menagere') }}" class="btn btn-primary">Trouver une aide ménagère</a>
     
            <div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('images/ajout1.jpg') }}" alt="Description de l'image">
        </div>
        <div class="col-3">
            <img src="{{ asset('images/ajou2.jpg') }}" alt="Description de l'image">
        </div>
        <!-- Ajoutez d'autres colonnes avec des images selon vos besoins -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </div>
    </div>
</div>

@endsection

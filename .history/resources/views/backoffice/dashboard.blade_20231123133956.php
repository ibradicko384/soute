@extends('layouts.main')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h2 class="message text-primary">Bienvenue sur notre plateforme d'aide ménagère</h2>
            <p class="lead text-dark">
                Trouvez la personne idéale pour vous aider dans vos tâches ménagères.
                Nous simplifions la recherche et la mise en relation avec des aides ménagères qualifiées.
            </p>
            <p class="text-dark">
                Que vous ayez besoin d'aide pour le ménage, la garde d'enfants ou d'autres tâches domestiques,
                notre plateforme vous offre une solution pratique et fiable.
            </p>
            <p class="text-dark">
                Recherchez, comparez et contactez des aides ménagères en fonction de vos besoins spécifiques.
                Simplifiez votre vie quotidienne avec notre service d'aide ménagère.
            </p>
            <a href="{{ route('liste_menagere') }}" class="btn btn-primary">Trouver une aide ménagère</a>
     

<!-- <div class="container">
    <h2>Carrousel d'images</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image1.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="image3.jpg" alt="Image 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
</div>
<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('Hello, World!')
        .openPopup();
</script> -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </div>
    </div>
</div>

@endsection

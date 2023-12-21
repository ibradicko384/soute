@extends('layouts.main')
@section('body')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $titre }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('foyer') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nom"></label>
                            <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom')  ?? $foyer['nom'] }}" required autofocus placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input id="prenom" type="text" class="form-control" name="prenom" required placeholder="Prenom">
                        </div>
                        <div class="form-group">
                            <label for="quartier"></label>
                            <input id="quartier" type="text" class="form-control" name="quartier" required placeholder="Quartier">
                        </div>
                        <div class="form-group m-3">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
                 </div>
              </div>
           </div>
        <div class="col-md-4">
     <a href="{{ route('liste_foyers') }}" class="btn btn-primary">Voir la liste</a>
 </div>
    </div>
</div>
@endsection



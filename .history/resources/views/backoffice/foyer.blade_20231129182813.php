@extends('layouts.main')
@section('body')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inscription d'un foyer</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('foyer.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input id="nom" type="text" class="form-control" name="nom" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input id="prenom" type="text" class="form-control" name="prenom" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="quartier">Quartier</label>
                            <input id="quartier" type="text" class="form-control" name="quartier" required autofocus>
                        </div>

                        <div class="form-group m-3">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
                    liste_foyers

                </div>
            </div>
        </div>
        <div class="col-md-8"
    </div>
</div>
@endsection


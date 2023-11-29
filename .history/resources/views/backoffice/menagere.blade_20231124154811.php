@extends('layouts.main')
@section('body')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enregistrement aide ménage</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('aidemenage.store') }}">
                        @csrf
                       
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input id="nom" type="text" class="form-control" name="nom" required autofocus>
                           
                                <div class="alert alert-danger">{{ $message }}</div>
                            
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input id="prenom" type="text" class="form-control" name="prenom" required autofocus>
                            
                                <div class="alert alert-danger">{{ $message }}</div>
                           
                        </div>
                        <div class="form-group">
                            <label for="date">Date de naissance</label>
                            <input type="date" id="date" class="form-control" name="date">
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="quartier">Quartier</label>
                            <input id="quartier" type="text" class="form-control" name="quartier">
                            @error('quartier')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group m-3">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <strong>Erreur!</strong> Il y a un problème avec vos données.
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

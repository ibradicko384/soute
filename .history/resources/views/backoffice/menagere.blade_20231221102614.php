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
                            <label for="nom"></label>
                            <input id="nom" type="text" class="form-control" name="nom" required autofocus placeholder="contact">    
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input id="prenom" type="text" class="form-control" name="prenom" required placeholder="contact"> 
                        </div>
                        <div class="form-group">
                            <label for="date"></label>
                            <input type="date" id="date" class="form-control" name="date" placeholder="Date de naissance"> 
                        </div>

                        <div class="form-group">
                            <label for="quartier"></label>
                            <input id="quartier" type="text" class="form-control" name="quartier" placeholder="contact">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input id="contact" type="text" class="form-control" name="contact" placeholder="contact">
                        </div>
                        <div class="form-group m-3">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                         @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
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

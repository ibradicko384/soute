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
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input id="prenom" type="text" class="form-control" name="prenom" required > 
                        </div>
                        <div class="form-group">
                            <label for="date">Date de naissance</label>
                            <input type="date" id="date" class="form-control" name="date"> 
                        </div>

                        Uncaught ReferenceError: $ is not defined
    at main.js:26:1
jquery-3.6.0.min.js:2 jQuery.Deferred exception: table.buttons is not a function TypeError: table.buttons is not a function
    at HTMLDocument.<anonymous> (http://127.0.0.1:8000/js/datatable.js:10:11)
    at e (http://127.0.0.1:8000/DataTables/jquery-3.6.0.min.js:2:30038)
    at t (http://127.0.0.1:8000/DataTables/jquery-3.6.0.min.js:2:30340) undefined
S.Deferred.exceptionHook @ jquery-3.6.0.min.js:2
allUrl.js:2 CONTENT IS RUNNING
jquery-3.6.0.min.js:2 Uncaught TypeError: table.buttons is not a function
    at HTMLDocument.<anonymous> (datatable.js:10:11)
    at e (jquery-3.6.0.min.js:2:30038)
    at t (jquery-3.6.0.min.js:2:30340)
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

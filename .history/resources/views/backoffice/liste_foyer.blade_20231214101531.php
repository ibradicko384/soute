@extends('layouts.main')
@section('body')
    <!-- date table -->
    <div class="container ml-3">
        <a href="{{ route('foyers.create') }}" class="btn btn-primary">Ajouter un foyer</a>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">

                @if($foyers->count() > 0)
                    
                @else
                    <p> 
                         la liste des foyers est v
                    </p>
                @endif

                
                
            </div>
        </div>
    </div>
@endsection

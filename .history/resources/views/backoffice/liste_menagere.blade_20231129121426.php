@extends('layouts.main')
@section('body')
@csrf
<div class="container ml-3">
    <a href="{{ route('menagere.create') }}" class="btn btn-primary">Ajouter une aide ménagère</a>
</div>
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="data_table">
                <table id="example" class="table pt-5 table-striped table-bordered">
                    <thead class="table color1">
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date_de_naissance</th>
                            <th>Quartier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($AideMenage as $AideMenage)
                            <tr>
                                <td>{{ $AideMenage->nom }}</td>
                                <td>{{ $AideMenage->prenom }}</td>
                                <td>{{ $AideMenage->date_de_naissance }}</td>
                                <td>{{ $AideMenage->quartier }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('commentaire.create', $aiAeMeMagere->id) }}">Ajouter un commentaire</a>
            </div>
        </div>
    </div>
</div>
@endsection
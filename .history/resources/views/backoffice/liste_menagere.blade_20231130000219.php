@extends('layouts.main')
@section('body')
@csrf
<!-- <div class="container ml-3">
    <a href="{{ route('menagere.create') }}" class="btn btn-primary">Ajouter une aide ménagère</a>
</div> -->
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
                        @isset($aidesMenageres)
                            @foreach($aidesMenageres as $Aidemenage)
                                <tr>
                                    <td>{{ $Aidemenage->nom }}</td>
                                    <td>{{ $Aidemenage->prenom }}</td>
                                    <td>{{ $Aidemenage->date_de_naissance }}</td>
                                    <td>{{ $Aidemenage->quartier }}</td>
                                     <td>
                                <a href="{{ route('editmenage', $aidemenage->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#userDetailModal{{ $user->id }}">Détail</button>
                               <button class="btn btn-danger btn-sm"><a href="{{ route('deleteUser', ['id' => $user->id]) }}" onclick="event.preventDefault(); if(confirm('Voulez-vous vraiment supprimer cet utilisateur ?')) document.getElementById('delete-form-{{ $user->id }}').submit();">
                                    
                                </a>Supprimer</button> 

                                <form id="delete-form-{{ $user->id }}" action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

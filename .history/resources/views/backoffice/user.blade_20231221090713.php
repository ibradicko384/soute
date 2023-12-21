@extends('layouts.main')
@section('body')
@csrf
   <!-- date table -->
   <div class="container ml-3">
   
   <a href="{{ route('admin-register') }}">
   <button type="submit" class="btn btn-primary"><ion-icon class="ml-3" name='person-add-outline'></ion-icon>ajouter un utilisateur</button>
   </a>
   </div>
   <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <table id="example" class="table pt-5 table-striped table-bordered">
                        <thead class="table  color1 ">
                            <tr>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Email</th>
                                <th>Rôle</th>  
                                <th>Action</th>                                  
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('editUser', $user->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#userDetailModal{{ $user->id }}">Détail</button>
                            <button class="btn btn-danger btn-sm" onclick="event.preventDefault(); if(confirm('Voulez-vous vraiment supprimer cet utilisateur ?')) document.getElementById('delete-form-{{ $user->id }}').submit();">
                                Supprimer
                            </button> 
                        
                            <form id="delete-form-{{ $user->id }}" action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        
                            <!-- Modal pour les détails de l'utilisateur -->
                            <div class="modal fade" id="userDetailModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="userDetailModalLabel{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="userDetailModalLabel{{ $user->id }}">Détails de l'utilisateur</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Ajoutez ici le contenu détaillé de l'utilisateur -->
                                            Nom: {{ $user->name }}<br>
                                            Prénom(s): {{ $user->surname }}<br>
                                            Email: {{ $user->email }}<br>
                                            Rôle: {{ $user->role }}<br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

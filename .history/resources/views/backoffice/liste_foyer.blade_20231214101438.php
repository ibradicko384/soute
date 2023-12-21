@extends('layouts.main')
@section('body')
    <!-- date table -->
    <div class="container ml-3">
        <a href="{{ route('foyers.create') }}" class="btn btn-primary">Ajouter un foyer</a>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">

                @if($foyers->count())
                    
                @else
                    
                @endif

                <div class="data_table">
                    <table id="example" class="table pt-5 table-striped table-bordered">
                        <thead class="table color1">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Quartier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($foyers as $foyer)
                                <tr>
                                    <td>{{ $foyer->nom }}</td>
                                    <td>{{ $foyer->prenom }}</td>
                                    <td>{{ $foyer->quartier }}</td>
                                    <td>
                                        <!-- Ajoutez ici des liens pour les actions (modifier, supprimer, etc.) en utilisant les routes appropriées -->
                                        <a href="{{ route('foyer.show', ['id' => $foyer->id]) }}" class="btn btn-primary">Voir le foyer</a>
                                        {{-- <a href="{{ route('foyer.edit', ['id' => $foyer->id]) }}" class="btn btn-primary">Modifier</a> --}}
                                        {{-- <form action="{{ route('foyer.destroy', ['id' => $foyer->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <h1>Commentaires sur l'aide ménagère</h1>

    <!-- Afficher les commentaires existants ici -->

    <form method="post" action="{{ route('commentaire.store') }}">
        @csrf

        <label for="message">Votre commentaire :</label>
        <textarea name="message" id="message" rows="4" required></textarea>

        <input type="hidden" name="aide_menagere_id" value="{{ $aideMenagere->id }}">

        <button type="submit">Soumettre le commentaire</button>
    </form>
@endsection

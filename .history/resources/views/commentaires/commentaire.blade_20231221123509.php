@extends('layouts.main')
@section('body')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messagerie</div>
                <div class="card-body">
                    {{-- Liste des conversations --}}
                    <ul>
                        @foreach ($conversations as $conversation)
                            <li>
                                <a href="{{ route('messages.show', ['conversation' => $conversation->id]) }}">
                                    {{ $conversation->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

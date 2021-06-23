@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>MES SUJETS</h2>
        <div class="list-group">
            @foreach ($topics as $topic)
                @if (isset(Auth::user()->id) && Auth::user()->id == $topic->user_id)
                    <div class="mb-2 list-group-item">
                        <h4><a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a></h4>
                        <p>{{ $topic->content }}</p>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <small>Posté le {{ $topic->created_at->format('d/m/Y') }} par <span
                                        class="badge badge-primary">{{ $topic->user->name }}</span></small>
                            </div>
                            <div class="d-flex flex-column">
                                @if ($topic->isvalidated == '0')
                                    <label class="btn btn-warning">En cours de validation...</label>
                                @elseif ($topic->isvalidated == '1')
                                    <label class="btn btn-warning">Accepté </label>
                                @elseif($topic->isvalidated == '2')
                                    <label class="px-3 py-2 badge-btn-primary">Réfusé! Veuillez modifier votre sujet </label>
                                @endif
                            </div>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <div class="mt-3 d-flex justify-content-center">
            {{ $topics->links() }}
        </div>
    </div>
@endsection

@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>FORUM DE DISCUSSION</h2>
        <div class="list-group">
            @foreach ($topics as $topic)
            @if ($topic->isvalidated == '1')
            <div class="mb-2 list-group-item">
                <h4><a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a></h4>
                <p>{{ $topic->content }}</p>
                <div class="d-flex flex-column">
                <small>Posté le {{ $topic->created_at->format('d/m/Y') }} par <span class="badge badge-primary">{{ $topic->user->name }}</span></small>
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

@extends('layouts.base')

@section('content')
    <div class="container">
        <h2>FORUM DE DISCUSSION</h2>
        <div class="list-group">
            @foreach ($pubs as $pub)
         
            <div class="mb-2 list-group-item">
                <h4><a href="{{ route('pubs.show', $pub) }}">{{ $pub->title }}</a></h4>
                <p>{{ $pub->content }}</p>
                <div class="d-flex flex-column">
                </div>
            </div>
           
            @endforeach
        </div>
        <div class="mt-3 d-flex justify-content-center">
            {{ $pubs->links() }}
        </div>
        <div class="mt-3 d-flex justify-content-center">
            <a href="{{ route('pubs.create') }}">Créer un sujet</a>
        </div>
    </div>
@endsection

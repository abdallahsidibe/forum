@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-info">{{ $pub->title }}</h4>
                <p>{{ $pub->content }}</p>
                <div class="d-flex flex-column">
                    <small>Posté le {{ $pub->created_at->format('d/m/Y') }} par 
                        <span class="badge badge-primary">{{ $pub->user->name }}</span>
                    </small>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    @can('update', $pub)
                    <a href="{{ route('pubs.edit', $pub) }}" class="btn btn-warning">Editer ce pub</a>  
                    @endcan 
                    @can('delete', $pub)                
                    <form action="{{ route('pubs.destroy', $pub) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>     
                    @endcan           
                   
                </div>

            </div>
        </div>
    </div>
@endsection

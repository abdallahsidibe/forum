@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>{{ $pub->title }}</h1>
        <hr>
        <form action="{{ route('pubs.update', $pub) }}" method="POST">
        @csrf
        @method('PATCH') <!-- ou PUT -->

        <div class="form-group">
            <label for="title">Titre de la pub</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $pub->title }}">
            @error('title')
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Votre pub</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ $pub->content }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $errors->first('content') }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifier ma pub</button>
        </form>
    </div>
@endsection

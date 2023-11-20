@extends('layout.userLayout')
@section('contenueUser')




<h1>Détails de l'article</h1>

<h3>{{ $article->nom }}</h3>
<p>Description : {{ $article->description }}</p>
<p>Type : {{ $article->type }}</p>
<p>Statut : {{ $article->statue }}</p>

<img src="{{ asset('storage/'.$article->image) }}" alt="Image de l'article">

<a href="/modifier/{{$article->id}}" class="btn btn-warning">Modifier</a>
<form method="POST" action="/articleSupprimer/{{ $article->id }}">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>

@endsection
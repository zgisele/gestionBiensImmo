@extends('layout.userLayout')
@section('contenueUser')

<div class="row">
    @foreach($article as $articles)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset('storage/'.$articles->image)}}" >
                <div class="card-body">
                    <h5 class="card-title">Nom : {{ $articles->nom }}</h5>
                    <p class="card-text">description : {{ $articles->description }}</p>
                    <p class="card-text">Type : {{ $articles->type }}</p>
                    <p class="card-text">Statut : {{ $articles->statue }}</p>
                    <a href="{{$articles->id}}" class="btn btn-info">Voir Plus</a>
                    <button type="submit" class="btn btn-warning">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
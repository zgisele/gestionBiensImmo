@extends('layout.userLayout')
@section('contenueUser')

<div class="row">
    @foreach($article as $articles)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                
                <div class="card-body">
                    <h5 class="card-title">Nom : {{ $articles->nom }}</h5>
                    <p class="card-text">description : {{ $articles->description }}</p>
                    <p class="card-text">Type : {{ $articles->type }}</p>
                    <p class="card-text">Statut : {{ $articles->statue }}</p>
                    <img class="card-img-top" src="{{ $articles->image }}" >
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
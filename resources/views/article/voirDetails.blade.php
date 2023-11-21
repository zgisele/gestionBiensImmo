@extends('layout.userLayout')
@section('contenueUser')
<div class="col-md-12">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top" src="{{asset('storage/'.$article->image)}}" height="600">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ $article->nom }}</h5>
            <p class="card-text">description : {{ $article->description }}</p>
            <p class="card-text">Type : {{ $article->type }}</p>
            <p class="card-text">Statut : {{ $article->statue }}</p>

            <h5 class="card-title">Liste commentaires</h5>

            @foreach($commentaire as $commentaire)
            <div class="row">
                <div class="col-md-8">
                    <p>{{$commentaire->contenu}}</p>
                </div>
                <div class="col-md-2">
                    <a href="{{'/user/commentaire/'.$article->id}}" class="btn btn-primary">
                        <i class="fas fa-exclamation-triangle"></i> Modifier
                    </a>
                </div>
                <div class="col-md-2">
                    <form action="{{'/user/commentaires/'.$article->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                </div>
            </div>
                    @endforeach
        </div>

    </div>
</div>
<form action="/user/commentaires/{{$article->id}}" method="post" class="row g-3">
    @csrf
    <div class="input-group">
        <textarea class="form-control" name="contenu" aria-label="With textarea"></textarea>
        <button type="submit" class="btn btn-primary" class="input-group-text">Commenter</button>
    </div>
</form>
@endsection
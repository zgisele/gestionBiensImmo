<div class="row">
    @foreach($articles as $article)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ $article->image }}" alt="Image du bien">
                <div class="card-body">
                    <h5 class="card-title">Nom : {{ $article->nom }}</h5>
                    <p class="card-text">description : {{ $article->description }}</p>
                    <p class="card-text">Type : {{ $article->type }}</p>
                    <p class="card-text">Statut : {{ $article->statut }}</p>
                    
                </div>
            </div>
        </div>
    @endforeach
</div>

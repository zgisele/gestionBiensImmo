@extends('layout.userLayout')
@section('contenueUser')

<hr>


    



<!-- Ressources/views/articles/show.blade.php -->
<form class="mt-5" action="{{'/commentaires/'. 1}}" method="POST">
    @csrf
    <div class="form-group">
        <textarea name="contenu" placeholder="Ajouter un commentaire" cols="70" rows="3">{{old('contenu')}} </textarea>
    </div>
    
    <button type="submit" class="btn btn-dark">Commenter</button>

</form>



<div class="container">
    <div class="row  col-8 ">
        <!-- <div class="col-12 col-md-6"> -->

        <div class="card  mt-5 pl-3"  >
        <!-- col-md-8 -->
        <!-- pt-3
        pb-5 -->
            
            @foreach($commentaire as $commentaire)

            
            <div class="card-contenu">
                {{$commentaire->contenu}}

            </div>

        
                <div class="d-flex justify-content-center align-items-center ">
                    <!-- <form action="/commentaire/modifier" method="post" class="btn btn-warning m-2 px-4 pr-4"> -->
                        <a href="/commentaire/8/modifier" class="btn btn-warning m-2 px-4 pr-4" >
                            <i class="fas fa-exclamation-triangle"></i> Modifier
                        </a>
                    <!-- </form> -->
                    <form action="{{'/commentaires/'. 9}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                </div>
        
            @endforeach
        </div>
        <!-- </div> -->
    </div>
</div>

@endsection
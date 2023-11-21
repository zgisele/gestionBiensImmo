@extends('layout.userLayout')
@section('contenueUser')

<hr>


<form class="mt-5" action="{{ route('commentaire.update', 8) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <textarea name="modifier" placeholder="Ajouter un commentaire" cols="70" rows="3">{{old('contenu')}} </textarea>
            </div>
            
            <button type="submit" class="btn btn-dark">Modifier</button>

   </form>
@endsection
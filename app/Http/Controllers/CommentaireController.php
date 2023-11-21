<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commentaire = Commentaire::all();
        return view("commentaire.commentaire", compact('commentaire'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$articleId)
    {
        //
        $request->validate([
            'contenu' => 'required|string',
        ]);

         $commentaire =Commentaire::create([
            'user_id' => 1, // L'ID de l'utilisateur actuel
            'article_id' => $articleId,
            'contenu' => $request->input('contenu'),
        ]);

        // dd($commentaire);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $commentaire = Commentaire::all();
        // $commentaire = Commentaire::findOrFail($id);
        // $user = User::find(1);
        // $commentaire = $user->commentaires();

        // $comments = $article->comments()->with('user')->get();
       
        // dd($commentaire);
        return view("commentaire.commentaire", compact('commentaire'));
    }

 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $commentaire =  Commentaire::findOrFail($id);
        return view('commentaire.modifier', compact('commentaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // Validation du formulaire de modification
        $request->validate([
            'contenu' => 'required|string',
        ]);

        // Mise à jour du contenu du commentaire
        $commentaire = Commentaire::finOrFail($id);
        $commentaire->update([
            'contenu' => $request->input('contenu'),
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // $commentaire->delete();
        // return back();

        $commentaire =  Commentaire::find($id);
        
        // $commentaire->destroy($id);
        // dd($eleves);
        $commentaire->delete();
        return back();
    }
}

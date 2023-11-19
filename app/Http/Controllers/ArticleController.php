<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('article.articles');
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
    public function store(Request $request)
{

    $request->validate([
        'nom' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'type' => 'required',
        'statut' => 'required',
    ]);
    
    $imagePath = $request->file('image')->store('images/article', 'public');

    $article = new Article();
    $article->nom = $request->nom;
    $article->description = $request->description;
    $article->image = $imagePath;
    $article->save();

    return redirect()->route('article.articles')->with('success', 'Article ajouté avec succès.');
}


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}

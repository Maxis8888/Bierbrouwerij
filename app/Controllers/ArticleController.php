<?php

namespace Bierbrouwerij\Controllers;


use Bierbrouwerij\Models\Artikel;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    /**
     * Show the create form for articles.
     */
    public function create()
    {
        View::make('asfasdfs');
    }

    /**
     * Store the article data.
     */
    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $article = new Artikel;
        $article = $article->getArtikelById($id);
    }
}
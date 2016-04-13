<?php

namespace Bierbrouwerij\Controllers;


use Bierbrouwerij\Models\Artikel;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = new Artikel;
        $article = $article->getArtikelById($id);

        echo $article['Naam'];
    }
}
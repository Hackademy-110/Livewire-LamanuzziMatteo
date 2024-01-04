<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function create(){
        return view('article.create');
    }
    public function showA(){
    $articles=Article::all();
    return view('article.showAll',compact('articles'));
    }
    public function update($articleId){
        $article=Article::find("$articleId");
        return view('article.update',compact('article'));
    }
    public function delete($articleId){
        $article=Article::find("$articleId");
        return view('article.delete',compact('article'));
    }
}

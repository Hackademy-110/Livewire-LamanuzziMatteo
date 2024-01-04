<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDelete extends Component
{
    public $article;
    public function delete(Article $article){
        $article->delete();
        return redirect()->route('article.showAll');
    }
    public function render()
    {
        return view('livewire.article-delete');
    }
}

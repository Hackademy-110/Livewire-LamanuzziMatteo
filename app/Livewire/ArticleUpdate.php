<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleUpdate extends Component
{
    public $article;
    public $title;
    public $author;
    public $body;

    protected $rules=[
        'article.title'=>'required',
        'article.author'=>'required',
        'article.body'=>'required'
    ];
    protected $messages=[
        'article.title.required'=>'l titolo non può essere vuoto',
        'article.author.required'=>'Qualcuno deve essere l\'autore',
        'article.body.required'=>'Il testo non può non esserci'
    ];
    public function mount(){
        $this->title=$this->article->title;
        $this->author=$this->article->author;
        $this->body=$this->article->body;
    }
    public function update(){
        $this->validate();
        $this->article->update([
            'title'=>$this->title,
            'author'=>$this->author,
            'body'=>$this->body
        ]);
        return redirect(route('article.showAll'));
    }
    public function render()
    {
        return view('livewire.article-update');
    }
}

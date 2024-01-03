<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreation extends Component
{
    public $title;
    public $author;
    public $body;
    protected $rules=[
        'title'=>'required',
        'author'=>'required',
        'body'=>'required'
    ];
    protected $messages=[
        'title.required'=>'l titolo non può essere vuoto',
        'author.required'=>'Qualcuno deve essere l\'autore',
        'body.required'=>'Il testo non può non esserci'
    ];
    public function create(){
        $this->validate();
         Article::create([
            'title'=>$this->title,
            'author'=>$this->author,
            'body'=>$this->body
        ]);
        $title="";
        $author="";
        $body="";
        session()->flash('message','articolo inserito');
    }
    public function render(){
        return view('livewire.article-creation');
    }
}

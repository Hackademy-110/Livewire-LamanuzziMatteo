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
        'title'=>'reuired',
        'author'=>'required',
        'body'=>'required'
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

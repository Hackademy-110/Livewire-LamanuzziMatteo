<?php

namespace App\Livewire;

use Livewire\Component;

class ArticlesIndex extends Component
{
    public $articles;
    public function render()
    {
        return view('livewire.articles-index');
    }
}

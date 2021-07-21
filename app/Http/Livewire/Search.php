<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class Search extends Component
{
    public $search;


    public function render()
    {
        $movies = Movie::where('status',1)
                        ->where('title','LIKE','%'.$this->search.'%')
                        ->take(5)
                        ->get();
        return view('livewire.search', compact('movies'));
    }


}

<?php

namespace App\Http\Livewire\Home;

use App\Models\Category;
use App\Models\Movie;
use Livewire\Component;
use Livewire\WithPagination;

class Movies extends Component
{
    use WithPagination;

    public $category_id;

    public function render()
    {

        $categories = Category::all();
        $movies = Movie::where('status',1)
                        ->category($this->category_id)
                        ->latest('id')
                        ->paginate(8);
        return view('livewire.home.movies',compact('categories','movies'));
    }

    public function category($category_id)
    {
        $this->resetFilters();
        $this->category_id = $category_id;

    }

    public function resetFilters()
    {
        $this->reset(['category_id','page']);
    }
}

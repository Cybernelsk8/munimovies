<?php

namespace App\Http\Livewire\Home;

use App\Models\Movie;
use Livewire\Component;

class MoviesReviews extends Component
{

    public $movie_id,$comment;
    public $rating = 5;

    protected $rules =[
        'comment'=>'required'
    ];

    public function mount(Movie $movie)
    {
        $this->movie_id = $movie->id;
    }

    public function render()
    {
        $movie = Movie::find($this->movie_id);
        return view('livewire.home.movies-reviews',compact('movie'));
    }

    public function store()
    {
        $this->validate();

        $movie=Movie::find($this->movie_id);
        $movie->reviews()->create([
            'comment' => $this->comment,
            'rating' => $this->rating,
            'user_id' => auth()->user()->id
        ]);
    }
}

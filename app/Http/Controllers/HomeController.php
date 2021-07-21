<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(Movie $movie)
    {
        $similares = Movie::where('category_id',$movie->category_id)
                            ->where('id','!=',$movie->id)
                            ->where('status',1)
                            ->latest('id')
                            ->take(5)
                            ->get();
        return view('movies.show',compact('movie','similares'));
    }

    public function enrolled(Movie $movie)
    {
        $movie->users()->attach(auth()->user()->id);
        return redirect()->route('favoritas',auth()->user()->id);
    }

    public function favoritas($id)
    {

        // $favoritas = DB::table('movies')
        //                 ->join('movie_user','movies.id','=','movie_user.movie_id')
        //                 ->join('images','movies.id','=','images.imageable_id')
        //                 ->join('categories','movies.category_id','=','categories.id')
        //                 ->select('movies.*','images.url','categories.*')
        //                 ->where('movie_user.user_id',$id)
        //                 ->get();


        $favoritas = User::find($id);

        return view('movies.favoritas',compact('favoritas'));
    }

    public function delete(Movie $movie)
    {
        $movie->users()->detach();
        return redirect()->route('favoritas', auth()->user()->id);
    }

}

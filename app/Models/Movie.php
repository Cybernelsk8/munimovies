<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $withCount = ['users','reviews'];

    public function getRatingAttribute()
    {
        if($this->reviews_count){
            return round($this->reviews->avg('rating'),1);
        }
        else{
            return 5;
        }
        
    }

    // Query Scopes

    public function scopecategory($query,$category_id)
    {
        if ($category_id) {
            return $query->where('category_id',$category_id);
        }
    }


    // Relacion de uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    // Relacion de uno a muchos inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function clasification()
    {
        return $this->belongsTo(Clasification::class);
    }


    //Relacion muchos a muchos

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Relacion de uno a muchos polimorfica

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }

    // Relacion uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}

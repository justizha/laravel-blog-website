<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Post extends Model
{
    use HasFactory, Sluggable;
    

    //protected $fillable = ['title','excerpt','body'];
    protected $guarded = ['id'];

    protected $with = ['category','user'];

    public function scopeFillter($query, array $fillters){
     
        $query->when($fillters['search'] ?? false, function($query,$search){
            return $query->where('title','like' ,'%'. $search .'%')
                         ->orWhere('body','like','%'. $search .'%');

        });

        $query->when($fillters['category']??false,function($query,$category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($fillters['user']?? false, fn($query, $user)=>
            $query->whereHas('user', fn($query)=>
                $query->where('username', $user)
            )
        );  

    }


    public function category()
    {
        return $this->belongsTo(Category::class); 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'id']
            ]
        ];
    }

}

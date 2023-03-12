<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with =['author','category'];

    function scopeFilter($query, array $filters)
    {
        //Versi Lama
        // if($filters['search'] ?? false){
        //     return $query->where('title','like','%'.$filters['search'].'%')->orWhere('body','like','%'.$filters['search'].'%');
        // }

        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where(function($query)use($search){
                $query->where('title','like','%'.$search.'%')
                ->orWhere('body','like','%'.$search.'%')
                ->orWhereHas('author',function($query)use($search){
                    $query->where('username','like','%'.$search.'%');
                })
                ->orWhereHas('category',function($query)use($search){
                    $query->where('name','like','%'.$search.'%');
                });
            });
        });

        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category', function($query)use($category){
                $query->where('slug',$category);
            });
        });

        $query->when($filters['author'] ?? false,function($query,$author){
            return $query->whereHas('author',function($query)use($author){
                $query->where('username',$author);
            });
        });

        // Sama dengan atasnya
        // $query->when($filters['author'] ?? false,fn($query,$author) =>
        //     $query->whereHas('author',fn($query) =>
        //         $query->where('username',$author)
        //     )
        // );
    }


    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
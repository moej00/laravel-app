<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company','location', 'website', 'email', 'tags', 'description'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query -> where('tags', 'like', '%' . request('tag') . '%');
        }

        #method one
        // if($filters['search'] ?? false){
        //     $query-> where('title','like', '%' . request('search') . '%')
        //     ->orWhere('description', 'like', '%' . request('search') . '%')
        //     ->orWhere('tags', 'like', '%' . request('search') . '%');
        // }

        #method two:
        if($filters['search'] ?? false){
            $query-> whereAny(['title', 'description', 'tags'],'like', '%' . request('search') . '%');
        }
    }
}

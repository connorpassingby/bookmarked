<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    public function scopeFilter($query, array $filters) {
            //tag filter
            if($filters['tag'] ?? false) {
                $query->where('tags', 'like', '%' . request('tag') .'%');
            }

            //search filter
            if($filters['search'] ?? false) {
                $query->where('title', 'like', '%' . request('search') .'%')
                        ->orWhere('author', 'like', '%' . request('search') .'%')
                        ->orWhere('reviewer', 'like', '%' . request('search') .'%')
                        ->orWhere('tags', 'like', '%' . request('search') .'%');
            }
    }

    //reviews - user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

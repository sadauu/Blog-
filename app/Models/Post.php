<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'admin_id',
        'title',
        'description',
        'post_body',
        'slug',

    ];


    public function click(): HasMany{
        return $this->hasMany(Click::class, 'click_id', 'id');
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class, 'comment_id', 'id');
    }

    public function like(): HasMany{
        return $this->hasMany(Like::class, 'like_id', 'id');
    }
    
    public function admin(): BelongsTo{
        return $this->belongTo(Admin::class, 'admin_id', 'id');
    }

    public function category(): BelongTo{
        return $this->belongTo(Category::class, 'category_id', 'id');
    }

    
}

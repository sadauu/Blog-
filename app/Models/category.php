<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category',
    ];

    public function post(): HasMany {
        return $this->hasMany(post::class, 'post_id', 'id');
    }
}

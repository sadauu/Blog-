<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BreakingNews extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title', 'post_id',
    ];

    public function post(): BelongTo{
        return $this->belongTo(post::class, 'post_id', 'id ');
    }
}

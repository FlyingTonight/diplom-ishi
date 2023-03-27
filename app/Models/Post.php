<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'user_id',
        'category_id',
        'title',
        'short_content',
        'content',
        'photo',
    ];

    public function category(){
        return $this->belongsTo('Category');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'image_path', 'title', 'content', 'category', 'unit_status', 'prefecture', 'area', 'gender', 'age'
    ];
    public function user() {
        return $this -> belongsTo(User::class);
    }
}

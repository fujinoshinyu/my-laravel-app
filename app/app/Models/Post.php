<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';

    public $fillable = [
        'user_id',
        'title',
        'content'
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string'
    ];

    public static array $rules = [
        'title' => 'required',
        'content' => 'required'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    
}

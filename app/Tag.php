<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Tag extends Model
{
    public $table = "tags";

    protected $fillable = ['content'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}

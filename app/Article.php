<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Article extends Model
{
    public $table = "articles";

    protected $fillable = ['judul', 'isi', 'slug'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'detail'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

}

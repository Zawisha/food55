<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['id','title','text','desc','alias','img','user_id','category_id'];

    public function category()
    {

        return $this->belongsTo('App\Category');

    }


}

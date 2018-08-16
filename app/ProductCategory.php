<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    //has many
    public function products(){
        return $this->hasMany('App\Product', 'category_id');
        //belongs to parameter ke 2 selalu berasal dr model dmn dia dibuat
        //has many, paameter ke 2 nya selalu diambil dr model tujuan --> category_id diambil dr product
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'description'
    ];


    public function category(){
        return $this->belongsTo('App\ProductCategory', 'category_id');
        //parameter 1 = model mana yg diajak berhubungan oleh si produst
        //parameter 2 = kolom mana yg dijadikan acuan oleh si product
    }
}

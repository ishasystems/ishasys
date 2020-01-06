<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
    // protected $fillable =["id","type"];
    public function product_category()
    {
        return $this->hasMany("App\product_category","id","category_id");
    }
}

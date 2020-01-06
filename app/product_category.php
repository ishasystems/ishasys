<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $table = "product_categories";
    protected $fillable =["id","category_name","status"];
}

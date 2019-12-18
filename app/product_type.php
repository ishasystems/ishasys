<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    protected $table = "product_types";
    protected $fillable =["id","type"];
}

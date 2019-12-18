<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $table = "vendors";
    protected $fillable =["id","full_name","short_name"];
}

<?php
use App\product_category;

function productMenu()
{
    $product_category=product_category::where('status',0)->get();
    return $product_category;
}
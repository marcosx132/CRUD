<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
      return Product::insert([
          "name" => "choko",
          "status" => "Positiva"
      ]);
}
}
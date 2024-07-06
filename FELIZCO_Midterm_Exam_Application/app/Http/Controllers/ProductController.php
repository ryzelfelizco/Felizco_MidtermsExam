<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['Title' => 'The Hunger Games Trilogy', 'Author' => 'Suzanne Collins'],
        ['Title' => 'Lord of the Rings', 'Author' => 'J.R.R. Tolkien'],
        ['Title' => 'The Lost Art of Keeping Secrets', 'Author' => 'Eva Rice'],
    ];

    public function index()
    {
        return view('products', ['products' => $this->products]);
    }
}

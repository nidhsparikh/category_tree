<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::where('parent_id', 0)->get();
        $allCategories = Category::pluck('title', 'id')->all();
        return view('home', compact('categories', 'allCategories'));
    }
}

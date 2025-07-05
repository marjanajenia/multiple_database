<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function categoryAdd(){
        Category::create([
            'name' => 'Jenia',
            'status' => 'active',
        ]);
        return 'Category created';
    }
    public function articleAdd(){
        Article::create([
            'name' => 'Lifeless',
            'author' => 'Marjana',
            'description' => 'Life is hell$%$',
            'category_id' => 1,
        ]);
        return 'My Current situation';
    }
}

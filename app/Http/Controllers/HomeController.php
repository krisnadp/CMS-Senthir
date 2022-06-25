<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome(Category $category, Article $article)
    {
        $article = Article::all();
        $category = Category::all();
        return view('welcome', ['category' => $category], ['article' => $article]);
    }
    
    public function index(Category $category, Article $article)
    {
        $article = Article::all();
        $category = Category::all();
        return view('home', ['category' => $category], ['article' => $article]);
    }

    public function detail(Category $category, Article $article)
    {
        return view('detail', ['category' => $category], ['article' => $article]);
    }
    
}

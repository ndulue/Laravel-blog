<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CategoryController extends Controller
{
    public function getCategory($category)
    {
        $categories = Post::where('category', $category)->paginate(4);
        $tech = Post::where('category', 'Technology')->count();
        $growth = Post::where('category', 'Growth')->count();
        $event = Post::where('category', 'Event')->count();
        $finance = Post::where('category', 'Finance')->count();
        $market = Post::where('category', 'Market')->count();
        $business = Post::where('category', 'Business')->count();
        $popular = Post::inRandomOrder()->take(3)->get();
        return view('category', [
            'categories' => $categories,
            'tech' => $tech,
            'growth' => $growth,
            'event' => $event,
            'finance' => $finance,
            'market' => $market,
            'business' => $business,
            'popular' => $popular,
        ]);
    }

}

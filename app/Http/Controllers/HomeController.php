<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        #$posts = Post::all()->paginate(4);
        $posts = Post::orderBy('created','DESC')->paginate(4);
        $tech = Post::where('category', 'Technology')->count();
        $growth = Post::where('category', 'Growth')->count();
        $event = Post::where('category', 'Event')->count();
        $finance = Post::where('category', 'Finance')->count();
        $market = Post::where('category', 'Market')->count();
        $business = Post::where('category', 'Business')->count();
        $popular = Post::inRandomOrder()->take(3)->get();
        /*
        foreach ($posts as $post) {
            $id = Post::select('id')->where('id', $post->id)->get();
            $comments = Post::where('post_id', $id)->count();
        }
        */
        return view('home', [
            'posts' => $posts,
            'tech' => $tech,
            'growth' => $growth,
            'event' => $event,
            'finance' => $finance,
            'market' => $market,
            'business' => $business,
            'popular' => $popular
        ]);
    } 

    public function admin()
    {
        return view('admin.index');
    }


}

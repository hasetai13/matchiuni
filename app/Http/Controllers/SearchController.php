<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Post::query();
        $keyword = $request->input('keyword');
        $prefecture = $request->input('prefecture');
        if ($request->has('keyword') && $keyword != ('')) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                  ->orwhere('content', 'LIKE', "%{$keyword}%")
                  ->get();
        }
        if ($request->has('prefecture') && $prefecture != ('')) {
            $query->where('prefecture', $prefecture)->get();
        }
        $posts = $query->paginate(10);
        return view('posts.result', [
            'posts' => $posts
        ]);

    }
}

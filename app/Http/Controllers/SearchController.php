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
        $search1 = $request->input('prefecture');
        if ($request->has('prefecture') && $search1 != ('')) {
            $query->where('prefecture', $search1)->get();
        }
        $posts = $query->paginate(10);
        return view('posts.result', [
            'posts' => $posts
        ]);

    }
}

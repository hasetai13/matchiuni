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
        $prefs = config('pref');
        $ages  = config('age');
        $genders  = config('gender');


        $query = Post::query();

        $keyword = $request->input('keyword');
        $prefecture = $request->input('prefecture');
        $age = $request->input('age');
        $gender = $request->input('gender');


        if ($request->has('keyword') && $keyword != ('')) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                  ->orwhere('content', 'LIKE', "%{$keyword}%")
                  ->orwhere('prefecture', 'LIKE', "%{$keyword}%")
                  ->orwhere('area', 'LIKE', "%{$keyword}%")
                  ->orderBy('updated_at', 'desc')
                  ->get();
        }


        if ($request->has('prefecture') && $prefecture != ('')) {
            $query->where('prefecture', $prefecture);
        }
        if ($request->has('age') && $age != ('')) {
            $query->where('age', $age);
        }
        if ($request->has('gender') && $gender != ('')) {
            $query->where('gender', $gender);
        }
        $posts = $query->orderBy('updated_at', 'desc')->get();
//        $posts = Post::take(10)->orderBy('updated_at', 'desc')->get();
        return view('posts.result', [
            'posts' => $posts,
            'request' => $request,
            'prefs' => $prefs,
            'ages' => $ages,
            'genders' => $genders
        ]);

    }
}

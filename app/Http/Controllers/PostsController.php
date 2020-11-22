<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //    ▼デバッグ用コード
    public function index()
    {
        $posts = Post::take(10)->orderBy('updated_at', 'desc')->get();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::check()) {
            return view('posts.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //▼画像アップロード
        if ($file = $request -> file_path) {
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/uploads/');
            $file->move($target_path,$fileName);
        }else{
            $fileName = 'noimage.png';
        }

        //▲画像アップロード

        $post = new Post;
        $post -> image_path = $fileName;
//        $post -> category = $request -> category;
        $post -> title = $request -> title;
        $post -> content = $request -> content;
//        $post -> unit_status = $request -> unit_status;
        $post -> prefecture = $request -> prefecture;
        $post -> gender = $request -> gender;
        $post -> area = $request -> area;
        $post -> age = $request -> age;
        $post -> user_id = Auth::user()->id;
        $post -> save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::take(5)->orderBy('updated_at', 'desc')->get();

        //URLからid取得して、モデルから該当のデータを取得する
        $post = Post::find($id);
        return view('posts.show', [
            'post' => $post,
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

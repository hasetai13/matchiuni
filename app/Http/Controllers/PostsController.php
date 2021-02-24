<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $posts_bts = Post::take(5)
            ->where('title', 'LIKE', "%BTS%")
            ->orwhere('content', 'LIKE', "%BTS%")
            ->orderBy('updated_at', 'desc')->get();
        $posts_twice = Post::take(5)
            ->where('title', 'LIKE', "%twice%")
            ->orwhere('content', 'LIKE', "%twice%")
            ->orderBy('updated_at', 'desc')->get();

        return view('posts.index', [
            'posts' => $posts,
            'posts_bts' => $posts_bts,
            'posts_twice' => $posts_twice,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        if (\Auth::check()) {
//            return view('posts.create');
//        }
        return view('posts.create');
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

        $rules = [
            'title' => ['max:40'],
            'content' => ['max:191'],
            'area' => ['max:20']
        ];
        $this->validate($request, $rules);

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

        $user_id = Auth::id();
        $latest_post_id = Post::where('user_id',"{$user_id}")->latest()->first()->id;
        return redirect('/posts/' . $latest_post_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $posts = Post::take(5)->orderBy('updated_at', 'desc')->get();

        //URLからid取得して、モデルから該当のデータを取得する
        $post = Post::find($id);
        return view('posts.show', [
            'post' => $post,
            'posts' => $posts,
            'request' => $request,
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

    public function ogp($id)
    {

        $ogp_w = 600;
        $ogp_h = 315;

        // １行の文字数
        $partLength = 20;
        $fontSize = 19;
        $disc_fontSize = 18;
        $fontPath = public_path('fonts/mushin.otf');
        $file = public_path('img/ogp_image.jpg');
        $image = \imagecreatetruecolor($ogp_w,$ogp_h);

        $post = Post::find($id);

        //元の画像のサイズを取得する
        list($w, $h) = getimagesize($file);


        // 背景画像を描画
        $bg = \imagecreatefromjpeg($file);
        imagecopyresampled($image, $bg, 0, 0, 0, 0, $ogp_w, $ogp_h, $w, $h);


        $color = imagecolorallocate($image, 0, 0, 0);

        // 各行に分割
        $parts = [];
        $disc_parts = [];
        $title = "梅田でFeelSpecialやりませんか？？DMお待ちしてます！メンバーみんな初心者なので気軽に参加してください！";

        $length = mb_strlen($post->title);
        for ($start = 0; $start < $length; $start += $partLength) {
            $parts[] = mb_substr($post->title, $start, $partLength);
        }

        // テキストを描画
        $this->title_drawParts($image, $parts, $ogp_w, $ogp_h, $fontSize, $fontPath, $color);

//        ob_start();
//        imagepng($image);
//        $content = ob_get_clean();
//
//        // 画像としてレスポンスを返す
//        return response($content)->header('Content-Type', 'image/png');

        header('Content-Type: image/png');

        imagepng($image);
    }

    /**
     * 各行の描画メソッド
     */
    public function title_drawParts($image, $parts, $ogp_w, $ogp_h, $fontSize, $fontPath, $color, $offset = 0)
    {
        foreach ($parts as $i => $part) {
            // サイズを計算
            $box = \imagettfbbox($fontSize, 0, $fontPath, $part);
            $boxWidth = $box[4] - $box[6];
            $boxHeight = $box[1] - $box[7];
            // 位置を計算
            $x = ($ogp_w - $boxWidth) / 2;
            $y = $ogp_h / 2 + $boxHeight / 2 - $boxHeight * count($parts) * 0.5 + $boxHeight * $i;
            \imagettftext($image, $fontSize, 0, $x + $offset, $y + $offset, $color, $fontPath, $part);
        }
    }
}

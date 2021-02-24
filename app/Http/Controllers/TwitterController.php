<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function index(Request $request)
    {

//        "TwitterOAuthを使って検索するよ"というツイートを取得する
        $hash_tag = \Twitter::get("search/tweets", array("q" => "#コピユニメンバー募集", 'count' => 5));
        dump($hash_tag->statuses);
    }
}

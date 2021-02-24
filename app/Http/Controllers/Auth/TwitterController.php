<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Abraham\TwitterOAuth\TwitterOAuth;


class TwitterController extends Controller
{

    // ログイン
    public function redirectToProvider(){
        return Socialite::driver('twitter')->redirect();
    }


    // コールバック
    public function handleProviderCallback(){

        try {
            $user = Socialite::with("twitter")->user();
        }
        catch (\Exception $e) {
            return redirect('/login')->with('oauth_error', 'ログインに失敗しました');
            // エラーならログイン画面へ転送
        }

        $myinfo = User::firstOrCreate(
            ['token' => $user->token ],
            ['name' => $user->nickname,
             'tw_id' => $user->id,
            ]
        );
        Auth::login($myinfo);
        return redirect()->to('/'); // homeへ転送

//        $user = Socialite::driver('twitter')->user();
//        dd($user->nickname);

    }

    // ログアウト
    public function logout(Request $request)
    {
        // 各自ログアウト処理
        // 例
         Auth::logout();
        return redirect('/');
    }
}

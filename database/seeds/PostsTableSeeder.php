<?php

use Illuminate\Database\Seeder;
// created_at(作成時刻), updated_at(更新時刻)を登録するためのDateTimeクラス
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'C♡raL（K-POPコピユニメンバー募集中♡）',
            'content' => "TWICEの新曲｢ICAN’T STOP ME｣を一緒に踊ってくださる方を募集します！

・都内での活動
・練習時間等はメンバーが集まってから決めようと思ってます
・金銭的に余裕のある方
・協調性ある方
・22歳〜30歳くらい(学生不可)


ご希望の方は
・名前
・年齢
・希望メンバー
・ダンス経験有無

記載の上ご連絡ください！",
            'prefecture' => "東京都",
            'area' => "新宿　東京ドーム",
            'gender' => "female",
            'age' => "10",
            'user_id' => 1
        ]);
    }
}

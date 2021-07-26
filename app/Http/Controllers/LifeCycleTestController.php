<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest()
    {
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクルテスト';
        });

        $test = app()->make('lifeCycleTest');

        // サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run(); // 結果： メッセージ表示

        // サービスコンテナapp() ありのパターン  newでインスタンス化しなくても使える、サンプルクラスの内部でメッセージクラスの設定をしなくても,app->makeだけで使用できる
        // 'sample' という名前をつける。  クラスを紐付けるSample
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample'); //呼び出す名前はsample
        $sample->run(); //sampleのなかのrunメソッド


        dd($test, app());
        // サービスコンテナの中身を確認してみる bindingの中に色々はいってる
        // http://localhost:8600/servicecontainertest
        dd(app());
    }
}


class sample
{
    public $message;
    // 引数に暮らすを入れると自動でインスタンス化してくれる（DI）
    public function __construct(Message $message) {
        $this->message = $message;
    }
    public function run() {
        $this->message->send();
    }
}

class Message
{
    public function send() {
        echo 'メッセージ表示';
    }
}

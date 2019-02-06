<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // 以下を追記
    public function add()
    {
      return view('admin.news.create');
    }
}

//Route
/*ルートとはユーザーからのリクエストを受け取ってコントローラーに渡す役割と、
コントローラーから受け取った情報をユーザーへ返す役割を担う。いわば仲介人。
はじめにルートへどんな情報が渡され、ブラウザにどんな情報が表示されるのかを見る。*/

//routeとは、URLとコントローラーのアクションの対応ルールのこと。
//対応ルールを作成することをルーティングと呼ぶ。
//このURLでアクセスされた時にはこのアクションのコントローラを呼び出してください、
//ということをアプリケーションにお願いをするためのもの。


//Controller
/*コントローラーとは、ルートから受け取った情報をモデルに処理をお願いする役割と、
モデルから受け取った情報をビューに表示する役割がある。
コントローラーは、$php artisan make:controller [コントローラー名]で作成できる。*/

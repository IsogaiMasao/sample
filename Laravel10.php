<?php

// Route::group　は、いくつかのRoutingの設定をgroup化する役割があります。
// 次に書かれている[‘prefix’ => ‘admin’] の設定を、
// その次の無名関数function(){}の中の全てのRoutingの設定に適用させたいからです。
// [‘prefix’ => ‘admin’] は何をしているのかと言うと、
// 無名関数function(){} の中の設定のURLを http://XXXXXX.jp/admin/から始まるURL にしています。
// 例えば、 [‘prefix’ => ‘user’]　にすれば、http://XXXXXX.jp/user/ からはじまるURLを指定することになります。


Route::group(['prefix' => 'admin'], function(){
  Route::get('news/create', 'Admin\NewsController@add');
});

// Route::get('news/create', 'Admin\NewsController@add');
// http://XXXXXX.jp/admin/news/create にアクセスが来たら、
// Controller Admin\NewsController のAction addに渡す という設定をしています。


// 課題
// 1.URLとControllerやActionを紐付ける機能を何といいますか？
// ➡️　route（ルート、ルーティング）


// 2.あなたが考える、group化をすることのメリットを考えてみてください。
// ➡️　group化することにより、一つ一つ条件を書く必要がなくなり、作業の効率化を図れる。


// 3.「http://XXXXXX.jp/XXX というアクセスが来たときに、
//    AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください.

Route::get('XXX','Admin\AAAController@bbb)';



// 4.応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。
//   web.phpを編集して、admin/profile/create にアクセスしたら
//   ProfileController の add Action に、admin/profile/edit にアクセスしたら
//   ProfileController の edit Action に割り当てるように設定してください。





 ?>

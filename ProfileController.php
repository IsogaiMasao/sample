<?php

// 【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update
// それぞれのActionを追加してみましょう。



namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
  public function add()
  {
      die("die");
      return view('admin.profile.add');
  }

  public function create()
  {
    return redirect('admin/profile/create');
  }

  public function edit()
  {
  return view('admin.profile.edit');
  }
  public function update()
  {
  return redirect('admin/profile/edit');
  }
}

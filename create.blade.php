<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>


@extends('layouts.profile')

@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
               <h2>プロフィール作成画面</h2>
               <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                 @if (count($errors) > 0)
                    <ul>
                      @foreach($errors->all() as $e)
                          <li>{{ $e }}</li>
                      @endforeach
                    </ul>
                 @endif
                 <div class="form-group row">
                   <label class="col-md-2" for="name">氏名</label>
                   <div class="col-md-10">
                      <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label class="col-md-2" for="gender">性別</label>
                   <div class="col-md-10">
                      <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                   </div>
                 </div>

                 <div class="form-group row">
                   <label class="col-md-2" for="hobby">趣味</label>
                   <div class="col-md-10">
                      <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                   </div>
                 </div>

                 <div class="form-group row">
                      <label class="col-md-2" for="introduction">自己紹介欄</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                      </div>
                 </div>
                 
               </form>
           </div>
       </div>
   </div>
   @endsection
   </html>

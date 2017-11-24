@extends('layouts.app')
@section('content')
<div class="container">
   <h1>新規</h1>
   <div class="row">
       <div class="col-sm-12">
           <a href="/article" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
       </div>
   </div>
   <form method="post" action="/article">
       <div class="form-group">
           <label>タイトル</label>
           <input type="text" name="title" value="" class="form-control">
       </div>
       <div class="form-group">
           <label>本文</label>
           <input type="text" name="body" value="" class="form-control">
       </div>
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="submit" value="登録" class="btn btn-primary">
   </form>
</div>
@endsection

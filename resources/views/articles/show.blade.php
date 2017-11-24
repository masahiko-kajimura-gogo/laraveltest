@extends('layouts.app')
@section('content')
<div class="container">
   <h1>詳細</h1>
   <div class="row">
       <div class="col-sm-12">
           <a href="/article" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
       </div>
   </div>
   <table class="table table-striped">
       <tr><td>ID</td><td>{{$article->id}}</tr>
       <tr><td>タイトル</td><td>{{$article->title}}</tr>
       <tr><td>本文</td><td>{{$article->body}}</tr>
   </table>
</div>
@endsection

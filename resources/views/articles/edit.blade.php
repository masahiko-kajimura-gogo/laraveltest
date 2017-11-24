@extends('layouts.app')
@section('content')
<div class="container">
   <h1>編集</h1>
   <div class="row">
       <div class="col-sm-12">
           <a href="/article" class="btn btn-primary" style="margin:20px;">一覧に戻る</a>
       </div>
   </div>
   <form method="post" action="/article/{{$article->id}}">
       {!! method_field('put') !!}
       <div class="form-group">
           <label>名前</label>
           <input type="text" name="title" value="{{$article->title}}" class="form-control">
       </div>
       <div class="form-group">
           <label>Email</label>
           <input type="text" name="body" value="{{$article->body}}" class="form-control">
       </div>
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <input type="submit" value="更新" class="btn btn-primary">
   </form>
</div>
@endsection

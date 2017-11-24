@extends('layouts.app')
@section('content')
<div class="container">
   <h1>一覧</h1>
   <div class="row">
       <div class="col-sm-12">
           <a href="/article/create" class="btn btn-primary" style="margin:20px;">新規登録</a>
       </div>
   </div>
   <table class="table table-striped">
   @foreach($articles as $article)
       <tr>
           <td>{{$article->id}}</td>
           <td>{{$article->title}}</td>
           <td>{{$article->body}}</td>
           <td><a href="/article/{{$article->id}}" class="btn btn-primary btn-sm">詳細</a></td>
           <td><a href="/article/{{$article->id}}/edit" class="btn btn-primary btn-sm">編集</a></td>
           <td>
               <form method="post" action="/article/{{$article->id}}">
                    {!! method_field('delete') !!}
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
               </form>
           </td>
       </tr>
   @endforeach
   </table>
</div>
@endsection

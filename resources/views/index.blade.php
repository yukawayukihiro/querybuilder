@extends('layouts.app')

@section('title','ユーザー情報')

@section('content')
    <h1>ユーザー情報確認画面</h1>
    <table border="1">
        <tr>
            <th>名前</th><th>年齢</th><th>メールアドレス</th><th>編集</th>
        </tr>
        @foreach ($user_lists as $list)
        <tr>
            <td>{{$list->name}}</td><td>{{$list->age}}</td><td>{{$list->mail}}</td>
            <td>
                <a href="/hello/edit/{{$list->id}}">編集</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
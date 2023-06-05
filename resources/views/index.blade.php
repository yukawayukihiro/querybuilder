@extends('layouts.app')

@section('title','ユーザー情報')

@section('content')
    <h1>ユーザー情報確認画面</h1>
    <table border="1">
        <tr>
            <th>名前</th><th>年齢</th><th>メールアドレス</th>
        </tr>
        @foreach ($user_lists as $list)
        <tr>
            <td>{{$list->name}}</td><td>{{$list->age}}</td><td>{{$list->mail}}</td>
        </tr>
        @endforeach
    </table>
@endsection
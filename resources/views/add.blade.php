@extends('layouts.app')

@section('title','ユーザー情報追加')

@section('content')
    <h1>ユーザー情報追加画面</h1>
    <form action="/hello/add" method="post">
        <table>
            @csrf
            <tr><th>名前</th><td><input type="text" name="name"></td></tr>
            <tr><th>年齢</th><td><input type="text" name="age"></td></tr>
            <tr><th>メールアドレス</th><td><input type="text" name="mail"></td></tr>
            <tr><th></th><td><input type="submit" value="追加"></td></tr>
        </table>
    </form>
@endsection
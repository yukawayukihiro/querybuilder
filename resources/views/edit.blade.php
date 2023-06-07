@extends('layouts.app')

@section('title','ユーザー情報編集')

@section('content')
    <h1>ユーザー情報編集</h1>
    <form action="/hello/update" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$lists->id}}">
            <tr><th>名前</th><td><input type="text" name="name"></td></tr>
            <tr><th>年齢</th><td><input type="text" name="age"></td></tr>
            <tr><th>メールアドレス</th><td><input type="text" name="mail"></td></tr>
            <tr><th></th><td><input type="submit" value="更新"></td></tr>
        </table>
    </form>
@endsection
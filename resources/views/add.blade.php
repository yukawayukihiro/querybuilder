@extends('layouts.app')

@section('title','ユーザー情報追加')

@section('content')
    <h1>ユーザー情報追加画面</h1>
    @if (count ($errors) > 0)
        <p>入力に誤りがあります。再入力してください。</p>
    @endif 
    <form action="/hello/add" method="post">
        <table>
            @csrf
            @error('name')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>名前</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @error('age')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>年齢</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            @error('mail')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>メールアドレス</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="追加"></td></tr>
        </table>
    </form>
@endsection
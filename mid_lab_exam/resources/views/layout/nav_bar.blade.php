@extends('layout.main')

 <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@section('nav_bar')
<a href="/home/create">Create user</a> |
<a href="{{route('home.userlist')}}">View user list</a> |



@endsection

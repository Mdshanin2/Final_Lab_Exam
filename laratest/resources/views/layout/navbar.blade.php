@extends('layout/main')



@section('navbar')
<a href="{{route('home.index')}}"> Home</a> | 
<a href="{{route('home.create')}}"> Create New</a> | 
<a href="{{route('home.stdlist')}}"> Employee List</a> | 
<a href="/live_search"> search employee</a> |
<a href="/logout"> logout</a> 
@endsection
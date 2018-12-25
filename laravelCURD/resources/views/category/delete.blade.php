@extends('layouts.layout')

@section('header')
   Xóa bài viết số {{ $id }}
@endsection

@section('content')
    <a class="btn btn-primary" href="{{ url('/category/'.$id."/destroy") }}">Xóa</a>
@endsection
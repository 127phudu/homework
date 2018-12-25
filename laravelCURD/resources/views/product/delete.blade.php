@extends('layouts.layout')

@section('header')
   Xóa sản phẩm số {{ $id }}
@endsection

@section('content')
    <a class="btn btn-primary" href="{{ url('/product/'.$id."/destroy") }}">Xóa</a>
@endsection
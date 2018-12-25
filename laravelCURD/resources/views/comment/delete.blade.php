@extends('layouts.layout')

@section('header')
   Xóa comment có id = {{ $id }}
@endsection

@section('content')
    <a class="btn btn-primary" href="{{ url('/comment/'.$id."/destroy") }}">Xóa</a>
@endsection
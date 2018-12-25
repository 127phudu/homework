@extends('layouts.layout')

@section('header')
    Them bai viet
@endsection

@section('content')
    <form action="{{ url('/category') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Tên</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
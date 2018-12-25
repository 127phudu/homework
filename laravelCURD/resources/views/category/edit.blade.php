@extends('layouts.layout')

@section('header')
    Sửa danh mục số {{ $cat['id'] }}
@endsection

@section('content')
    <form action="{{ url('/category/'.$cat['id']  ) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Tên</label>
            <input type="text" class="form-control" id="content" name="name" value="{{ $cat['name'] }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
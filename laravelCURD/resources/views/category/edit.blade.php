@extends('layouts.layout')

@section('header')
    Sửa bài viết số {{ $id }}
@endsection

@section('content')
    <form action="{{ url('/category/'.$id  ) }}" method="post">
        <div class="form-group">
            <label for="content">Nội dung</label>
            <input type="text" class="form-control" id="content" placeholder="Nhập">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
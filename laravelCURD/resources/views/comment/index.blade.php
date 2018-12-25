@extends('layouts.layout')

@section('header')

    Danh sách comment

@endsection

@section('content')
    <div class="insert">
        <a class="btn btn-primary" href="{{ url('comment/insert') }}">Thêm mới</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nội dung</th>
            <th scope="col">product_id</th>
            <th scope="col">Cập nhật lần cuối</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
            <tr>
                <th scope="row">{{ $comment['id'] }}</th>
                <td>{{ $comment['content'] }}</td>
                <td>{{ $comment['product_id'] }}</td>
                <td> {{ $comment['updated_at'] }}</td>
                <td>
                    <a class="btn btn-success btn-xs" href="{{ url('comment/'.$comment['id'].'/edit') }}" >Sửa</a>
                    <a class="btn btn-danger btn-xs" href="{{ url('comment/'.$comment['id'].'/delete') }}">Xóa</a>
                </td>
            </tr>


        @endforeach




        </tbody>
    </table>


@endsection
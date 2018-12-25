@extends('layouts.layout')

@section('header')

    Danh sách danh mục

@endsection

@section('content')
    <div class="insert">
        <a class="btn btn-primary" href="{{ url('category/insert') }}">Thêm mới</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Cập nhật lần cuối</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cats as $cat)
            <tr>
                <th scope="row">{{ $cat['id'] }}</th>
                <td>{{ $cat['name'] }}</td>
                <td> {{ $cat['updated_at'] }}</td>
                <td>
                    <a class="btn btn-success btn-xs" href="{{ url('category/'.$cat['id'].'/edit') }}" >Sửa</a>
                    <a class="btn btn-danger btn-xs" href="{{ url('category/'.$cat['id'].'/delete') }}">Xóa</a>
                </td>
            </tr>


        @endforeach




        </tbody>
    </table>


@endsection
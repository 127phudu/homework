@extends('layouts.layout')

@section('header')

    Danh sách sản phẩm

@endsection

@section('content')
    <div class="insert">
        <a class="btn btn-primary" href="{{ url('product/insert') }}">Thêm mới</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">cat_id</th>
            <th scope="col">price</th>
            <th scope="col">Cập nhật lần cuối</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product['id'] }}</th>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['cat_id'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td> {{ $product['updated_at'] }}</td>
                <td>
                    <a class="btn btn-success btn-xs" href="{{ url('product/'.$product['id'].'/edit') }}" >Sửa</a>
                    <a class="btn btn-danger btn-xs" href="{{ url('product/'.$product['id'].'/delete') }}">Xóa</a>
                </td>
            </tr>


        @endforeach




        </tbody>
    </table>


@endsection
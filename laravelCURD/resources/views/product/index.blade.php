@extends('layouts.layout')

@section('header')

    Danh sách sản phẩm

@endsection

@section('content')

    @if (count($cartContent))
        <div class="container">
            <h2 style="color: orange">Giỏ hàng</h2>
            <p>Chi tiết giỏ hàng</p>
            <table class="table table-bordered table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá cả</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartContent as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ number_format($item->price,0,",",".") }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>@php
                                $total_item = $item->quantity * $item->price;
                                echo $total_item;
                            @endphp VNĐ </td>
                        <th>
                            <a class="btn btn-sm btn-outline-secondary" href="{{ url('cart/'.$item->id.'/remove') }}">Xóa</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="container">
            <h2 style="color: orange">Giỏ hàng</h2>
            <p>Giỏ hàng của bạn đang rỗng</p>
            <br>
        </div>
    @endif

    <div class="insert">
        <a class="btn btn-primary" href="{{ url('product/insert') }}">Thêm mới</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Danh mục</th>
            <th scope="col">price</th>
            <th scope="col">Cập nhật lần cuối</th>
            <th scope="col">Action</th>
            <th scope="col">Cart</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product['id'] }}</th>
                <td>{{ $product['name'] }}</td>
                <td>{{ $categoryName[$product['cat_id']] }}</td>
                <td>{{ $product['price'] }}</td>
                <td> {{ $product['updated_at'] }}</td>
                <td>
                    <a class="btn btn-success btn-xs" href="{{ url('product/'.$product['id'].'/edit') }}" >Sửa</a>
                    <a class="btn btn-danger btn-xs" href="{{ url('product/'.$product['id'].'/delete') }}">Xóa</a>
                </td>
                <td>
                    <form action="{{ url('/cart/'.$product['id'].'/add') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="content" name="quantity" value="1" style="display: inline-block; width: 70px">
                        <button type="submit" class="btn btn-success btn-xs">Add to cart</button>
                    </form>
                </td>
            </tr>


        @endforeach

        </tbody>
    </table>


@endsection
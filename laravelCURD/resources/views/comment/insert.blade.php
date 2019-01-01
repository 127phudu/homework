@extends('layouts.layout')

@section('header')
    Thêm sản phẩm
@endsection

@section('content')
    <form action="{{ url('/comment') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Nội dung</label>
            <input type="text" class="form-control" id="name" name="content" placeholder="Nhập comment">
        </div>
        <div class="form-group">
            <label >Sản phẩm</label>
            <select name="product_id" style="min-width: 300px">
                <option value="">None</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
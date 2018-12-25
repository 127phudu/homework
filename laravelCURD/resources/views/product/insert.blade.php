@extends('layouts.layout')

@section('header')
    Thêm sản phẩm
@endsection

@section('content')
    <form action="{{ url('/product') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Tên</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên">
        </div>
        <div class="form-group">
            <label >Danh mục</label>
            <select name="cat_id" style="min-width: 300px">
                <option value="">None</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label >Giá</label>
            <input type="text" name="price" value="" class="form-control" placeholder="Nhập giá">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
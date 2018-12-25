@extends('layouts.layout')

@section('header')
    Sửa danh mục số {{ $product['id'] }}
@endsection


@section('content')
    <form action="{{ url('/product/'.$product['id']  ) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Tên</label>
            <input type="text" class="form-control" id="content" name="name" value="{{ $product['name'] }}">
        </div>

        <div class="form-group">
            <label >Danh mục</label>
            <select name="cat_id" style="min-width: 300px">
                <option value="">None</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}" {{ ($product->cat_id == $cat->id) ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label >Giá</label>
            <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Nhập giá">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
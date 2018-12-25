@extends('layouts.layout')

@section('header')
    Sửa danh mục số {{ $comment['id'] }}
@endsection


@section('content')
    <form action="{{ url('/comment/'.$comment['id']  ) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Tên</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ $comment['content'] }}">
        </div>

        <div class="form-group">
            <label >Danh mục</label>
            <select name="product_id" style="min-width: 300px">
                <option value="">None</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ ($comment->product_id == $product->id) ? 'selected' : '' }}>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
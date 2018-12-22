@extends('layouts.layout')

@section('header')
    Danh sach bai viet
@endsection

@section('content')
    <div class="insert">
        <a class="btn btn-primary" href="{{ url('category/insert') }}">Them moi</a>
    </div>


    <table class="table table-striped table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <a class="btn btn-success btn-xs" href="{{ url('category/1/edit') }}" >sua</a>
                <a class="btn btn-danger btn-xs" href="{{ url('category/1/delete') }}">xoa</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>
                <a class="btn btn-success btn-xs" href="{{ url('category/2/edit') }}" >sua</a>
                <a class="btn btn-danger btn-xs" href="{{ url('category/2/delete') }}">xoa</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>
                <a class="btn btn-success btn-xs" href="{{ url('category/3/edit') }}" >sua</a>
                <a class="btn btn-danger btn-xs" href="{{ url('category/3/delete') }}">xoa</a>
            </td>
        </tr>

        </tbody>
    </table>


@endsection
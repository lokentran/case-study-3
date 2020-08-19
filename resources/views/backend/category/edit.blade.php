@extends('backend.master.master')
@section('title', 'Sửa sản phẩm')

@section('content')
    <div class="container-fluid mt-5">
        <form action="{{ route('categories.update',  $category->id ) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="vendor" value="{{ $category->vendor }}">
            </div>

            <button class="btn btn-primary mb-3" type="submit">Sửa danh mục</button>

        </form>
    </div>
@endsection
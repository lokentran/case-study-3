@extends('backend.master.master')

@section('title','Thêm danh mục')

@section('content')
    <div class="container-fluid mt-5">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Tên danh mục">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="vendor" placeholder="Nhà sản xuất">
            </div>

            <button class="btn btn-primary mb-3" type="submit">Thêm danh mục</button>

        </form>
    </div>
@endsection
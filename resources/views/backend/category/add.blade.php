@extends('backend.master.master')

@section('title','Thêm danh mục')

@section('content')
    <div class="container-fluid mt-5">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Category">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Vendor">
            </div>

            <button class="btn btn-primary mb-3" type="submit">Add Category</button>

        </form>
    </div>
@endsection
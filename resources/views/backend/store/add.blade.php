@extends('backend.master.master')
@section('title','Thêm cửa hàng')

@section('content')
    <div class="container-fluid mt-5">
        <form action="{{ route('stores.store') }}" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Tên cửa hàng">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Thêm mới</button>
        </form>
    </div>
@endsection
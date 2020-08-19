@extends('backend.master.master')
@section('title','Sửa cửa hàng')

@section('content')
    <div class="container-fluid mt-5">
        <form action="{{ route('stores.update', $store->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{ $store->name }}">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Sửa cửa hàng</button>
        </form>
    </div>
@endsection
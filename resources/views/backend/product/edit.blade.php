@extends('backend.master.master')

@section('title','Sửa sản phẩm')

@section('content')
    <div class="container-fluid">
        <form class="mt-5" action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <label for="">Mô tả sản phẩm</label>
                <textarea name="description" id="" cols="140" rows="5">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="">Danh mục sản phẩm</label>
                <select class="custom-select custom-select-md mb-3" name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" 
                            @if ($category->id == $product->id)
                                selected
                            @endif
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Cửa hàng</label><br>
                @foreach ($stores as $store)
                    <input type="checkbox" id="store-{{ $store->id }}" name="store[{{ $store->id }}]" value="{{ $store->id }}"
                        @foreach ($product->stores as $storeName)
                            @if ($storeName->id == $store->id)
                                checked
                            @endif
                        @endforeach                   
                    >
                    <label for="store-{{ $store->id }}">{{ $store->name }}</label><br>
                @endforeach
            </div>

        
            <label for="">Ảnh sản phẩm</label>
            <div>
                <input type="file" class="form-control" name="image">
            </div>
                
            <button class="mt-3 mb-5 btn btn-primary" type="submit">Thêm sản phẩm</button>

        </form>
    </div>

@endsection
@extends('backend.master.master')
@section('title', "Danh sách cửa hàng")

@section('content')
    <div class="container-fluid mt-5">
        <a href="{{ route('stores.create') }}" class="btn btn-secondary mb-3">Thêm cửa hàng</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>STT</th> 
                    <th>Tên cửa hàng</th>
                    <th colspan="2">Xử lí</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($stores as $key => $store)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $store->name }}</td>
                        <td><a class="btn btn-primary" href="{{ route('stores.edit',$store->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('stores.destroy', $store->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa cửa hàng này không?')" type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>    
                @empty
                    <tr><td>No data</td></tr>
                @endforelse
                
            </tbody>

        </table>
    </div>
@endsection
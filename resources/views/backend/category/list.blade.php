@extends('backend.master.master')
@section('title','Danh mục')
@section('content')
    <div class="container-fluid mt-5">
        <a class="btn btn-secondary mb-3" href="{{ route('categories.create') }}">Add Category</a>
        <table class="table table-striped " >
            <thead>
                <tr>
                    <th>Số TT</th>
                    <th>Danh Mục</th>
                    <th>Nhà sản xuất</th>
                    <th>Xử lí</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->vendor }}</td>
                        <td><a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            No data
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>
    </div>
@endsection
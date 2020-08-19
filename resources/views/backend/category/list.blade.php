@extends('backend.master.master')
@section('title','Danh mục')
@section('content')
    <div class="container-fluid">
        <table class="table table-striped" >
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
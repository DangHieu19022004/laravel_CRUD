@extends('flowers.master')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý hoa</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('flowers.create') }}" class="btn btn-success btn-sm float-end">Thêm hoa</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th class="col-1">Mã hoa</th>
                <th class="col-1">Tên hoa</th>
                <th class="col-1">Mô tả</th>
                <th class="col-1">Đường dẫn</th>
                <th class="col-1">Chức năng</th>
            </tr>
            @if(count($flowers) > 0)
                @foreach($flowers as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->image_url }}</td>

                        <td>
                            <form method="post" action="{{ route('flowers.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('flowers.show', $row->id) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('flowers.edit', $row->id) }}" class="btn btn-warning">Sửa</a>
                                <input type="submit" class="btn btn-danger" value="Xóa">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">No data found</td>
                </tr>
            @endif
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $flowers->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection

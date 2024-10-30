@extends('borrowings.master')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý phiếu mượn</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('borrowings.create') }}" class="btn btn-success btn-sm float-end">Thêm phiếu mượn</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã phiếu mượn</th>
                <th>Mã sách</th>
                <th>Mã thành viên</th>
                <th>Ngày mượn</th>
                <th>Ngày phải trả</th>
                <th>Ngày được trả</th>
                <th>Chức năng</th>
            </tr>
            @if(count($borrowings) > 0)
                @foreach($borrowings as $row)
                    <tr>
                        <td>{{ $row->BorrowingID }}</td>
                        <td>{{ $row->BookID }}</td>
                        <td>{{ $row->MemberID }}</td>
                        <td>{{ $row->BorrowDate }}</td>
                        <td>{{ $row->DueDate }}</td>
                        <td>{{ $row->ReturnedDate }}</td>

                        <td>
                            <form method="post" action="{{ route('borrowings.destroy', $row->BorrowingID) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('borrowings.show', $row->BorrowingID) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('borrowings.edit', $row->BorrowingID) }}" class="btn btn-warning">Sửa</a>
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
        {{ $borrowings->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection

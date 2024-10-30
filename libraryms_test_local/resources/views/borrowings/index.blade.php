<?php
    use App\Constants\Table;
?>
@extends('borrowings.master')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý {{Table::nameOfTitle}}</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b></b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('borrowings.create') }}" class="btn btn-success btn-sm float-end">Thêm {{Table::nameOfTitle}}</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>

                <th class="col-1">{{Table::column1}}</th>
                <th class="col-1">{{Table::column2}}</th>
                <th class="col-1">{{Table::column3}}</th>
                <th class="col-1">{{Table::column4}}</th>
                <th class="col-1">{{Table::column5}}</th>
                <th class="col-1">{{Table::column6}}</th>

                <th class="col-2">Chức năng</th>
            </tr>
            @if(count($borrowings) > 0)
                @foreach($borrowings as $row)
                    <tr>
                        <td>{{ $row->{Table::tb2_1} }}</td>
                        <td>{{ $row->{Table::tb2_2} }}</td>
                        <td>{{ $row->{Table::tb2_3} }}</td>
                        <td>{{ $row->{Table::tb2_4} }}</td>
                        <td>{{ $row->{Table::tb2_5} }}</td>
                        <td>{{ $row->{Table::tb2_6} }}</td>

                        <td>
                            <form method="post" action="{{ route('borrowings.destroy', $row->{Table::tb2_1}) }}"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa thông tin không?');"
                            >
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('borrowings.show', $row->{Table::tb2_1}) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('borrowings.edit', $row->{Table::tb2_1}) }}" class="btn btn-warning">Sửa</a>
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

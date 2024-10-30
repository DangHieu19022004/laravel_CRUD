@extends('borrowings.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b>Thông tin phiếu mượn chi tiết</b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('borrowings.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Mã phiếu mượn</b></label>
            <div class="col-sm-10">
                {{ $borrowing->BorrowingID }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Mã sách</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->BookID }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Tên sách</b></label>
            <div class="col-sm-10">
                    {{ $book->Title }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Mã thành viên</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->MemberID }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Ngày mượn</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->BorrowDate }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Ngày phải trả</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->DueDate }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Ngày trả</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->ReturnedDate }}
            </div>
        </div>

        <a href="{{route('borrowings.index')}}"class="btn btn-secondary">Quay lại</a>
    </div>
</div>


@endsection('content')

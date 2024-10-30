@extends('borrowings.master')

@section('content')

@if($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">Thêm phiếu mượn mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('borrowings.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="BookID" class="col-sm-2 col-form-label">Mã sách</label>
                <select name="BookID" id="BookID" class="form-select" required>
                    @foreach ($books as $book )
                        <option value="{{$book->BookID}}">{{$book->BookID}}</option>
                    @endforeach
                </select>
            </div>


            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Mã người mượn</label>
                <div class="col-sm-10">
                    <input type="text" name="MemberID" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Ngày mượn sách</label>
                <div class="col-sm-10">
                    <input type="date" name="BorrowDate" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Ngày phải trả sách</label>
                <div class="col-sm-10">
                    <input type="date" name="DueDate" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Ngày trả sách</label>
                <div class="col-sm-10">
                    <input type="date" name="ReturnedDate" class="form-control">
                </div>
            </div>

            <div>
                <div class="text-center">
                    <a href="{{route(('borrowings.index'))}}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

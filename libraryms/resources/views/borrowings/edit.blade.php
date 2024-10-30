@extends('borrowings.master')

@section('content')

<div class="card">
    <div class="card-header">Sửa thông tin phiếu mượn</div>
    <div class="card-body">
        <form method="post" action="{{ route('borrowings.update', $borrowing->BorrowingID) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="BookID" class="col-sm-2 col-form-label">Mã sách</label>
                <select name="BookID" id="BookID" class="form-select" required>
                    @foreach ($books as $book )
                        <option value="{{ $book->BookID }}" {{ $book->BookID == $borrowing->BookID ? 'selected' : '' }}>
                            {{ $book->BookID }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Mã thành viên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="MemberID" name="MemberID" value="{{ $borrowing->MemberID }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Ngày mượn</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="BorrowDate" value="{{ $borrowing->BorrowDate }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Ngày phải trả</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="DueDate" value="{{ $borrowing->DueDate }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Ngày trả</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="ReturnedDate" value="{{ $borrowing->ReturnedDate }}">
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id"value="{{$borrowing->BorrowingID}}"/>
                <a href="{{ route('borrowings.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" name="edit" class="btn btn-primary" value="Sửa"/>
            </div>
        </form>
    </div>

</div>

<script>
    document.getElementsByName('borrowingGender')[0].value = "{{$borrowing->borrowingGender}}";
</script>

@endsection('content')

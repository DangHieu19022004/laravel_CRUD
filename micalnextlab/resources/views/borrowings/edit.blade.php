<?php
    use App\Constants\Table;
?>
@extends('borrowings.master')

@section('content')

<div class="card">
    <div class="card-header">Sửa thông tin {{ Table::nameOfTitle }}</div>
    <div class="card-body">
        <form method="post" action="{{ route('borrowings.update', $borrowing->{Table::tb2_1}) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="BookID" class="col-sm-2 col-form-label">{{ Table::column2 }}</label>
                <select name="{{ Table::tb2_2}}" id="BookID" class="form-select" required>
                    @foreach ($books as $book )
                        <option value="{{ $book->id }}" {{ $book->id == $borrowing->type_id ? 'selected' : '' }}>
                            {{ $book->id }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">{{ Table::column3 }}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="{{ Table::tb2_3 }}" name="{{ Table::tb2_3 }}" value="{{ $borrowing->{ Table::tb2_3} }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">{{ Table::column4 }}</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="{{ Table::tb2_4 }}" value="{{ $borrowing->{ Table::tb2_4 } }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">{{ Table::column5 }}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="{{ Table::tb2_5 }}" value="{{ $borrowing->{ Table::tb2_5 } }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">{{ Table::column6 }}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="{{ Table::tb2_6 }}" value="{{ $borrowing->{ Table::tb2_6 } }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">{{ Table::column7 }}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="{{ Table::tb2_7 }}" value="{{ $borrowing->{ Table::tb2_7 } }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">{{ Table::column8}}</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="{{ Table::tb2_8}}" value="{{ $borrowing->{ Table::tb2_8 } }}">
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id"value="{{ $borrowing->{ Table::tb2_1 } }}"/>
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

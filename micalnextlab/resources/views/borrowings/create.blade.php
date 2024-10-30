<?php
    use App\Constants\Table;
?>
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
    <div class="card-header">Thêm {{Table::nameOfTitle}} mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('borrowings.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="BookID" class="col-sm-2 col-form-label">{{Table::column2}}</label>
                <select name="{{Table::tb2_2}}" id="BookID" class="form-select" required>
                    @foreach ($books as $book )
                        <option value="{{$book->id}}">{{$book->id}}</option>
                    @endforeach
                </select>
            </div>


            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{Table::column3}}</label>
                <div class="col-sm-10">
                    <input type="text" name="{{Table::tb2_3}}" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{Table::column4}}</label>
                <div class="col-sm-10">
                    <input type="date" name="{{Table::tb2_4}}" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{Table::column5}}</label>
                <div class="col-sm-10">
                    <input type="text" name="{{Table::tb2_5}}" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{Table::column6}}</label>
                <div class="col-sm-10">
                    <input type="text" name="{{Table::tb2_6}}" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{Table::column7}}</label>
                <div class="col-sm-10">
                    <input type="text" name="{{Table::tb2_7}}" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">{{Table::column8}}</label>
                <div class="col-sm-10">
                    <input type="text" name="{{Table::tb2_8}}" class="form-control">
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

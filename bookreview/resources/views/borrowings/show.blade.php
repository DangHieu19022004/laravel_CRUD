<?php
    use App\Constants\Table;
?>
@extends('borrowings.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b>Thông tin {{Table::nameOfTitle}} chi tiết</b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('borrowings.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column1}}</b></label>
            <div class="col-sm-10">
                {{ $borrowing->{Table::tb2_1} }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column2}}</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->{Table::tb2_2} }}
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column3}}</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->{Table::tb2_3} }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column4}}</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->{Table::tb2_4} }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column5}}</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->{Table::tb2_5} }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column6}}</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->{Table::tb2_6} }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>{{Table::column7 }}</b></label>
            <div class="col-sm-10">
                    {{ $borrowing->{Table::tb2_7 } }}
            </div>
        </div>

        <a href="{{route('borrowings.index')}}"class="btn btn-secondary">Quay lại</a>
    </div>
</div>


@endsection('content')

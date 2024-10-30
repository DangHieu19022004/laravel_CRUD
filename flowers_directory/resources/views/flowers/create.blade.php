@extends('flowers.master')

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
    <div class="card-header">Thêm hoa mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('flowers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tên hoa</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <input type="text" name="image_url" class="form-control">
                </div>
            </div>
            <div>
                <div class="text-center">
                    <a href="{{route(('flowers.index'))}}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@extends('flowers.master')

@section('content')

<div class="card">
    <div class="card-header">Sửa thông tin hoa</div>
    <div class="card-body">
        <form method="post" action="{{ route('flowers.update', $flower->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Tên hoa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="flowerName" name="name" value="{{ $flower->name }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="{{ $flower->description }}">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="image_url" value="{{ $flower->image_url }}">
                </div>
            </div>


            <div class="text-center">
                <input type="hidden" name="hidden_id"value="{{$flower->id}}"/>
                <a href="{{ route('flowers.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" name="edit" class="btn btn-primary" value="Sửa"/>
            </div>
        </form>
    </div>

</div>


@endsection('content')

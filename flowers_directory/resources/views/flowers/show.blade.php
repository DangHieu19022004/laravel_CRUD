@extends('flowers.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <b>Thông tin hoa chi tiết</b>
            </div>
            <div class="col col-md-6">
                <a href="{{ route('flowers.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Tên hoa</b></label>
            <div class="col-sm-10">
                {{ $flower->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Mô tả</b></label>
            <div class="col-sm-10">
                    {{ $flower->description }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>URL</b></label>
            <div class="col-sm-10">
                    {{ $flower->image_url }}
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"><b>Khu vực phân bố</b></label>
            <div class="col-sm-10">
                @if($regions->isNotEmpty())
                    <ul class="list-group list-group-flush">
                        @foreach($regions as $region)
                            @if($region->flower_id == $flower->id)
                                <li class="list-group-item">{{ $region->region_name }}</li>
                            @endif
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">Không có dữ liệu</p>
                @endif
            </div>
        </div>
        <a href="{{route('flowers.index')}}"class="btn btn-secondary">Quay lại</a>
    </div>
</div>


@endsection('content')

@extends('students.master')

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
    <div class="card-header">Thêm sinh viên mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tên sinh viên</label>
                <div class="col-sm-10">
                    <input type="text" name="StudentName" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Địa chỉ Email</label>
                <div class="col-sm-10">
                    <input type="text" name="StudentEmail" class="form-control">
                </div>
            </div>
            <div class="row mb-4">
                <label for="" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                   <select name="StudentGender" id="" class="form-control">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                   </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="ClassRoomID" class="form-lable">Chọn lớp</label>
                <select name="ClassRoomID" id="ClassRoomID" class="form-select" required>
                    @foreach ($classrooms as $classroom )
                        <option value="{{$classroom->ClassRoomID}}">{{$classroom->ClassRoomName}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <div class="text-center">
                    <a href="{{route(('students.index'))}}" class="btn btn-secondary">Quay lại</a>
                    <input type="submit" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@extends('project.pro_layouts.master')
@section('content')
    <form action="{{route('threesession.update', $threesession->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('project.pro_layouts._form')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
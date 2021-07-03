@extends('project.pro_layouts.master')
@section('content')
    <form action="{{route('threesession.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('project.pro_layouts._form')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
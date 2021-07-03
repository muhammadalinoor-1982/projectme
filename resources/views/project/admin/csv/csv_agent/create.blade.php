@extends('project.pro_layouts.master')
@section('content')
    <button class="btn btn-sm btn-success"><a href="{{url('/csv_sample/bulk_upload csv.csv')}}">Download Sample file</a></button>
    <br><br><br>
    <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-4 col-12 mb-20">

            <h6 class="mb-15">Upload</h6>

            <div class="row mbn-15">

                <div class="col-12 mb-15"><input name="file" type="file" id="file" class="form-control form-control-sm @error('file') is-invalid @enderror" ></div>
                @error('file')
                <div class="pl-1 text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Upload</button>
            </div>
        </div>
    </form>

@endsection
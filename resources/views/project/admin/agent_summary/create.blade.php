@extends('project.pro_layouts.master')
@section('content')
    <form action="{{route('agent_summary.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @include('project.pro_layouts._formSummary')
        <div class="form-group">
            <div class="col-sm-6">
                <button class="btn btn-sm btn-success">Create</button>
            </div>
        </div>
    </form>

@endsection
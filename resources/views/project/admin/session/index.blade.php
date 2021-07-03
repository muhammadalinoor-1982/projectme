@extends('project.pro_layouts.master')
@section('content')
    <a href="{{route('threesession.create')}}" class="btn btn-sm btn-primary">Add New</a>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Export Data Table</h3>
            </div>
            <div class="box-body">

                <table class="table table-bordered data-table data-table-export">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($threesessions as $row)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            @if($row->deleted_at == null)
                                <a class="btn btn-sm btn-success" href="{{ route('threesession.edit',$row->id) }}">Edit</a>
                                <form  action="{{ route('threesession.destroy',$row->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to delete this session')">Delete</button>
                                </form>
                            @else
                                <form  action="{{ route('threesession.restore',$row->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-success" onclick="return confirm('Are you confirm to restore this sesstion')">Restore</button>
                                </form>
                                <form  action="{{ route('threesession.delete',$row->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to permanently delete this session')">P_Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL#</th>
                        <th>name</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
    <script>
        $('.data-table-default').DataTable({
            responsive: true,
            language: {
                paginate: {
                    previous: '',
                    next: ''
                }
            }
        });
    </script>
@endsection
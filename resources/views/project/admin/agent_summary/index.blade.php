@extends('project.pro_layouts.master')
@section('content')

    <a href="{{route('agent_summary.create')}}" class="btn btn-sm btn-primary">Add New</a>
    <a href="{{route('csv_agent.create')}}" class="btn btn-sm btn-primary">Add Bulk</a>

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
                        <th>Session name</th>
                        <th>Total Call</th>
                        <th>Total_Ticket</th>
                        <th>Created By</th>
                        <th>Updated By</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($agent_summaries as $row)
                        <tr>
                            @if(Auth::user()->user_type == 'agent' && $row->deleted_at == null)
                            <td>{{ $serial++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->threesession->name }}</td>
                            <td>{{ $row->total_call }}</td>
                            <td>{{ $row->total_ticket }}</td>
                            <td>{{ $row->user_name}}</td>
                            {{--<td>{{Auth::user()->name}}</td>--}}
                            <td>{{ $row->update_user_name}}</td>
                            @elseif(Auth::user()->user_type != 'agent')
                                <td>{{ $serial++ }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->threesession->name }}</td>
                                <td>{{ $row->total_call }}</td>
                                <td>{{ $row->total_ticket }}</td>
                                <td>{{ $row->user_name}}</td>
                                {{--<td>{{Auth::user()->name}}</td>--}}
                                <td>{{ $row->update_user_name}}</td>
                            @endif
                            <td>
                                @if(Auth::user()->user_type == 'agent' && $row->deleted_at == null)
                                    <a class="btn btn-sm btn-success" href="{{ route('agent_summary.edit',$row->id) }}">Edit</a>
                                    <form  action="{{ route('agent_summary.destroy',$row->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to delete this Summary')">Delete</button>
                                    </form>
                                @endif

                                    {{--start Supervidor authuraization Part--}}
                                @if(Auth::user()->user_type == 'supervisor' && $row->deleted_at == null)
                                        <a class="btn btn-sm btn-success" href="{{ route('agent_summary.edit',$row->id) }}">Edit</a>
                                        <form  action="{{ route('agent_summary.destroy',$row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to delete this Summary')">Delete</button>
                                        </form>
                                    @elseif(Auth::user()->user_type == 'supervisor')
                                    <form  action="{{ route('agent_summary.restore',$row->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-success" onclick="return confirm('Are you confirm to restore this Summary')">Restore</button>
                                    </form>
                                @endif
                                    {{--End Supervidor authuraization Part--}}

                                {{--start Admin authuraization Part--}}
                                @if(Auth::user()->user_type == 'admin' && $row->deleted_at == null)
                                        <a class="btn btn-sm btn-success" href="{{ route('agent_summary.edit',$row->id) }}">Edit</a>
                                        <form  action="{{ route('agent_summary.destroy',$row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-warning" onclick="return confirm('Are you confirm to delete this Summary')">Delete</button>
                                        </form>
                                    @elseif(Auth::user()->user_type == 'admin')
                                        <form  action="{{ route('agent_summary.restore',$row->id) }}" method="post">
                                            @csrf
                                            <button class="btn btn-sm btn-success" onclick="return confirm('Are you confirm to restore this Summary')">Restore</button>
                                        </form>
                                    <form  action="{{ route('agent_summary.delete',$row->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you confirm to permanently delete this Summary')">P_Delete</button>
                                    </form>
                                @endif
                                    {{--end Admin authuraization Part--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL#</th>
                        <th>name</th>
                        <th>Session name</th>
                        <th>Total Call</th>
                        <th>Total_Ticket</th>
                        <th>Created By</th>
                        <th>Updated By</th>
                        <th>Deleted By</th>
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
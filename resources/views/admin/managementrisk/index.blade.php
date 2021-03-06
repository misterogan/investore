@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Management Risk List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="float-right">
                            <div class="form-group">
                                <button type="button" class="btn btn-outline-primary" id="addmanagementRisk">Add Management Risk</button>
                            </div>
                        </div>

                        <div class="datatable">
                            <table class="table table-striped" id="userlist_table">
                                <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Management Name</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($management_risk as $mr)
                                    <tr>
                                        <td>{{  $loop->iteration  }}</td>
                                        <td>{{ $mr->management_risk }}</td>
                                        <td>{{ $mr->status == "1" ? "Active" : "Inactive" }}</td>
                                        <td>{{ $mr->created_at }}</td>
                                        <td>
                                            @if( $mr->status == "1")
                                                <label class="switch">
                                                    <input type="checkbox" onchange="toggleCheckbox('{{$mr->id}}','inactive')" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            @else
                                                <label class="switch">
                                                    <input type="checkbox" onchange="toggleCheckbox('{{$mr->id}}','active')">
                                                    <span class="slider round"></span>
                                                </label>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="form-content" style="display:none;">
        <form class="form" id="form_management_risk" role="form">
            <div class="form-group">
                <label for="management_risk">Management Risk</label>
                <input type="text" class="form-control" id="management_risk" name="management_risk">
            </div>
        </form>
    </div>
@section('js')
    <script src="{{url('/assets/js/management_risk.js')}}" type="application/javascript" ></script>
@endsection

@endsection

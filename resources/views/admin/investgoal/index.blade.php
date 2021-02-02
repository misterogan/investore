@extends('layouts.app')
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Investation Goal List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="float-right">
                            <div class="form-group">
                                <a href="/admin/assets/add"><button type="button" class="btn btn-outline-primary">Add Investation Goal</button></a>
                            </div>
                        </div>

                        <div class="datatable">
                            <table class="table table-striped" id="userlist_table">
                                <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Investation</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($investation_goal as $goal)
                                    <tr>
                                        <td>{{  $loop->iteration  }}</td>
                                        <td>{{ $goal->investation_goal }}</td>
                                        <td>{{ $goal->icon }}</td>
                                        <td>{{ $goal->status == "1" ? "Active" : "Inactive" }}</td>
                                        <td>{{ $goal->created_at }}</td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
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
@section('js')
    <script src="{{url('/js/users.js')}}" type="application/javascript"></script>
    <script>

    </script>
@endsection

@endsection

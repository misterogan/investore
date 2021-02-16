@extends('layouts.app')
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
                                    <th>Seq</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($investation_goal as $goal)
                                    <tr>
                                        <td>{{  $loop->iteration  }}</td>
                                        <td>{{ $goal->investation_goal }}</td>
                                        <td>{{ $goal->icon }}</td>
                                        <td>
                                            <select class="form-control" name="sequence" id="sequence">
                                                <option value="1" @if (old($goal->sequence) == '1') selected="selected" @endif>1</option>
                                                <option value="2" @if (old($goal->sequence) == '2') selected="selected" @endif>2</option>
                                                <option value="3" @if (old($goal->sequence) == '3') selected="selected" @endif>3</option>
                                                <option value="4" @if (old($goal->sequence) == '4') selected="selected" @endif>4</option>
                                            </select>

{{--                                            {{ $goal->sequence }}--}}
                                        </td>
                                        <td>{{ $goal->status == "1" ? "Active" : "Inactive" }}</td>
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

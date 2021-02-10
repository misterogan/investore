@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Expectation List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="float-right">
                            <div class="form-group">
                                <button type="button" class="btn btn-outline-primary" id="addExpectation">Add Expectation</button>
                            </div>
                        </div>

                        <div class="datatable">
                            <table class="table table-striped" id="userlist_table">
                                <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Expectation</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expectations as $expectation)
                                    <tr>
                                        <td>{{  $loop->iteration  }}</td>
                                        <td>{{ $expectation->expectation }}</td>
                                        <td>{{ $expectation->status == "1" ? "Active" : "Inactive" }}</td>
                                        <td>{{ $expectation->created_at }}</td>
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

    <div class="form-content" style="display:none;">
        <form class="form" id="form_asset" role="form">
            <div class="form-group">
                <label for="assetname">Expectations On investment</label>
                <input type="text" class="form-control" id="expecation_name" name="expecation_name">
            </div>
        </form>
    </div>
@section('js')
    <script src="{{url('/assets/js/expectation.js')}}" type="application/javascript" ></script>

@endsection

@endsection

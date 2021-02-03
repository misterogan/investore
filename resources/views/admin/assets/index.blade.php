@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Asset List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="float-right">
                            <div class="form-group">
                               <button type="button" class="btn btn-outline-primary" id="addAsset">Add Asset</button>
                            </div>
                        </div>

                            <div class="datatable">
                            <table class="table table-striped" id="userlist_table">
                                <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Asset Name</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($assets as $asset)
                                    <tr>
                                        <td>{{  $loop->iteration  }}</td>
                                        <td>{{ $asset->asset_name }}</td>
                                        <td>{{ $asset->status == "1" ? "Active" : "Inactive" }}</td>
                                        <td>{{ $asset->created_at }}</td>
                                        <td>
                                            @if( $asset->status == "1")
                                            <label class="switch">
                                                <input type="checkbox" onchange="toggleCheckbox(this)" checked>
                                                <span class="slider round"></span>
                                            </label>
                                             @else
                                                <label class="switch">
                                                    <input type="checkbox" onchange="toggleCheckbox(this)">
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
        <form class="form" id="form_asset" role="form">
            <div class="form-group">
                <label for="assetname">Asset Name</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name">
            </div>
        </form>
    </div>


@section('js')
    <script src="{{url('/assets/js/asset.js')}}" type="application/javascript" ></script>
@endsection

@endsection

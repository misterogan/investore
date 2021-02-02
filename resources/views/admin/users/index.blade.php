@extends('layouts.app')
@section('content')

    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('User List') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="datatable">
                                    <table class="table table-striped" id="userlist_table">
                                        <thead>
                                            <tr>
                                                <th>Num</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{  $loop->iteration  }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td><button class="btn btn-sm btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i></button></td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 offset-lg-4 py-5  d-flex">
                                                {{ $users->links() }}
                                            </div>
                                        </div>
                                    </div>


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

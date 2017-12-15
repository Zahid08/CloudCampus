@extends('admin.master')
@section('pageTitle')
    Messages Setting
@endsection
@section('pgSubTitle')
    User Messages
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="box box-info">
                    <div class="box-header with-border" style="color: blue">
                        <h3 class="box-title">View Users Messages</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        @foreach($userMsg as $key => $user)

                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->user_message }}</td>
                                <td>
                                    <a href="{{ url('/delete-guest-user-message/'.$user->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Message ???');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                        @endforeach



                    </table>
                </div>
            </div>
        </div>

    </section>

@endsection

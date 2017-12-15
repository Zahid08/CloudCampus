@extends('admin.master')
@section('pageTitle')
    Messages Setting
@endsection
@section('pgSubTitle')
    Messages
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="box box-info">
                    <div class="box-header with-border" style="color: blue">
                        <h3 class="box-title">View Users</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Type</th>
                            <th>Update Type</th>
                            <th>Action</th>
                        </tr>
                        @foreach($users as $key => $user)

                            <tr>
                                <td class="text-center">{{ $key+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <form class="form-horizontal" method="POST" action="{{ url('update-user-type',$user->id) }}">
                                    {{ csrf_field() }}
                                <td>
                                    @if($user->user_type == 'na')
                                        <span class="label label-warning">Normal</span>
                                    @elseif($user->user_type == 'st')
                                        <span class="label label-info">Student</span>
                                    @elseif($user->user_type == 'te')
                                        <span class="label label-success">Teacher</span>
                                    @elseif($user->user_type == 'ad')
                                        <span class="label label-primary">Admin</span>
                                    @endif
                                </td>
                                <td>
                                    @if($user->user_type == 'ad')
                                        <select class="form-control btn-xs" name="user_type">
                                            <option value="ad">Admin</option>
                                        </select>
                                    @else
                                        <select class="form-control btn-xs" name="user_type">
                                             <option value="na">Select One</option>
                                             <option value="st">Student</option>
                                             <option value="te">Teacher</option>
                                             <option value="na">Normal</option>
                                        </select>
                                    @endif
                                </td>
                                <td>
                                    @if($user->user_type == 'ad')
                                        <a href="#" class="btn btn-primary btn-xs" title="Admin">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </a>
                                    @else
                                        <input type="submit" name="btn" class="btn btn-warning btn-xs" value="OK">
                                    @endif
                                </td>
                                </form>
                            </tr>
                        @endforeach



                    </table>
                </div>
            </div>
        </div>

    </section>

@endsection

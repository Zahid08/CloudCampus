@extends('admin.master')
@section('pageTitle')
    Department Setting
@endsection
@section('pgSubTitle')
    Department
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Department</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-department') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dpt_name" class="col-sm-3 control-label">Department Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="dpt_name" maxlength="100" required class="form-control" id="dpt_name" placeholder="Add a Department">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dpt_description" class="col-sm-3 control-label">Department Description</label>
                                <div class="col-sm-9">
                                    <input type="text" name="dpt_description" class="form-control" id="dpt_description" placeholder="Add Description">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Department</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-info">
                    <div class="box-header with-border" style="color: blue">
                        <h3 class="box-title">View Department</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Department Name</th>
                            <th>Department Description</th>
                            <th>Action</th>
                        </tr>

                        @foreach($departments as $key =>$department)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $department->dpt_name }}</td>
                                <td>{{ $department->dpt_description }}</td>
                                <td>
                                    <a data-id="{{ $department->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $department->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $department->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-department') }}" method="POST" name="editContentForm">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Department Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                {{--<label for="id_M">Course Id</label>--}}
                                                                <input type="hidden" name="id_M" value="{{ $department->id }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="dpt_name_M">Department Name</label>
                                                                <input type="text" name="dpt_name_M" maxlength="100" value="{{ $department->dpt_name }}"  class="form-control"  placeholder="Department Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="dpt_description_M">Department Description</label>
                                                                <input type="text" name="dpt_description_M" maxlength="50" value="{{ $department->dpt_description }}" class="form-control" placeholder="Department Description">
                                                            </div>

                                                            <input type="submit" class="pull-left btn btn-warning" value="Update">

                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        {{--<button type="submit" name="btnM" class="pull-left btn btn-warning" data-dismiss="modal">--}}
                                                        {{--<span class="glyphicon glyphicon-saved">Update</span>--}}
                                                        {{--</button>--}}
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                    <a href="{{ url('/delete-department/'.$department->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Department ???');">
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

@extends('admin.master')
@section('pageTitle')
    Course Setting
@endsection
@section('pgSubTitle')
    Course
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
                        <h3 class="box-title">Add New Course</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                    @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/course/new-course') }}">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="course_code" class="col-sm-3 control-label">Course Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_code" maxlength="6" required class="form-control" id="course_code" placeholder="Add a code">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="course_name" class="col-sm-3 control-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_name" maxlength="100" required class="form-control" id="course_name" placeholder="Add a Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="course_duration" class="col-sm-3 control-label">Course Duration</label>

                                <div class="col-sm-9">
                                    <input type="text" name="course_duration" maxlength="50" required class="form-control" id="course_duration" placeholder="Add duration">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="course_start_date" class="col-sm-3 control-label">Course Start Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_start_date" maxlength="100" required class="form-control" id="course_start_date" placeholder="Add start date">
                                </div>
                            </div>



                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Course</button>
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
                <h3 class="box-title">View Course</h3>
            </div>
            <table class="table table-bordered table-hover table-striped">
                <tr class="info text-primary">
                    <th>SL.</th>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Course Duration</th>
                    <th>Course Start Date</th>
                    <th>Action</th>
                </tr>


                    @foreach($courses as $key =>$cours)
                    <tr>
                    <td class="text-center">{{ $key+1  }}</td>
                    <td>{{ $cours->course_code }}</td>
                    <td>{{ $cours->course_name }}</td>
                    <td>{{ $cours->course_duration }}</td>
                    <td>{{ $cours->course_start_date }}</td>
                    <td>

                        <a data-id="{{ $cours->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $cours->id }}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                        <div  class="modal fade" id="editModal{{ $cours->id }}" aria-hidden="true" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form role="form" action="{{ url('/course/update-course') }}" method="POST" name="editContentForm">
                                        {{ csrf_field() }}
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Course Edit</h4>
                                    </div>
                                    <div class="modal-body">

                                            <div class="box-body">
                                                <div class="form-group">
                                                    {{--<label for="id_M">Course Id</label>--}}
                                                    <input type="hidden" name="id_M" value="{{ $cours->id }}" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="course_code_M">Course Code</label>
                                                    <input type="text" name="course_code_M" maxlength="6" required value="{{ $cours->course_code }}" class="form-control" placeholder="Course Code">
                                                </div>
                                                <div class="form-group">
                                                    <label for="course_name_M">Course Name</label>
                                                    <input type="text" name="course_name_M" maxlength="100" required value="{{ $cours->course_name }}"  class="form-control"  placeholder="Course Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="course_duration_M">Course Duration</label>
                                                    <input type="text" name="course_duration_M" maxlength="50" required value="{{ $cours->course_duration }}" class="form-control" placeholder="Course Duration">
                                                </div>
                                                <div class="form-group">
                                                    <label for="course_start_date_M">Course Start Date</label>
                                                    <input type="text" name="course_start_date_M" maxlength="100" required value="{{ $cours->course_start_date }}"  class="form-control"  placeholder="Course Start Date">
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

                        <a href="{{ url('/course/delete-course/'.$cours->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Course ???');">
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

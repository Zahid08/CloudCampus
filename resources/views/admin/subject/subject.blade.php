@extends('admin.master')
@section('pageTitle')
    Subject Setting
@endsection
@section('pgSubTitle')
    Subject
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
                        <h3 class="box-title">Add New Subject</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/subject/new-subject') }}">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="sub_code" class="col-sm-3 control-label">Subject Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sub_code" required maxlength="20" class="form-control" id="sub_code" placeholder="Add a code">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sub_name" class="col-sm-3 control-label">Subject Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sub_name" required maxlength="100" class="form-control" id="sub_name" placeholder="Add a Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sub_description" class="col-sm-3 control-label">Subject Description</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sub_description" required class="form-control" id="sub_description" placeholder="Add Description">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Subject</button>
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
                        <h3 class="box-title">View Subject</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Subject Description</th>
                            <th>Action</th>
                        </tr>

                        @foreach($subjects as $key =>$subject)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $subject->sub_code }}</td>
                                <td>{{ $subject->sub_name }}</td>
                                <td>{{ $subject->sub_description }}</td>
                                <td>

                                    <a data-id="{{ $subject->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $subject->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $subject->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/subject/update-subject') }}" method="POST" name="editContentForm">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Subject Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                {{--<label for="id_M">Course Id</label>--}}
                                                                <input type="hidden" name="id_M" value="{{ $subject->id }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="course_code_M">Subject Code</label>
                                                                <input type="text" name="sub_code_M" required maxlength="6" value="{{ $subject->sub_code }}" class="form-control" placeholder="Subject Code">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="course_name_M">Subject Name</label>
                                                                <input type="text" name="sub_name_M" required maxlength="100" value="{{ $subject->sub_name }}"  class="form-control"  placeholder="Subject Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="course_duration_M">Subject Description</label>
                                                                <input type="text" name="sub_description_M" required maxlength="50" value="{{ $subject->sub_description }}" class="form-control" placeholder="Subject Description">
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

                                    <a href="{{ url('/subject/delete-subject/'.$subject->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Subject ???');">
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

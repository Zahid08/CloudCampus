@extends('admin.master')
@section('pageTitle')
    Employee Setting
@endsection
@section('pgSubTitle')
    Employees
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
                        <h3 class="box-title">Add New Employee</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-employee') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="employee_id" class="col-sm-3 control-label">Employee ID</label>
                                <div class="col-sm-9">
                                    <input type="text" name="employee_id" maxlength="20" class="form-control" id="employee_id" placeholder="Employee ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="employee_name" class="col-sm-3 control-label">Employee Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="employee_name" maxlength="100" required class="form-control" id="employee_name" placeholder="Employee Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="employee_type" class="col-sm-3 control-label">Employee Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="employee_type">
                                        <option value="">Select One</option>
                                        <option value="Teacher">Teacher</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Principle">Principle</option>
                                        <option value="vice Principle">vice Principle</option>
                                        <option value="Chairman">Chairman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="department_id" class="col-sm-3 control-label">Department</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="department_id">
                                        <option value="0">Select One</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->dpt_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="designation_id" class="col-sm-3 control-label">Designation</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="designation_id">
                                        <option value="0">Select One</option>
                                        @foreach($designations as $designation)
                                            <option value="{{ $designation->id }}">{{ $designation->deg_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="education" class="col-sm-3 control-label">Last Education</label>
                                <div class="col-sm-9">
                                    <input type="text" name="education" maxlength="200" required class="form-control" id="education" placeholder="Message Period">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="join_date" class="col-sm-3 control-label">Joining Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="join_date" maxlength="20" required class="form-control" id="join_date" placeholder="Message Period">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image_path" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image_path" accept="image/*"/>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Employee</button>
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
                        <h3 class="box-title">View Employee</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Employee Type</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Education</th>
                            <th>Joining Date</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($employees as $key => $employee)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $employee->employee_id }}</td>
                                <td>{{ $employee->employee_name }}</td>
                                <td>{{ $employee->employee_type }}</td>
                                <td>{{ $employee->dpt_name }}</td>
                                <td>{{ $employee->deg_name }}</td>
                                <td>{{ $employee->education }}</td>
                                <td>{{ $employee->join_date }}</td>
                                <td>
                                    <img class="img-responsive" width="30" height="30" src="{{ asset($employee->image_path) }}">
                                </td>
                                <td>
                                    @if($employee->is_active == 1)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-warning">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a data-id="{{ $employee->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $employee->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $employee->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-employee') }}" method="POST" name="editContentForm" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Employee Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <input type="hidden" name="id_M" value="{{ $employee->id }}" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="employee_id_m" class="control-label">Employee ID</label>
                                                                <input type="text" name="employee_id_m" value="{{ $employee->employee_id }}" maxlength="20" required class="form-control" placeholder="Employee ID">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="employee_name_m" class="control-label">Employee Name</label>
                                                                <input type="text" name="employee_name_m" value="{{ $employee->employee_name }}" maxlength="100" required class="form-control" placeholder="Employee Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="employee_type_m" class="control-label">Employee Type</label>
                                                                    <select class="form-control" name="employee_type_m">
                                                                        <option value="">Select One</option>
                                                                        <option value="Teacher">Teacher</option>
                                                                        <option value="Staff">Staff</option>
                                                                        <option value="Principle">Principle</option>
                                                                        <option value="vice Principle">vice Principle</option>
                                                                        <option value="Chairman">Chairman</option>
                                                                    </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="department_id_m" class="control-label">Department</label>
                                                                    <select class="form-control" name="department_id_m">
                                                                        <option value="0">Select One</option>
                                                                        @foreach($departments as $department)
                                                                            <option value="{{ $department->id }}">{{ $department->dpt_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="designation_id_m" class="control-label">Designation</label>

                                                                    <select class="form-control" name="designation_id_m">
                                                                        <option value="0">Select One</option>
                                                                        @foreach($designations as $designation)
                                                                            <option value="{{ $designation->id }}">{{ $designation->deg_name }}</option>
                                                                        @endforeach
                                                                    </select>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="education_m" class="control-label">Last Education</label>
                                                                <input type="text" name="education_m" value="{{ $employee->education }}" maxlength="200" class="form-control" placeholder="Last Education">

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="join_date_m" class="control-label">Joining Date</label>
                                                                <input type="text" name="join_date_m" value="{{ $employee->join_date }}" maxlength="20" class="form-control" placeholder="Joining Date">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="image_path_m" class="control-label">Image</label>
                                                                <input type="file" name="image_path_m" accept="image/*"/>

                                                            </div>

                                                            <input type="submit" class="pull-left btn btn-warning" value="Update">

                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                    @if($employee->is_active == 1)
                                        <a href="{{ url('/inactive-employee/'.$employee->id) }}" class="btn btn-warning btn-xs" title="Inactive">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/active-employee/'.$employee->id) }}" class="btn btn-success btn-xs" title="Active">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/delete-employee/'.$employee->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Employee ???');">
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

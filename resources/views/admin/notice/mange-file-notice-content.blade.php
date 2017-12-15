
@extends('admin.master')
@section('pageTitle')
    Manage Notice
@endsection
@section('pgSubTitle')
    Manage Notice
@endsection
@section('content')
    <section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-info">
                <div class="box-header with-border" style="color: blue">
                    <h3 class="box-title">View Notice</h3>
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <tr class="info text-primary">
                        <th>SL.</th>
                        <th>Notcie Name</th>
                        <th>File</th>
                        <th>Day</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Department</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    @foreach($notices as $notice )
                        <tr>
                            <td class="text-center">{{$notice->id}}</td>
                            <td>{{$notice->notice_name}}</td>
                            <td> <a><img src="{{ asset($notice->file_name) }}" class="img-responsive" style="height: 50px;" alt=""/></a>
                            </td>
                            <td>{{$notice->notice_day	}}</td>
                            <td>{{$notice->notice_month	}}</td>
                            <td>{{$notice->notice_year}}</td>
                            <td>{{$notice->notice_dept}}</td>
                            <td>{{$notice->notice_body}}</td>
                            <td>

                                @if($notice->notice_show == 1)
                                    <span class="label label-success">Published</span>
                                @else
                                    <span class="label label-warning">Unpublished</span>
                                @endif

                            </td>


                            <td>
                                @if($notice->notice_show == 1)
                                    <a href="{{ url('/file-notice/unpublished-file-notice/'.$notice->id) }}" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                @else
                                    <a href="{{ url('/file-notice/published-file-notice/'.$notice->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                @endif


                                <a data-id="{{$notice->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $notice->id }}">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>

                                <div  class="modal fade" id="editModal{{ $notice->id }}" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form role="form" action="{{ url('/file-notice/update-notice') }}" method="POST"   name="editContentForm" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Notice Edit</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="box-body">

                                                        <div class="form-group">
                                                            {{--<label for="id_M">Course Id</label>--}}
                                                            <input type="hidden" name="id_M" value="{{ $notice->id }}" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="notice_name_M">Notice Name</label>
                                                            <input type="text" name="notice_name_M" required value="{{$notice->notice_name}}" class="form-control" placeholder="Notice Name">
                                                        </div>


                                                        <div class="form-group">

                                                            <label for="course_start_date_M">Notice Day</label>
                                                            <select class="form-control" name="notice_day_M">
                                                                <option>Select One</option>
                                                                @for($i=1;$i<=31;$i++)
                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="course_start_date_M">Month</label>
                                                            <select class="form-control" name="notice_month_M">
                                                                <option>Select One</option>
                                                                <option value="January">January</option>
                                                                <option value="February">February</option>
                                                                <option value="March">March</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="Octobar">October</option>
                                                                <option value="November">November</option>
                                                                <option value="December">December</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">

                                                            <label for="course_start_date_M">Year</label>
                                                            <select class="form-control" name="notice_year_M">
                                                                <option>Select One</option>
                                                                @for($i=1990;$i<=2017;$i++)
                                                                    <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="course_start_date_M">Departmet Name</label>
                                                            <select class="form-control" name="notice_dept_M">
                                                                <option value="0">Select One</option>
                                                                @foreach($departments as $department)
                                                                    <option value="{{ $department->id }}">{{ $department->dpt_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="course_name_M">Notice Description</label>
                                                            <textarea id="" name="notice_body_M" rows="4" cols="80" placeholder="Enter a Description (optional)">{{$notice->notice_day}}</textarea>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="course_code_M">Notice File</label>
                                                            <input type="file" name="file_name_M" maxlength="50" required class="form-control" id="course_duration" placeholder="Add duration">
                                                            <div>  <img src="{{ asset($notice->file_name) }}" class="img-responsive" style="height: 50px;" alt=""/> </div>
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

                                <a href="{{ url('/text-notice/delete-notice/'.$notice->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Course ???');">
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

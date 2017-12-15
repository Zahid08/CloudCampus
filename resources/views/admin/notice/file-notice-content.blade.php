
@extends('admin.master')
@section('pageTitle')
    Notice Settings
@endsection
@section('pgSubTitle')
    File Notice
@endsection
@section('content')
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Notice</h3>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ url('/file-notice/new-notice') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="notice_name" class="col-sm-3 control-label">Notice title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="notice_name"  required class="form-control" id="notice_name" placeholder="Add a notice name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Date</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="notice_day">
                                        <option>Select One</option>
                                        @for($i=1;$i<=30;$i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Month</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="notice_month">
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
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label">Year</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="notice_year">
                                        <option>Select One</option>
                                        @for($i=1990;$i<=2017;$i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Department</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="notice_dept">
                                        <option value="0">Select One</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->dpt_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="notice_body" class="col-sm-3 control-label">Notice Description</label>
                                <div class="col-sm-9">
                                    <textarea name="notice_body" rows="3" class="form-control" placeholder="Enter a Description..."></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="course_duration" class="col-sm-3 control-label">Notice Author</label>

                                <div class="col-sm-9">
                                    <input type="text" name="notice_by" maxlength="50" required class="form-control" id="course_duration" placeholder="Add duration">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="course_duration" class="col-sm-3 control-label">Select file</label>
                                {{--<input type="file" name="image_path" accept="image/*"/>--}}
                                <div class="col-sm-9">
                                    <input type="file" name="file_name" class="form-control">
                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Notice</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>



    </section>

@endsection

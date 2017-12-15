@extends('admin.master')
@section('pageTitle')
    Occupation Setting
@endsection
@section('pgSubTitle')
    Occupation
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
                        <h3 class="box-title">Add New Occupation</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-occupation') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="occupation_name" class="col-sm-3 control-label">Occupation Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="occupation_name" maxlength="100" required class="form-control" id="occupation_name" placeholder="Add a Occupation">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="remarks" class="col-sm-3 control-label">Remarks</label>
                                <div class="col-sm-9">
                                    <input type="text" name="remarks" class="form-control" id="remarks" placeholder="Add Remarks">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Occupation</button>
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
                        <h3 class="box-title">View Occupation</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Occupation Name</th>
                            <th>Remarks</th>
                            <th>Action</th>
                        </tr>

                        @foreach($occupations as $key =>$occupation)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $occupation->occupation_name }}</td>
                                <td>{{ $occupation->remarks }}</td>
                                <td>
                                    <a data-id="{{ $occupation->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $occupation->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $occupation->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-occupation') }}" method="POST" name="editContentForm">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Occupation Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                {{--<label for="id_M">Course Id</label>--}}
                                                                <input type="hidden" name="id_M" value="{{ $occupation->id }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="deg_name_M">Occupation Name</label>
                                                                <input type="text" name="occupation_name_M" maxlength="100" value="{{ $occupation->occupation_name }}"  class="form-control"  placeholder="Occupation Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="remarks_M">Remarks</label>
                                                                <input type="text" name="remarks_M"  value="{{ $occupation->remarks }}" class="form-control" placeholder="Remarks">
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

                                    <a href="{{ url('/delete-occupation/'.$occupation->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Occupation ???');">
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

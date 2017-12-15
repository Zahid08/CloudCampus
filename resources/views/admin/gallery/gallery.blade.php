@extends('admin.master')
@section('pageTitle')
    Gallery Setting
@endsection
@section('pgSubTitle')
    Gallery
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
                        <h3 class="box-title">Add New Gallery</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-gallery') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">


                            <div class="form-group">
                                <label for="image_name" class="col-sm-3 control-label">Image Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="image_name" maxlength="100" required class="form-control" id="image_name" placeholder="Image Name">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" name="description" maxlength="200" required class="form-control" id="description" placeholder="Description">
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
                                <button type="submit" name="btn" class="btn btn-info">Save Gallery</button>
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
                        <h3 class="box-title">View Gallery</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Image Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($galleries as $key => $gallery)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $gallery->image_name }}</td>
                                <td>{{ $gallery->description }}</td>
                                <td>
                                    <img class="img-responsive" width="30" height="30" src="{{ asset($gallery->image_path) }}">
                                </td>
                                <td>
                                    @if($gallery->is_active == 1)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-warning">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a data-id="{{ $gallery->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $gallery->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $gallery->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-gallery') }}" method="POST" name="editContentForm" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Gallery Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <input type="hidden" name="id_M" value="{{ $gallery->id }}" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="image_name_m" class="control-label">Employee Name</label>
                                                                <input type="text" name="image_name_m" value="{{ $gallery->image_name }}" maxlength="100" required class="form-control" placeholder="Image Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="description_m" class="control-label">Last Education</label>
                                                                <input type="text" name="description_m" value="{{ $gallery->description }}" maxlength="200" class="form-control" placeholder="Description">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="image_path_m" class="control-label">Image</label>
                                                                <input type="file" name="image_path_m" accept="image/*"/>
                                                                <div>  <img src="{{ asset($gallery->image_name) }}" class="img-responsive" style="height: 50px;" alt=""/> </div>
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

                                    @if($gallery->is_active == 1)
                                        <a href="{{ url('/inactive-gallery/'.$gallery->id) }}" class="btn btn-warning btn-xs" title="Inactive">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/active-gallery/'.$gallery->id) }}" class="btn btn-success btn-xs" title="Active">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/delete-gallery/'.$gallery->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Gallery ???');">
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

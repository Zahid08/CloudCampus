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
        <!-- Info boxes -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Messages</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-messages') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="msg_cat" class="col-sm-3 control-label">Message Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="msg_cat">
                                        <option value="0">Select One</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="msg_name" class="col-sm-3 control-label">Message Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="msg_name" maxlength="100" class="form-control" id="msg_name" placeholder="Message Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="msg_title" class="col-sm-3 control-label">Message Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="msg_title" maxlength="100" required class="form-control" id="msg_title" placeholder="Message Title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="msg_from_desi_id" class="col-sm-3 control-label">Designation</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="msg_from_desi_id">
                                        <option value="0">Select One</option>
                                        @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->deg_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="msg_period" class="col-sm-3 control-label">Message Period</label>
                                <div class="col-sm-9">
                                    <input type="text" name="msg_period" maxlength="50" required class="form-control" id="msg_period" placeholder="Message Period">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="msg_about" class="col-sm-3 control-label">About Message</label>
                                <div class="col-sm-9">
                                    <textarea name="msg_about" rows="3" class="form-control" placeholder="Enter a About Message..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="msg_message" class="col-sm-3 control-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea name="msg_message" rows="5" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user_image" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="msg_person_img" accept="image/*"/>
                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Message</button>
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
                        <h3 class="box-title">View Message</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Message Category</th>
                            <th>Message Name</th>
                            <th>Message Title</th>
                            <th>Designation</th>
                            <th>Message Preiod</th>
                            <th>About Message</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($messages as $key => $msg)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $msg->category_name }}</td>
                                <td>{{ $msg->msg_name }}</td>
                                <td>{{ $msg->msg_title }}</td>
                                <td>{{ $msg->deg_name }}</td>
                                <td>{{ $msg->msg_period }}</td>
                                <td>{{ $msg->msg_about }}</td>
                                <td>
                                    <img class="img-responsive" width="30" height="30" src="{{ asset($msg->msg_person_img) }}">
                                </td>
                                <td>
                                    @if($msg->msg_active == 1)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-warning">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a data-id="{{ $msg->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $msg->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $msg->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-message') }}" method="POST" name="editContentForm" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Message Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                <input type="hidden" name="id_M" value="{{ $msg->id }}" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_cat_M" class="control-label">Message Category</label>
                                                                <select class="form-control" name="msg_cat_M">
                                                                        <option value="0">Select One</option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{ $category->id }}" {{ !empty($messages->msg_cat) && $messages->msg_cat == $category->id || old('msg_cat') == $category->id ? 'selected' : '' }} >{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_name_M">Message Name</label>
                                                                <input type="text" name="msg_name_M" maxlength="100"  value="{{ $msg->msg_name }}" class="form-control" placeholder="Message Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_title_M">Message Title</label>
                                                                <input type="text" name="msg_title_M" maxlength="100" required value="{{ $msg->msg_title }}"  class="form-control"  placeholder="Message Title">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_from_desi_id_M" class="control-label">Designation</label>

                                                                    <select class="form-control" name="msg_from_desi_id_M">
                                                                        <option value="0">Select One</option>
                                                                        @foreach($designations as $designation)
                                                                            <option value="{{ $designation->id }}" {{ !empty($messages->msg_from_desi_id) && $messages->msg_from_desi_id == $designation->id || old('msg_from_desi_id') == $designation->id ? 'selected' : '' }} >{{ $designation->deg_name }}</option>
                                                                        @endforeach
                                                                    </select>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_period_M">Course Duration</label>
                                                                <input type="text" name="msg_period_M" maxlength="50" value="{{ $msg->msg_period }}" class="form-control" placeholder="Message Preiod">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_about_M">About Message</label>
                                                                <textarea name="msg_about_M" rows="3" class="form-control" placeholder="Enter a About Message...">{{ $msg->msg_about }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_message_M">Message</label>
                                                                <textarea name="msg_message_M" rows="5" class="form-control" placeholder="Enter Message...">{{ $msg->msg_message }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="msg_person_img_M" class="control-label">Image</label>
                                                                <input type="file" name="msg_person_img_M" accept="image/*"/>
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

                                    @if($msg->msg_active == 1)
                                        <a href="{{ url('/inactive-message/'.$msg->id) }}" class="btn btn-warning btn-xs" title="Inactive">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/active-message/'.$msg->id) }}" class="btn btn-success btn-xs" title="Active">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @endif

                                    <a href="{{ url('/delete-message/'.$msg->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Message ???');">
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

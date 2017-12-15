@extends('admin.master')
@section('pageTitle')
    Category Setting
@endsection
@section('pgSubTitle')
    Category
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
                        <h3 class="box-title">Add New Category</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                    @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-category') }}">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="category_name" class="col-sm-3 control-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="category_name" maxlength="100" required class="form-control" id="category_name" placeholder="Add a Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category_description" class="col-sm-3 control-label">Category Description</label>
                                <div class="col-sm-9">
                                    <input type="text" name="category_description" class="form-control" id="category_description" placeholder="Add Description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Publication Status</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status">
                                        <option>Select One</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Category</button>
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
                        <h3 class="box-title">View Category</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>

                        @foreach($categorys as $key =>$category)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                        <span class="label label-success">Published</span>
                                    @else
                                        <span class="label label-warning">Unpublished</span>
                                    @endif
                                </td>
                                <td>
                                    <a data-id="{{ $category->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $category->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $category->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-category') }}" method="POST" name="editContentForm">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Category Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                {{--<label for="id_M">Course Id</label>--}}
                                                                <input type="hidden" name="id_M" value="{{ $category->id }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category_name_M">Category Name</label>
                                                                <input type="text" name="category_name_M" maxlength="100" value="{{ $category->category_name }}"  class="form-control"  placeholder="Category Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category_description_M">Category Description</label>
                                                                <input type="text" name="category_description_M"  value="{{ $category->category_description }}" class="form-control" placeholder="Category Description">
                                                            </div>
                                                            <div class="form-group">
                                                                    <label for="publication_status_M">Publication Status</label>
                                                                    <select class="form-control" name="publication_status_M">
                                                                        <option value="0">Select One</option>
                                                                        <option value="1">Published</option>
                                                                        <option value="0">Unpublished</option>
                                                                    </select>
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

                                    <a href="{{ url('/delete-category/'.$category->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Category ???');">
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

@extends('tsp.master')
@section('pageTitle')
    Blog Setting
@endsection
@section('pgSubTitle')
    Blog
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
                        <h3 class="box-title">Add New Blog</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-blog') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="category_id" class="col-sm-3 control-label">Blog Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id">
                                        <option value="0">Select One</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blog_head" class="col-sm-3 control-label">Blog Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_head" maxlength="100" required class="form-control" id="blog_head" placeholder="Add a Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blog_brief" class="col-sm-3 control-label">Blog Brief</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_brief" maxlength="200" required class="form-control" id="blog_head" placeholder="Add a Brief">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blog_details" class="col-sm-3 control-label">Blog Description</label>
                                <div class="col-sm-9">
                                    <textarea name="blog_details" rows="5" class="form-control" placeholder="Blog Description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="blog_pub_date" class="col-sm-3 control-label">Blog Date</label>
                                <div class="col-sm-9">
                                    <input type="text" name="blog_pub_date" maxlength="50" required class="form-control" id="blog_pub_date" placeholder="Add a Date">
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
                                <button type="submit" name="btn" class="btn btn-info">Save Blog</button>
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
                        <h3 class="box-title">View Blog</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Category</th>
                            <th>Blog Name</th>
                            <th>Blog Brief</th>
                            <th>Blog Description</th>
                            <th>Blog Date</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blogs as $keys=> $blog)
                            <tr>
                                <td class="text-center">{{$keys +1}}</td>
                                <td>{{ $blog->category_name }}</td>
                                <td>{{ $blog->blog_head }}</td>
                                <td>{{ $blog->blog_brief }}</td>
                                <td>{{ $blog->blog_details }}</td>
                                <td>{{ $blog->blog_pub_date }}</td>
                                <td>
                                    <img class="img-responsive" width="30" height="30" src="{{ asset($blog->image_path) }}">
                                </td>
                                <td>
                                    <a data-id="{{ $blog->id }}"  class="btn btn-info btn-xs" data-toggle="modal" data-target="#editModal{{ $blog->id }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <div  class="modal fade" id="editModal{{ $blog->id }}" aria-hidden="true" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form role="form" action="{{ url('/update-blog') }}" method="POST" name="editContentForm" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Blog Edit</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="box-body">
                                                            <div class="form-group">
                                                                {{--<label for="id_M">Course Id</label>--}}
                                                                <input type="hidden" name="id_M" value="{{ $blog->id }}" class="form-control">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="category_id_m" class="control-label">Blog Category</label>
                                                                <select class="form-control" name="category_id">
                                                                        <option value="0">Select One</option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="blog_head_M">Blog Name</label>
                                                                <input type="text" name="blog_head_m" maxlength="100" value="{{ $blog->blog_head }}"  class="form-control"  placeholder="Blog Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="blog_brief_M">Blog Brief</label>
                                                                <input type="text" name="blog_brief_m" maxlength="100" value="{{ $blog->blog_brief }}"  class="form-control"  placeholder="Blog Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="blog_details_M">Blog Description</label>
                                                                <textarea name="blog_details_m" rows="5" class="form-control" placeholder="Blog Description">{{ $blog->blog_details }}</textarea>
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

                                    <a href="{{ url('/delete-blog/'.$blog->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Category ???');">
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

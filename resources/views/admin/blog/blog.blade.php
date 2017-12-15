@extends('admin.master')
@section('pageTitle')
    Blogs
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
                <div class="box box-info">
                    <div class="box-header with-border" style="color: blue">
                        <h3 class="box-title">View Blog</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Blog Category</th>
                            <th>Blog Name</th>
                            <th>Blog Brief</th>
                            <th>Details</th>
                            <th>Author Name</th>
                            <th>Publish Date</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blogs as $key => $blog)
                            <tr>
                                <td class="text-center">{{ $key+1  }}</td>
                                <td>{{ $blog->category_name }}</td>
                                <td>{{ $blog->blog_head }}</td>
                                <td>{{ $blog->blog_brief }}</td>
                                <td>{{ $blog->blog_details }}</td>
                                <td>{{ $blog->author_name }}</td>
                                <td>{{ $blog->blog_pub_date }}</td>
                                <td>
                                    <img class="img-responsive" width="30" height="30" src="{{ asset($blog->image_path) }}">
                                </td>
                                <td>
                                    @if($blog->publication_status == 1)
                                        <span class="label label-success">Publish</span>
                                    @else
                                        <span class="label label-warning">Unpublish</span>
                                    @endif
                                </td>
                                <td>
                                    @if($blog->publication_status == 1)
                                        <a href="{{ url('/unpublish-admin-blog/'.$blog->id) }}" class="btn btn-warning btn-xs" title="Unpublish">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @else
                                        <a href="{{ url('/publish-admin-blog/'.$blog->id) }}" class="btn btn-success btn-xs" title="Publish">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>


    </section>



@endsection

@extends('tsp.master')
@section('pageTitle')
   Comments
@endsection
@section('pgSubTitle')
    Comments
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-info">
                    <div class="box-header with-border" style="color: blue">
                        <h3 class="box-title">View Comments</h3>
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <tr class="info text-primary">
                            <th>SL.</th>
                            <th>Blog</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                        @foreach($comments as $keys=> $comment)
                            <tr>
                                <td class="text-center">{{$keys +1}}</td>
                                <td>{{ $comment->blog_head }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>
                                    <a href="{{ url('/delete-comment/'.$comment->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete this Comment ???');">
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

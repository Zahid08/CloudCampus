@extends('frontend.master')
@section('title')
    Service
@endsection
@section('content')
    @include('frontend.service.includes.link')

    <div class="team" id="staff">
        <div class="container">
            <div class="heading">
                <h3>Meet Our Teacher and Staff</h3>
            </div>
            <div class="team-grids">

                @foreach($employees as $employee)
                    <div class="col-md-4 col-sm-4 team-grid1">
                        <div class="inner-team-grid">
                            <img src="{{asset($employee->image_path)}}" height="100" alt="" />
                            <h3>{{$employee->employee_name}}</h3>
                            <h4>{{$employee->employee_type}}</h4>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection

@extends('admin.master')
@section('pageTitle')
    Profile Setting
@endsection
@section('pgSubTitle')
    Profile
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
                        <h3 class="box-title">User Profile</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ url('/new-profile') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" class="form-control" >

                            <div class="form-group">
                                <label for="user_name" class="col-sm-3 control-label">User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="user_name" value="{{Auth::user()->name}}" readonly="true" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user_contact" class="col-sm-3 control-label">Contact</label>
                                <div class="col-sm-9">
                                    <input type="text" name="user_contact" maxlength="20" value="{{ !empty($profile->user_contact)? $profile->user_contact: '' }}" required class="form-control"  placeholder="Add a contact">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user_address" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" name="user_address" {{ !empty($profile->user_address)? $profile->user_address : '' }} required class="form-control" id="user_address" placeholder="Add a address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="occupation_id" class="col-sm-3 control-label">Occupation</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="occupation_id">
                                        <option>Select One</option>
                                        @foreach($occupations as $occupation)
                                            {{--<option value="{{ $occupation->id }}">{{ $occupation->occupation_name }}</option>--}}
                                            <option value="{{ $occupation->id }}" {{ !empty($profile->occupation_id) && $profile->occupation_id == $occupation->id || old('occupation_id') == $occupation->id ? 'selected' : '' }}>{{ $occupation->occupation_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="designation_id" class="col-sm-3 control-label">Designation</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="designation_id">
                                        <option>Select One</option>
                                        @foreach($designations as $designation)
                                            <option value="{{ $designation->id }}" {{ !empty($profile->designation_id) && $profile->designation_id == $designation->id || old('designation_id') == $designation->id ? 'selected' : '' }}>{{ $designation->deg_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user_image" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="user_image" accept="image/*"/>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Profile</button>
                                {{--<a href="{{ url('/home') }}">--}}
                                    {{--Cancel--}}
                                {{--</a>--}}
                                <a href="{{ url('/home') }}" class="logo">
                                    <span class="logo-lg"><b>Cancel </b></span>
                                </a>

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

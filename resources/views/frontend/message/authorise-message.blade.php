@extends('frontend.master')
@section('title')
    Message
@endsection
@section('content')

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        /* Style the header */
        .header {
            background-color: #f1f1f1;
            padding: 50px;
            text-align: center;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */
        }

        /* Left and right column */
        .column.side {
            width: 25%;
        }

        /* Middle column */
        .column.middle {
            width: 75%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media (max-width: 600px) {
            .column.side, .column.middle {
                width: 100%;
            }
        }
    </style>


    @foreach($message as $messg)

        <div class="header">
            <h2>Messgae</h2>
            <h3> {{$messg->msg_title}} </h3>
        </div>


        <div class="row">
            <div class="column side" style="background-color:#aaa;">
                <img  style="margin-left: 40px;" class=""  src="{{ asset($messg->msg_person_img) }} " height="270px;">
            </div>
            <div class="column middle" style="background-color:#bbb;">
                <h3>{{$messg->msg_about}}</h3><hr>
                {{$messg->msg_message}}
                <br><br>

                <h5>{{$messg->msg_name}}</h5>
                <h5>{{$messg->deg_name}}</h5>

                {{--<h5>{{$messg->msg_period}}</h5>--}}

            </div>

        </div>
        <hr>
    @endforeach



    <!-- /.row -->
@endsection
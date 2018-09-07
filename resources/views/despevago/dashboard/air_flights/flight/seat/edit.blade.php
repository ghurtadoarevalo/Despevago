@extends('adminlte::page')

@section('content_header')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Flight
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@stop

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">

                {!!  Form::open(['route' => ['flight.update','id' => $flight->id],'method' => 'put']) !!}

                {!! Form::token(); !!}

                <div class="form-group">
                    {!! Form::label('flight_number', 'Flight Number'); !!}
                    {!! Form::text('flight_number', $flight->flight_number, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'flight_number'])
                </div>

                <div class="form-group">
                    {!! Form::label('cabin_baggage', 'Cabin Baggage'); !!}
                    {!! Form::text('cabin_baggage', $flight->cabin_baggage, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'cabin_baggage'])
                </div>

                <div class="form-group">
                    {!! Form::label('capacity', 'Capacity'); !!}
                    {!! Form::text('capacity', $flight->capacity, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'capacity'])
                </div>

                <div class="form-group">
                    {!! Form::label('airplane_model', 'Airplane Model'); !!}
                    {!! Form::text('airplane_model', $flight->airplane_model, array('class' => 'form-control','required' => 'required')); !!}
                    @include('common.errors', ['name' => 'airplane_model'])
                </div>

                <div class="form-group">
                    {!! Form::label('airline_id', 'Airline'); !!}
                    {!! Form::select('airline_id', ["Airlines" => $airlines_name],$flight->airline_id, array('class' => 'form-control', 'placeholder' => "Select an Airline")) !!}
                    @include('common.errors', ['name' => 'airline_id'])
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top:20px" class="text-center mb-3">
                        {!! Form::button('Edit Flight', array('class' => 'btn btn-primary', 'type' => 'submit')); !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>




        </div>
    </div>

    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/viewStyle.css') }}">

@stop

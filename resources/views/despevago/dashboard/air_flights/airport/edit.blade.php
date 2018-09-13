@extends('adminlte::page')

@section('content_header')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Airport
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

                {!!  Form::open(['route' => ['airport.update','id' => $airport->id], 'method' => 'put']) !!}

                {!! Form::token(); !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name'); !!}
                    {!! Form::text('name', $airport->name, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'name'])
                </div>

                <div class="form-group">
                    {!! Form::label('address', 'Address'); !!}
                    {!! Form::text('address', $airport->address, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'address'])
                </div>

                <div class="form-group">
                    {!! Form::label('city_id', 'Ciudad'); !!}
                    {!! Form::select('city_id', ["Ciudades" => $cities],$airport->city_id, array('class' => 'form-control', 'placeholder' => "Select a city")) !!}
                    @include('common.errors', ['name' => 'city_id'])
                </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top:20px" class="text-center mb-3">
                        {!! Form::button('Edit Airport', array('class' => 'btn btn-primary', 'type' => 'submit')); !!}
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
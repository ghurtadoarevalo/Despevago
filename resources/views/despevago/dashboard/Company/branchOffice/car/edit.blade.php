@extends('adminlte::page')

@section('content_header')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit a Car
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

                {!!  Form::open(['route' => ['cars.update','id' => $car->id],'method' => 'put','files' => true]) !!}

                {!! Form::token(); !!}

                <div class="form-group">
                    {!! Form::label('brand', 'Brand'); !!}
                    {!! Form::text('brand', $car->brand, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'brand'])
                </div>

                <div class="form-group">
                    {!! Form::hidden('branch_office_id', $branch_office_id, array('class' => 'form-control', 'required' => 'required')); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('model', 'Model'); !!}
                    {!! Form::text('model', $car->model, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'model'])
                </div>

                <div class="form-group">
                    {!! Form::label('type', 'Type'); !!}
                    {!! Form::text('type', $car->type, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'type'])
                </div>

                <div class="form-group">
                    {!! Form::label('capacity', 'Capacidad'); !!}
                    {!! Form::text('capacity', $car->capacity, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'capacity'])
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price '); !!}
                    {!! Form::text('price', $car->price, array('class' => 'form-control','required' => 'required')); !!}
                    @include('common.errors', ['name' => 'price'])
                </div>

                <div class="form-group">
                    {!! Form::label('car_options', 'Select the car options'); !!}
                    {!! Form::select('car_option_id', ["Car Options" => $car_options_name],$actual_car_options, array('class' => 'js-example-basic-multiple form-control', 'name' => 'car_options[]', 'multiple' => 'multiple')) !!}

                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top:20px" class="text-center mb-3">
                        {!! Form::button('Update car', array('class' => 'btn btn-primary', 'type' => 'submit')); !!}
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

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@stop
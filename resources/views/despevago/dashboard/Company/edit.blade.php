@extends('adminlte::page')

@section('content_header')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit a Company
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

                {!!  Form::open(['route' => ['companies.update','id' => $company->id],'method' => 'put','files' => true]) !!}

                {!! Form::token(); !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name'); !!}
                    {!! Form::text('name', $company->name, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'name'])
                </div>

                <div class="form-group">
                        {!! Form::label('address', 'Address'); !!}
                        {!! Form::text('address', $company->address, array('class' => 'form-control','required' => 'required')); !!}
                        @include('common.errors', ['name' => 'address'])
                    </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail'); !!}
                    {!! Form::email('email', $company->email, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'email'])
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top:20px" class="text-center mb-3">
                        {!! Form::button('Edit Company', array('class' => 'btn btn-primary', 'type' => 'submit')); !!}
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
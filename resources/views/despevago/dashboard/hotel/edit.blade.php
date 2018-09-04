@extends('adminlte::page')

@section('content_header')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Hotel
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

                {!!  Form::open(['route' => ['hotels.update','id' => $hotel->id],'method' => 'put','files' => true]) !!}

                {!! Form::token(); !!}

                <div class="text-center mb-3">
                    <img class="" style="margin-bottom:20px" width="200px" height="200px" src="{{Storage::url($hotel->hotel_image)}}"/>
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Nombre'); !!}
                    {!! Form::text('name', $hotel->name, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'name'])
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail'); !!}
                    {!! Form::email('email', $hotel->email, array('class' => 'form-control', 'required' => 'required')); !!}
                    @include('common.errors', ['name' => 'email'])
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Descripción'); !!}
                    {!! Form::textarea('description', $hotel->description, array('class' => 'form-control', 'required' => 'required', 'placeholder' => "Ingrese una breve descripción de su hotel")); !!}
                    @include('common.errors', ['name' => 'description'])
                </div>

                <div class="form-group">
                    {!! Form::label('city_id', 'Ciudad'); !!}
                    {!! Form::select('city_id', ["Ciudades" => $cities],$hotel->city_id, array('class' => 'form-control', 'placeholder' => "Seleccione una ciudad")) !!}
                    @include('common.errors', ['name' => 'city_id'])
                </div>

                <div class="form-group">
                    {!! Form::label('hotel_image', 'Imagen del hotel'); !!}
                    {!! Form::file('hotel_image', array('class' => 'form-control'));!!}
                    @include('common.errors', ['name' => 'hotel_image'])
                </div>

            </div>
            <div class="col-md-6">
                @foreach($hotel->hotelContacts as $contact)
                    <div class="form-group">
                        {!! Form::label('contact_number', 'Teléfono de contacto'); !!}
                        {!! Form::text('description', $contact->telephone, array('class' => 'form-control')); !!}
                        @include('common.errors', ['name' => 'description'])
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="margin-top:20px" class="text-center mb-3">
                        {!! Form::button('Editar Hotel', array('class' => 'btn btn-primary', 'type' => 'submit')); !!}
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

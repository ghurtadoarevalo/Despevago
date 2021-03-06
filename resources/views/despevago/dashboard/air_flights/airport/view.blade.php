@extends('adminlte::page')

@section('content_header')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            View Airport
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@stop

@section('content')

    @if (session('status'))
        <div class="alert alert-success text-center">
            <p>{{ session('status') }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12" style="margin-top:20px">
            <div style="margin-left:1.5em; display:inline-flex" >

                    <a href="{{ url('/dashboard/airport/'.($airport->id).'/edit') }}" style="margin-right:10px"> <button type="button" class="btn btn-primary">Edit</button></a>
                    <form method="post" action="{{ url('/dashboard/airport/'.($airport->id)) }}">
                         @csrf
                        {{ csrf_field() }}

                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger" disabled>Eliminar</button>
                    </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div style="margin:1.5em;">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{!! $airport->name !!}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{!! $airport->address !!}</td>

                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{!! $airport->city->name!!}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/viewStyle.css') }}">

@stop

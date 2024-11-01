@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Detalle Proveedor</h2>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
{{--                            <span class="card-title">{{ __('Show') }} Proveedore</span>--}}
                        </div>

                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $proveedore->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $proveedore->telefono }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proveedores.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

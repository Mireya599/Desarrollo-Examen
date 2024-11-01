@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Detalle Producto</h2>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
{{--                            <span class="card-title">{{ __('Show') }} Producto</span>--}}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('productos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad:</strong>
                            {{ $producto->cantidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Proveedores Id:</strong>
                            {{ $producto->proveedores_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Categorias Id:</strong>
                            {{ $producto->categorias_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Compras Id:</strong>
                            {{ $producto->compras_id }}
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

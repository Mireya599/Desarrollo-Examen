@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h2>Lista de Proveedores</h2>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

{{--                            <span id="card_title">--}}
{{--                                {{ __('Proveedores') }}--}}
{{--                            </span>--}}

                            <div class="float-right">
                                <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo Proveedor') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th >Nombre</th>
                                    <th >Telefono</th>
                                    <th >Acciones</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($proveedores as $proveedore)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td >{{ $proveedore->nombre }}</td>
                                        <td >{{ $proveedore->telefono }}</td>

                                        <td>
                                            <form action="{{ route('proveedores.destroy', $proveedore->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('proveedores.show', $proveedore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('proveedores.edit', $proveedore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedores->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

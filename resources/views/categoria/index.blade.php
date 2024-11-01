@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Categorias') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Nueva Categoria') }}
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
                                    <th >Descripcion</th>
                                    <th >Acciones</th>


                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td >{{ $categoria->nombre }}</td>
                                        <td >{{ $categoria->descripcion }}</td>

                                        <td>
                                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('categorias.show', $categoria->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('categorias.edit', $categoria->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $categorias->withQueryString()->links() !!}
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

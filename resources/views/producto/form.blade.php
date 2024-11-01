<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $producto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $producto?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $producto?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedores_id" class="form-label">{{ __('Proveedor') }}</label>
            <input type="text" name="proveedores_id" class="form-control @error('proveedores_id') is-invalid @enderror" value="{{ old('proveedores_id', $producto?->proveedores_id) }}" id="proveedores_id" placeholder="Proveedores Id">
            {!! $errors->first('proveedores_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categorias_id" class="form-label">{{ __('Categoria') }}</label>
            <input type="text" name="categorias_id" class="form-control @error('categorias_id') is-invalid @enderror" value="{{ old('categorias_id', $producto?->categorias_id) }}" id="categorias_id" placeholder="Categorias Id">
            {!! $errors->first('categorias_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="compras_id" class="form-label">{{ __('Compra') }}</label>
            <input type="text" name="compras_id" class="form-control @error('compras_id') is-invalid @enderror" value="{{ old('compras_id', $producto?->compras_id) }}" id="compras_id" placeholder="Compras Id">
            {!! $errors->first('compras_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
    </div>
</div>

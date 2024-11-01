<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="num_compra" class="form-label">{{ __('Num Compra') }}</label>
            <input type="text" name="num_compra" class="form-control @error('num_compra') is-invalid @enderror" value="{{ old('num_compra', $compra?->num_compra) }}" id="num_compra" placeholder="Num Compra">
            {!! $errors->first('num_compra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_compra" class="form-label">{{ __('Fecha Compra') }}</label>
            <input type="text" name="fecha_compra" class="form-control @error('fecha_compra') is-invalid @enderror" value="{{ old('fecha_compra', $compra?->fecha_compra) }}" id="fecha_compra" placeholder="Fecha Compra">
            {!! $errors->first('fecha_compra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedores_id" class="form-label">{{ __('Proveedores Id') }}</label>
            <input type="text" name="proveedores_id" class="form-control @error('proveedores_id') is-invalid @enderror" value="{{ old('proveedores_id', $compra?->proveedores_id) }}" id="proveedores_id" placeholder="Proveedores Id">
            {!! $errors->first('proveedores_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a href="{{ route('compras.index') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
    </div>
</div>

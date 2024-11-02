<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="num_compra" class="form-label">{{ __('Num Compra') }}</label>
            <input type="text" name="num_compra" class="form-control @error('num_compra') is-invalid @enderror"
                   value="{{ old('num_compra', $compra?->num_compra) }}" id="num_compra" placeholder="Num Compra">
            {!! $errors->first('num_compra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_compra" class="form-label">{{ __('Fecha Compra') }}</label>
            <input type="date" name="fecha_compra" class="form-control @error('fecha_compra') is-invalid @enderror"
                   value="{{ old('fecha_compra', $compra?->fecha_compra ? \Carbon\Carbon::parse($compra->fecha_compra)->format('Y-m-d') : '') }}"
                   id="fecha_compra" placeholder="Fecha Compra">
            {!! $errors->first('fecha_compra', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


        <div class="form-group mb-2 mb20">
            <label for="proveedores_id" class="form-label">{{ __('Proveedor') }}</label>
            <select name="proveedores_id" class="form-control @error('proveedores_id') is-invalid @enderror"
                    id="proveedores_id">
                <option value="">Selecciona un proveedor</option>
                @foreach($proveedores as $proveedor)
                    <option
                        value="{{ $proveedor->id }}" {{ (old('proveedores_id', $compra?->proveedores_id) == $proveedor->id) ? 'selected' : '' }}>
                        {{ $proveedor->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('proveedores_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

        </div>


        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            <a href="{{ route('compras.index') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
        </div>
    </div>
</div>

<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="gestion_mes_ce" class="form-label">{{ __('Gestion Mes Ce') }}</label>
            <input type="text" name="gestion_mes_ce" class="form-control @error('gestion_mes_ce') is-invalid @enderror" value="{{ old('gestion_mes_ce', $curso?->gestion_mes_ce) }}" id="gestion_mes_ce" placeholder="Gestion Mes Ce">
            {!! $errors->first('gestion_mes_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="evento_ce" class="form-label">{{ __('Evento Ce') }}</label>
            <input type="text" name="evento_ce" class="form-control @error('evento_ce') is-invalid @enderror" value="{{ old('evento_ce', $curso?->evento_ce) }}" id="evento_ce" placeholder="Evento Ce">
            {!! $errors->first('evento_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion_ce" class="form-label">{{ __('Duracion Ce') }}</label>
            <input type="text" name="duracion_ce" class="form-control @error('duracion_ce') is-invalid @enderror" value="{{ old('duracion_ce', $curso?->duracion_ce) }}" id="duracion_ce" placeholder="Duracion Ce">
            {!! $errors->first('duracion_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="intitucion_ce" class="form-label">{{ __('Intitucion Ce') }}</label>
            <input type="text" name="intitucion_ce" class="form-control @error('intitucion_ce') is-invalid @enderror" value="{{ old('intitucion_ce', $curso?->intitucion_ce) }}" id="intitucion_ce" placeholder="Intitucion Ce">
            {!! $errors->first('intitucion_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_ce" class="form-label">{{ __('Folio Ce') }}</label>
            <input type="text" name="folio_ce" class="form-control @error('folio_ce') is-invalid @enderror" value="{{ old('folio_ce', $curso?->folio_ce) }}" id="folio_ce" placeholder="Folio Ce">
            {!! $errors->first('folio_ce', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gestion_mes_co" class="form-label">{{ __('Gestion Mes Co') }}</label>
            <input type="text" name="gestion_mes_co" class="form-control @error('gestion_mes_co') is-invalid @enderror" value="{{ old('gestion_mes_co', $curso?->gestion_mes_co) }}" id="gestion_mes_co" placeholder="Gestion Mes Co">
            {!! $errors->first('gestion_mes_co', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="evento_co" class="form-label">{{ __('Evento Co') }}</label>
            <input type="text" name="evento_co" class="form-control @error('evento_co') is-invalid @enderror" value="{{ old('evento_co', $curso?->evento_co) }}" id="evento_co" placeholder="Evento Co">
            {!! $errors->first('evento_co', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duracion_co" class="form-label">{{ __('Duracion Co') }}</label>
            <input type="text" name="duracion_co" class="form-control @error('duracion_co') is-invalid @enderror" value="{{ old('duracion_co', $curso?->duracion_co) }}" id="duracion_co" placeholder="Duracion Co">
            {!! $errors->first('duracion_co', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="intitucion_co" class="form-label">{{ __('Intitucion Co') }}</label>
            <input type="text" name="intitucion_co" class="form-control @error('intitucion_co') is-invalid @enderror" value="{{ old('intitucion_co', $curso?->intitucion_co) }}" id="intitucion_co" placeholder="Intitucion Co">
            {!! $errors->first('intitucion_co', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_co" class="form-label">{{ __('Folio Co') }}</label>
            <input type="text" name="folio_co" class="form-control @error('folio_co') is-invalid @enderror" value="{{ old('folio_co', $curso?->folio_co) }}" id="folio_co" placeholder="Folio Co">
            {!! $errors->first('folio_co', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma" class="form-label">{{ __('Idioma') }}</label>
            <input type="text" name="idioma" class="form-control @error('idioma') is-invalid @enderror" value="{{ old('idioma', $curso?->idioma) }}" id="idioma" placeholder="Idioma">
            {!! $errors->first('idioma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="institucion_i" class="form-label">{{ __('Institucion I') }}</label>
            <input type="text" name="institucion_i" class="form-control @error('institucion_i') is-invalid @enderror" value="{{ old('institucion_i', $curso?->institucion_i) }}" id="institucion_i" placeholder="Institucion I">
            {!! $errors->first('institucion_i', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lectura" class="form-label">{{ __('Lectura') }}</label>
            <input type="text" name="lectura" class="form-control @error('lectura') is-invalid @enderror" value="{{ old('lectura', $curso?->lectura) }}" id="lectura" placeholder="Lectura">
            {!! $errors->first('lectura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="escritura" class="form-label">{{ __('Escritura') }}</label>
            <input type="text" name="escritura" class="form-control @error('escritura') is-invalid @enderror" value="{{ old('escritura', $curso?->escritura) }}" id="escritura" placeholder="Escritura">
            {!! $errors->first('escritura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="conversacion" class="form-label">{{ __('Conversacion') }}</label>
            <input type="text" name="conversacion" class="form-control @error('conversacion') is-invalid @enderror" value="{{ old('conversacion', $curso?->conversacion) }}" id="conversacion" placeholder="Conversacion">
            {!! $errors->first('conversacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_i" class="form-label">{{ __('Folio I') }}</label>
            <input type="text" name="folio_i" class="form-control @error('folio_i') is-invalid @enderror" value="{{ old('folio_i', $curso?->folio_i) }}" id="folio_i" placeholder="Folio I">
            {!! $errors->first('folio_i', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="curso_c" class="form-label">{{ __('Curso C') }}</label>
            <input type="text" name="curso_c" class="form-control @error('curso_c') is-invalid @enderror" value="{{ old('curso_c', $curso?->curso_c) }}" id="curso_c" placeholder="Curso C">
            {!! $errors->first('curso_c', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivel_cono" class="form-label">{{ __('Nivel Cono') }}</label>
            <input type="text" name="nivel_cono" class="form-control @error('nivel_cono') is-invalid @enderror" value="{{ old('nivel_cono', $curso?->nivel_cono) }}" id="nivel_cono" placeholder="Nivel Cono">
            {!! $errors->first('nivel_cono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_c" class="form-label">{{ __('Folio C') }}</label>
            <input type="text" name="folio_c" class="form-control @error('folio_c') is-invalid @enderror" value="{{ old('folio_c', $curso?->folio_c) }}" id="folio_c" placeholder="Folio C">
            {!! $errors->first('folio_c', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
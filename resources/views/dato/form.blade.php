<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
            <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres', $dato?->nombres) }}" id="nombres" placeholder="Nombres">
            {!! $errors->first('nombres', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_pat" class="form-label">{{ __('Apellido Pat') }}</label>
            <input type="text" name="apellido_pat" class="form-control @error('apellido_pat') is-invalid @enderror" value="{{ old('apellido_pat', $dato?->apellido_pat) }}" id="apellido_pat" placeholder="Apellido Pat">
            {!! $errors->first('apellido_pat', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_mat" class="form-label">{{ __('Apellido Mat') }}</label>
            <input type="text" name="apellido_mat" class="form-control @error('apellido_mat') is-invalid @enderror" value="{{ old('apellido_mat', $dato?->apellido_mat) }}" id="apellido_mat" placeholder="Apellido Mat">
            {!! $errors->first('apellido_mat', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_civil" class="form-label">{{ __('Estado Civil') }}</label>
            <input type="text" name="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror" value="{{ old('estado_civil', $dato?->estado_civil) }}" id="estado_civil" placeholder="Estado Civil">
            {!! $errors->first('estado_civil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_casada" class="form-label">{{ __('Apellido Casada') }}</label>
            <input type="text" name="apellido_casada" class="form-control" value="{{ old('apellido_casada', $dato?->apellido_casada) }}" id="apellido_casada" placeholder="Apellido Casada">
            {!! $errors->first('apellido_casada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nacionalidad" class="form-label">{{ __('Nacionalidad') }}</label>
            <input type="text" name="nacionalidad" class="form-control @error('nacionalidad') is-invalid @enderror" value="{{ old('nacionalidad', $dato?->nacionalidad) }}" id="nacionalidad" placeholder="Nacionalidad">
            {!! $errors->first('nacionalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $dato?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nac" class="form-label">{{ __('Fecha Nac') }}</label>
            <input type="text" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{ old('fecha_nac', $dato?->fecha_nac) }}" id="fecha_nac" placeholder="Fecha Nac">
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="provincia" class="form-label">{{ __('Provincia') }}</label>
            <input type="text" name="provincia" class="form-control @error('provincia') is-invalid @enderror" value="{{ old('provincia', $dato?->provincia) }}" id="provincia" placeholder="Provincia">
            {!! $errors->first('provincia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="canton" class="form-label">{{ __('Canton') }}</label>
            <input type="text" name="canton" class="form-control @error('canton') is-invalid @enderror" value="{{ old('canton', $dato?->canton) }}" id="canton" placeholder="Canton">
            {!! $errors->first('canton', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="departamento" class="form-label">{{ __('Departamento') }}</label>
            <input type="text" name="departamento" class="form-control @error('departamento') is-invalid @enderror" value="{{ old('departamento', $dato?->departamento) }}" id="departamento" placeholder="Departamento">
            {!! $errors->first('departamento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="serie_libreta_mil" class="form-label">{{ __('Serie Libreta Mil') }}</label>
            <input type="text" name="serie_libreta_mil" class="form-control @error('serie_libreta_mil') is-invalid @enderror" value="{{ old('serie_libreta_mil', $dato?->serie_libreta_mil) }}" id="serie_libreta_mil" placeholder="Serie Libreta Mil">
            {!! $errors->first('serie_libreta_mil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_libreta_mil" class="form-label">{{ __('N Libreta Mil') }}</label>
            <input type="text" name="n_libreta_mil" class="form-control @error('n_libreta_mil') is-invalid @enderror" value="{{ old('n_libreta_mil', $dato?->n_libreta_mil) }}" id="n_libreta_mil" placeholder="N Libreta Mil">
            {!! $errors->first('n_libreta_mil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nro_matricula" class="form-label">{{ __('Nro Matricula') }}</label>
            <input type="text" name="nro_matricula" class="form-control @error('nro_matricula') is-invalid @enderror" value="{{ old('nro_matricula', $dato?->nro_matricula) }}" id="nro_matricula" placeholder="Nro Matricula">
            {!! $errors->first('nro_matricula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_sangre" class="form-label">{{ __('Tipo Sangre') }}</label>
            <input type="text" name="tipo_sangre" class="form-control @error('tipo_sangre') is-invalid @enderror" value="{{ old('tipo_sangre', $dato?->tipo_sangre) }}" id="tipo_sangre" placeholder="Tipo Sangre">
            {!! $errors->first('tipo_sangre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ci" class="form-label">{{ __('Ci') }}</label>
            <input type="text" name="ci" class="form-control @error('ci') is-invalid @enderror" value="{{ old('ci', $dato?->ci) }}" id="ci" placeholder="Ci">
            {!! $errors->first('ci', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="emision" class="form-label">{{ __('Emision') }}</label>
            <input type="text" name="emision" class="form-control @error('emision') is-invalid @enderror" value="{{ old('emision', $dato?->emision) }}" id="emision" placeholder="Emision">
            {!! $errors->first('emision', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="afp" class="form-label">{{ __('Afp') }}</label>
            <input type="text" name="afp" class="form-control @error('afp') is-invalid @enderror" value="{{ old('afp', $dato?->afp) }}" id="afp" placeholder="Afp">
            {!! $errors->first('afp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_n_cua" class="form-label">{{ __('N N Cua') }}</label>
            <input type="text" name="n_n_cua" class="form-control @error('n_n_cua') is-invalid @enderror" value="{{ old('n_n_cua', $dato?->n_n_cua) }}" id="n_n_cua" placeholder="N N Cua">
            {!! $errors->first('n_n_cua', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_seguro" class="form-label">{{ __('N Seguro') }}</label>
            <input type="text" name="n_seguro" class="form-control @error('n_seguro') is-invalid @enderror" value="{{ old('n_seguro', $dato?->n_seguro) }}" id="n_seguro" placeholder="N Seguro">
            {!! $errors->first('n_seguro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $dato?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="celular" class="form-label">{{ __('Celular') }}</label>
            <input type="text" name="celular" class="form-control @error('celular') is-invalid @enderror" value="{{ old('celular', $dato?->celular) }}" id="celular" placeholder="Celular">
            {!! $errors->first('celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contacto_emer" class="form-label">{{ __('Contacto Emer') }}</label>
            <input type="text" name="contacto_emer" class="form-control @error('contacto_emer') is-invalid @enderror" value="{{ old('contacto_emer', $dato?->contacto_emer) }}" id="contacto_emer" placeholder="Contacto Emer">
            {!! $errors->first('contacto_emer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $dato?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="clave" class="form-label">{{ __('Clave') }}</label>
            <input type="text" name="clave" class="form-control @error('clave') is-invalid @enderror" value="{{ old('clave', $dato?->clave) }}" id="clave" placeholder="Clave">
            {!! $errors->first('clave', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $dato?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_cuenta" class="form-label">{{ __('N Cuenta') }}</label>
            <input type="text" name="n_cuenta" class="form-control @error('n_cuenta') is-invalid @enderror" value="{{ old('n_cuenta', $dato?->n_cuenta) }}" id="n_cuenta" placeholder="N Cuenta">
            {!! $errors->first('n_cuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $dato?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $dato?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mes" class="form-label">{{ __('Mes') }}</label>
            <input type="text" name="mes" class="form-control @error('mes') is-invalid @enderror" value="{{ old('mes', $dato?->mes) }}" id="mes" placeholder="Mes">
            {!! $errors->first('mes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gestion" class="form-label">{{ __('Gestion') }}</label>
            <input type="text" name="gestion" class="form-control @error('gestion') is-invalid @enderror" value="{{ old('gestion', $dato?->gestion) }}" id="gestion" placeholder="Gestion">
            {!! $errors->first('gestion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instituto" class="form-label">{{ __('Instituto') }}</label>
            <input type="text" name="instituto" class="form-control @error('instituto') is-invalid @enderror" value="{{ old('instituto', $dato?->instituto) }}" id="instituto" placeholder="Instituto">
            {!! $errors->first('instituto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad_pais" class="form-label">{{ __('Ciudad Pais') }}</label>
            <input type="text" name="ciudad_pais" class="form-control @error('ciudad_pais') is-invalid @enderror" value="{{ old('ciudad_pais', $dato?->ciudad_pais) }}" id="ciudad_pais" placeholder="Ciudad Pais">
            {!! $errors->first('ciudad_pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_g" class="form-label">{{ __('Folio G') }}</label>
            <input type="text" name="folio_g" class="form-control @error('folio_g') is-invalid @enderror" value="{{ old('folio_g', $dato?->folio_g) }}" id="folio_g" placeholder="Folio G">
            {!! $errors->first('folio_g', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desde_mes_e" class="form-label">{{ __('Desde Mes E') }}</label>
            <input type="text" name="desde_mes_e" class="form-control @error('desde_mes_e') is-invalid @enderror" value="{{ old('desde_mes_e', $dato?->desde_mes_e) }}" id="desde_mes_e" placeholder="Desde Mes E">
            {!! $errors->first('desde_mes_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="desde_gestion_e" class="form-label">{{ __('Desde Gestion E') }}</label>
            <input type="text" name="desde_gestion_e" class="form-control @error('desde_gestion_e') is-invalid @enderror" value="{{ old('desde_gestion_e', $dato?->desde_gestion_e) }}" id="desde_gestion_e" placeholder="Desde Gestion E">
            {!! $errors->first('desde_gestion_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasta_mes_e" class="form-label">{{ __('Hasta Mes E') }}</label>
            <input type="text" name="hasta_mes_e" class="form-control @error('hasta_mes_e') is-invalid @enderror" value="{{ old('hasta_mes_e', $dato?->hasta_mes_e) }}" id="hasta_mes_e" placeholder="Hasta Mes E">
            {!! $errors->first('hasta_mes_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasta_gestion_e" class="form-label">{{ __('Hasta Gestion E') }}</label>
            <input type="text" name="hasta_gestion_e" class="form-control @error('hasta_gestion_e') is-invalid @enderror" value="{{ old('hasta_gestion_e', $dato?->hasta_gestion_e) }}" id="hasta_gestion_e" placeholder="Hasta Gestion E">
            {!! $errors->first('hasta_gestion_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cargo_e" class="form-label">{{ __('Cargo E') }}</label>
            <input type="text" name="cargo_e" class="form-control @error('cargo_e') is-invalid @enderror" value="{{ old('cargo_e', $dato?->cargo_e) }}" id="cargo_e" placeholder="Cargo E">
            {!! $errors->first('cargo_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nom_empresa_e" class="form-label">{{ __('Nom Empresa E') }}</label>
            <input type="text" name="nom_empresa_e" class="form-control @error('nom_empresa_e') is-invalid @enderror" value="{{ old('nom_empresa_e', $dato?->nom_empresa_e) }}" id="nom_empresa_e" placeholder="Nom Empresa E">
            {!! $errors->first('nom_empresa_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tel_empresa_e" class="form-label">{{ __('Tel Empresa E') }}</label>
            <input type="text" name="tel_empresa_e" class="form-control @error('tel_empresa_e') is-invalid @enderror" value="{{ old('tel_empresa_e', $dato?->tel_empresa_e) }}" id="tel_empresa_e" placeholder="Tel Empresa E">
            {!! $errors->first('tel_empresa_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="motivo_e" class="form-label">{{ __('Motivo E') }}</label>
            <input type="text" name="motivo_e" class="form-control @error('motivo_e') is-invalid @enderror" value="{{ old('motivo_e', $dato?->motivo_e) }}" id="motivo_e" placeholder="Motivo E">
            {!! $errors->first('motivo_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="folio_e" class="form-label">{{ __('Folio E') }}</label>
            <input type="text" name="folio_e" class="form-control @error('folio_e') is-invalid @enderror" value="{{ old('folio_e', $dato?->folio_e) }}" id="folio_e" placeholder="Folio E">
            {!! $errors->first('folio_e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_categorias" class="form-label">{{ __('Id Categorias') }}</label>
            <input type="text" name="id_categorias" class="form-control @error('id_categorias') is-invalid @enderror" value="{{ old('id_categorias', $dato?->id_categorias) }}" id="id_categorias" placeholder="Id Categorias">
            {!! $errors->first('id_categorias', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_imagenes" class="form-label">{{ __('Id Imagenes') }}</label>
            <input type="text" name="id_imagenes" class="form-control @error('id_imagenes') is-invalid @enderror" value="{{ old('id_imagenes', $dato?->id_imagenes) }}" id="id_imagenes" placeholder="Id Imagenes">
            {!! $errors->first('id_imagenes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_cursos" class="form-label">{{ __('Id Cursos') }}</label>
            <input type="text" name="id_cursos" class="form-control @error('id_cursos') is-invalid @enderror" value="{{ old('id_cursos', $dato?->id_cursos) }}" id="id_cursos" placeholder="Id Cursos">
            {!! $errors->first('id_cursos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
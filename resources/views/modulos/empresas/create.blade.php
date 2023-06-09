@extends('plantilla.adminlte')

@section('titulo')
    Empresas
@endsection

@section('css')
    <style>
        /* Quitamos flechas del imput number */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }
        input[type=number] { -moz-appearance:textfield; }
    </style>
@endsection

@section('contenido')
    <div class="content-wrapper">
        {{-- ! Encabezado --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Agregar Nueva Empresas al Sistema</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Sistema Contable</a></li>
                            <li class="breadcrumb-item active"> <a href="/empresas">Empresas</a> </li>
                            <li class="breadcrumb-item active">Crear Empresa</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        {{-- ! Fin Encabezado --}}

        {{-- ! Contenido --}}
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Crear Nueva Empresa</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="/empresas" class="frmCrear-Empresa" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nit">Número de Identificación Tributaria</label>
                                                <input name="nit" id="nit" type="text" class="form-control"
                                                placeholder="Número de Identificación Tributaria" value="{{old('nit')}}" autocomplete="off" style="text-transform: uppercase" title="Número de Identificación Tributaria | máximo 20 carácteres | sólo números" maxlength="20" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="denominacionSocial">Denominación Social</label>
                                                <input name="denominacionSocial" id="denominacionSocial" type="text" class="form-control" maxlength="150" title="Denominación Social | máximo 150 carácteres" placeholder="Denominación Social" value="{{old('denominacionSocial')}}"
                                                    autocomplete="off"  style="text-transform: uppercase" required>
                                            </div>

                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Tipo de Empresa</label>
                                                <select class="form-control" name="sociedadTipo" id="sociedadTipo" required>
                                                    <option>{{old('sociedadTipo')}}</option>
                                                    <option>EMPRESA UNIPERSONAL</option>
                                                    <option>SOCIEDAD DE RESPONSABILIDAD LIMITADA</option>
                                                    <option>SOCIEDAD ANÓNIMA</option>
                                                    <option>SOCIEDAD CONSTITUIDA EN EL EXTRANJERO</option>
                                                    <option>SOCIEDAD COLECTIVA</option>
                                                    <option>SOCIEDAD EN COMANDITA SIMPLE</option>
                                                    <option>SOCIEDAD ANONIMA MIXTA</option>
                                                    <option>ENTIDAD FINANCIERA DE VIVIENDA</option>
                                                    <option>SOCIEDAD EN COMANDITA POR ACCIONES</option>
                                                    <option>ASOCIACIÓN ACCIDENTAL O DE CUENTAS EN PARTICIPACIÓN</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="actividad">Actividad</label>
                                                <input name="actividad" id="actividad" type="text" class="form-control"
                                                placeholder="Actividad" value="{{old('actividad')}}" autocomplete="off" style="text-transform: uppercase" title="¿A que se dedica la Empresa? | máximo 255 carácteres" maxlength="255" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="representanteLegal">Representante Legal</label>
                                                <input name="representanteLegal" id="representanteLegal" type="text" class="form-control"
                                                    placeholder="Representante Legal" value="{{old('representanteLegal')}}" autocomplete="off" style="text-transform: uppercase"
                                                    title="Representante Legal | máximo 50 carácteres" maxlength="50" required>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="ci">Nro. Carnet de Identidad</label>
                                                        <input name="ci" id="ci" type="text" class="form-control"
                                                            placeholder="NRO. CARNET DE IDENTIDAD" maxlength="10" title="Nro. Carnet de Identidad | máximo 10 carácteres" value="{{old('ci')}}" autocomplete="off" required>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="complemento">Complemento</label>
                                                        <input name="complemento" id="complemento" type="text" class="form-control"
                                                            value="{{old('complemento')}}" autocomplete="off" style="text-transform: uppercase" maxlength="3" title="Sólo si aplica | máximo 3 carácteres">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Extensión</label>
                                                        <select class="form-control" name="extension" id="extension"  required>
                                                        <option>{{old('extension')}}</option>
                                                        <option>LP</option>
                                                        <option>SC</option>
                                                        <option>CB</option>
                                                        <option>PT</option>
                                                        <option>CH</option>
                                                        <option>TJ</option>
                                                        <option>OR</option>
                                                        <option>BE</option>
                                                        <option>PD</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="celular">Celular</label>
                                                <input name="celular" id="celular" type="text" class="form-control"
                                                    placeholder="SIN EXTENSION; Ejemplo: 68087958" title="Celular sin extensión | mínimo y máximo 8 digitos" value="{{old('celular')}}" autocomplete="on">
                                            </div>
                                            {{-- Todos los números de teléfonos en el territorio boliviano tienen el mismo formato de 8 dígitos desde 28 de noviembre de 2001. --}}
                                            {{-- Lista de prefijos telefónicos en Bolivia
                                            Ciudad	Código de Área
                                            Departamento de La Paz	2
                                            Departamento de Oruro	2
                                            Departamento de Potosí	2
                                            Departamento de Pando	3
                                            Departamento de Beni	3
                                            Departamento de Santa Cruz	3
                                            Departamento de Cochabamba	4
                                            Departamento de Chuquisaca	4
                                            Departamento de Tarija	4
                                            Teléfonos celulares	6, 7--}}
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="correo">Correo Electrónico</label>
                                                <input name="correo" id="correo" type="email" class="form-control"
                                                    placeholder="CORREO ELECTRÓNICO" value="{{old('correo')}}" autocomplete="on">
                                            </div>

                                            <div class="form-group">
                                                <label for="direccion">Dirección Casa Matriz</label>
                                                <input name="direccion" id="direccion" type="text" class="form-control "
                                                    placeholder="Dirección" title="Dirección de la Casa Matriz de la Empresa | máximo 150 carácteres" value="{{old('direccion')}}" maxlength="150" autocomplete="off" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Clasificación (D.S. 24051)</label>
                                                <select class="form-control" name="clasificacion" id="clasificacion" required>
                                                <option>{{old('clasificacion')}}</option>
                                                <option>COMERCIAL</option>
{{--                                                 <option>INDUSTRIAL</option>
                                                <option>MINERA</option>
                                                <option>GOMERA</option> --}}
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="rutaNit">Documento NIT (pdf,png,jpg,jpeg)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="rutaNit" name="rutaNit">
                                                        <label class="custom-file-label" for="rutaNit"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="rutaCertInscripcion">Certificado de Inscripción (pdf,png,jpg,jpeg)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="rutaCertInscripcion" name="rutaCertInscripcion">
                                                        <label class="custom-file-label" for="rutaCertInscripcion"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="rutaMatricula">Matrícula de Comercio (pdf,png,jpg,jpeg)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="rutaMatricula" name="rutaMatricula">
                                                        <label class="custom-file-label" for="rutaMatricula"></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="rutaRoe">Registro Obligatorio de Empleador (pdf,png,jpg,jpeg)</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="rutaRoe" name="rutaRoe">
                                                        <label class="custom-file-label" for="rutaRoe"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-danger" href="/empresas" role="button">Cancelar</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </section>
        {{-- ! Fin Contenido --}}
    </div>
@endsection

@section('js')
    {{--! menu actual --}}
    <script>
        $('#menuGestionarEmpresas').addClass('menu-open');
        $('#menuEmpresas').addClass('active');
        $('#submenuEmpresas').addClass('active');
    </script>

    {{--* SWEETALERT 2 --}}
    {{--! Error cuando el NIT ya existe --}}
    @error('nit')
        <script>
            toastr.error('El NIT ya fue registrado, no puede ser registrado nuevamente.')
        </script>
    @enderror
    {{--! Error cuando los archivos subidos --}}
    @error('rutaNit')
        <script>
            toastr.error('Verifique el archivo del NIT. Solo se permite archivos .pdf .png .jpg .jpeg')
        </script>
    @enderror
    @error('rutaCertInscripcion')
    <script>
        toastr.error('Verifique el archivo del Certificado de Inscripción. Solo se permite archivos .pdf .png .jpg .jpeg')
    </script>
    @enderror
    @error('rutaMatricula')
    <script>
        toastr.error('Verifique el archivo de la Matrícula de Comercio. Solo se permite archivos .pdf .png .jpg .jpeg')
    </script>
    @enderror
    @error('rutaRoe')
    <script>
        toastr.error('Verifique el archivo del ROE. Solo se permite archivos .pdf .png .jpg .jpeg')
    </script>
    @enderror

    {{--! Pregunta desea crear empresa--}}
    <script>
        // con -> $('.frmCrearEmpresa').submit --seleccionamos el formualrio y se ejecuta cuando se envie
        $('.frmCrear-Empresa').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Desea crear la empresa?',
            text: "¡Creará una nueva empresa!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#11151c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Crear',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    //enviamos el formulario
                    this.submit();
                }
            })
        })
    </script>

    {{--! file --}}
    <script src="{{asset('/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

    {{--! limites de los caracteres CELULAR Y CI--}}
    <script>

        //oninput //! al cambiar algo dentro del input
        //onchange //! al cambiar de input
        //el final de la extracción. slice extrae hasta, pero sin incluir el final, cuenta desde el cero

        // limite caracteres de celular
        celular.oninput = function(){
            if (this.value.length > 8) {
                this.value = this.value.slice(0,8); //cuenta tambien el 0 excepto el 8vo
            }
        }

        //minimo de caracteres de celular
        celular.onchange = function(){
            if (this.value.length < 8) {
                Swal.fire("Revise el número de celular, tiene menos de 8 carácteres.");
                this.select();
            }
            if (this.value.slice(0,1) != 6 && this.value.slice(0,1) != 7) {
                //cuenta tambien el 0 excepto el 1ro
                Swal.fire("Primer digito del celular observado.");
                this.select();
            }
        }

        // limite caracteres de carnet
        ci.oninput = function(){
            if (this.value.length > 15) {
                this.value = this.value.slice(0,15); //cuenta tambien el 0 excepto el 8vo
            }
        }
    </script>

    {{--! solo numeros NIT CI CELULAR --}}
    <script>
        $(document).ready(function(){
            // nit
            // Escuche el evento de entrada.
            $("#nit").on('input', function (evt) {
                // Permitir solo números.
                $(this).val($(this).val().replace(/[^0-9]/g, '')); //apuntes en JQuery
            });

            //ci
            $("#ci").on('input', function (evt) {
                $(this).val($(this).val().replace(/[^0-9]/g, '')); //apuntes en JQuery
            });

            // celular
            $("#celular").on('input', function (evt) {
                $(this).val($(this).val().replace(/[^0-9]/g, '')); //apuntes en JQuery
            });
        });
    </script>
@endsection

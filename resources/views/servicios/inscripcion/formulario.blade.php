@extends('layouts.main_gesac')
@section('content')
<!-- codigo original -->

        <form method="get" action="{{ route('inscripcion.form_save') }}" id="formulario_ini" >
            {{ csrf_field() }}


<div>
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <center>
              <h5 class="page-header">
                <i class="ion ion-university"></i> <b>FORMULARIO DE INSCRIPCIÓN </b>
              </h5>
              </center>
            </div><!-- /.col -->
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <center>
                <!-- <h4><b>Atención!!!</b></h4> -->
                <p style="color:black;"><b>Convenio interinstitucional entre el Ministerio de Educación, Deportes y Culturas y la Escuela de Gestión Publica Plurinacional..
                </b></p>
                <small>Los datos marcados con (*) son obligatorios.</small>
              </center>
            </div><!-- /.col -->
          </div>



          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h5>Datos del/la Participante</h5>
                  </div>
                  <div class="card-body">


<!-- codigo replica -->



                    <div class="box-body" style="display: block;">

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="ci">Nro. Documento de Identidad <span style="color:red">*</span></label>
                          <input type="text" class=":required form-control  vanadium-invalid" name="ci" id="ci" value="" maxlength="12" minlength="4" onblur="validar_ci()"  required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="exp_depto">Expedido en: <span style="color:red">*</span></label>
                          <select name="exp_depto" class="form-control" id="exp_depto" required="">
                            <option value="" selected="selected">Seleccione el departamento</option>
                            @foreach($departamentos as $det)
                                <option value="{{$det->id_departamento}}">{{$det->departamento}}</option>
                            @endforeach

                          </select>

                        </div>
                      </div>                      
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="paterno">Apellido Paterno <span style="color:red">*</span></label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="paterno" id="paterno" value="" required="required">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="materno">Apellido Materno <span style="color:red">*</span></label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="materno" id="materno" value="" required="required">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="nombres">Nombres <span style="color:red">*</span></label>
                          <input type="text" style="text-transform: uppercase" class=":required form-control" name="nombres" id="nombres" value="" required="required">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-sm-6">
                        <div class="form-group">
                          <label for="ciudad_vive">Ciudad donde vive</label>
                          <select name="ciudad_vive" class=":required form-control   vanadium-valid" id="ciudad_vive">
                            <option value="" selected="selected">Seleccione la ciudad</option>
                            @foreach($ciudades as $det)
                                <option value="{{$det->id_ciudad}}">{{$det->departamento_sigla}} - {{$det->ciudad}}</option>
                            @endforeach                            
                          </select>

                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-sm-6">
                        <div class="form-group">
                          <label for="direccion_vive">Dirección donde vive</label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="direccion_vive" id="direccion_vive" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="lugar_nacimiento">Lugar de Nacimiento (Departamento) <span style="color:red">*</span></label>
                          <select name="lugar_nacimiento" class="form-control" id="lugar_nacimiento" required="">
                            <option value="" selected="selected">Seleccione la ciudad</option>
                            <option value="1">CHUQUISACA</option>
                            <option value="3">LA PAZ</option>
                            <option value="9">COCHABAMBA</option>
                            <option value="16">ORURO</option>
                            <option value="18">POTOSI</option>
                            <option value="24">TARIJA</option>
                            <option value="29">SANTA CRUZ</option>
                            <option value="36">BENI</option>
                            <option value="42">PANDO</option>
                            <option value="80">EXTRANJERO</option>
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="fec_nacimiento">Fecha de Nacimiento <span style="color:red">*</span></label>
                          <input type="date" class=":required form-control       vanadium-invalid" name="fec_nacimiento" id="fec_nacimiento" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="sexo">Sexo <span style="color:red">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <br>
                            <input type="radio" name="sexo" id="optionsRadios1" value="M" required> Masculino
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="sexo" id="optionsRadios2" value="F"> Femenino
                            <br>
                                                    </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="email">Email personal <span style="color:red">*</span></label>
                          <input type="text" class=":required form-control     vanadium-invalid" name="email" id="email" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group">
                          <label for="tel_fijo">Teléfono Fijo</label>
                          <input type="text" class="form-control" name="tel_fijo" id="tel_fijo" value="">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-2">
                        <div class="form-group">
                          <label for="tel_movil">Teléfono Móvil <span style="color:red">*</span></label>
                          <input type="text" class=":integer :min_length;7 :required form-control     vanadium-invalid" name="tel_movil" id="tel_movil" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span><span class="vanadium-advice vanadium-invalid">Valor debe ser como minimo <span class="vanadium-message-value">7</span> caracteres.</span>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label for="profesion">Profesión</label>
                          <select name="profesion" class="form-control" id="profesion">
                            <option value="" selected="selected">Seleccione la Profesión</option>
                            @foreach($profesiones as $det)
                                <option value="{{$det->id_profesion}}">{{$det->profesion}}</option>
                            @endforeach
                            
                          </select>

                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label for="empresa">Empresa/Institución donde trabaja</label>
                          <select name="empresa" class="form-control" id="empresa">
                            <option value="" selected="selected">Seleccione la empresa</option>
                            
                            <option value="1">MINISTERIO DE EDUCACION - MINEDU</option>
                            
                          </select>

                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label for="unidad">Unidad</label>
                          <select name="unidad" class="form-control" id="unidad">
                            <option value="" selected="selected">Seleccione su unidad</option>
                            
                              <optgroup label="Despacho del Ministro de Educación, Deportes y Culturas.">
                                <option value="Jefatura de Gabinete">Jefatura de Gabinete</option>
                                <option value="Unidad de Transparencia">Unidad de Transparencia</option>
                                <option value="Unidad De Comunicación Social">Unidad De Comunicación Social</option>
                                <option value="Unidad De Auditoría interna">Unidad De Auditoría interna</option>
                              </optgroup>
                              <optgroup label="Despacho del Ministro de Educación, Deportes y Culturas.">
                                <option value="Unidad Financiera">Unidad Financiera</option>
                                <option value="Unidad  Administrativa">Unidad  Administrativa</option>
                                <option value="URRHHyDO">URRHHyDO</option>
                                <option value="Unidad de Gestión de Perrsonal del SEP">Unidad de Gestión de Perrsonal del SEP</option>
                              </optgroup>
                              <optgroup label="Dirección General de Asuntos Jurídicos (DGAJ).">
                                <option value="Unidad de Análisis Jurídico">Unidad de Análisis Jurídico</option>
                                <option value="Unidad de Gestión Jurídica">Unidad de Gestión Jurídica</option>
                              </optgroup>
                              <optgroup label="Dirección General de Planificación (DGP).">
                                <option value="Unidad de Políticas de Intraculturalidad, Interculturalidad y Plurilingüismo">Unidad de Políticas de Intraculturalidad, Interculturalidad y Plurilingüismo</option>
                                <option value="Unidad de Sistemas">Unidad de Sistemas</option>
                              </optgroup>
                              <optgroup label="Dirección General de Educación Primaria.">
                                <option value="Dirección General de Educación Primaria.">Dirección General de Educación Primaria.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Educación Secundaria.">
                                <option value="Dirección General de Educación Secundaria.">Dirección General de Educación Secundaria.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Educación de Adultos.">
                                <option value="Dirección General de Educación de Adultos.">Dirección General de Educación de Adultos.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Educación Especial.">
                                <option value="Dirección General de Educación Especial.">Dirección General de Educación Especial.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Post Alfabetización.">
                                <option value="Unidad Ejecutora del Programa de Postalfabetización">Unidad Ejecutora del Programa de Postalfabetización</option>
                              </optgroup>
                              <optgroup label="Dirección General de Educación Superior Técnica Tecnológica, Lingüística y Artística (DGESTTLA).">
                                <option value="Dirección General de Educación Superior Técnica Tecnológica, Lingüística y Artística (DGESTTLA).">Dirección General de Educación Superior Técnica Tecnológica, Lingüística y Artística (DGESTTLA).</option>
                              </optgroup>
                              <optgroup label="Dirección General de Educación Superior Universitaria.">
                                <option value="Dirección General de Educación Superior Universitaria.">Dirección General de Educación Superior Universitaria.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Formación de Maestros.">
                                <option value="Dirección General de Formación de Maestros.">Dirección General de Formación de Maestros.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Ciencia y Tecnología (DGCT).">
                                <option value="Dirección General de Ciencia y Tecnología (DGCT).">Dirección General de Ciencia y Tecnología (DGCT).</option>
                              </optgroup>
                              <optgroup label="Dirección General de Ciencia y Tecnología (DGCT).">
                                <option value="Unidad de Ciencia y Tecnología.">Unidad de Ciencia y Tecnología.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Tecnología de la Información y Comunicación (DGTIC).">
                                <option value="Dirección General de Tecnología de la Información y Comunicación (DGTIC).">Dirección General de Tecnología de la Información y Comunicación (DGTIC).</option>
                              </optgroup>
                              <optgroup label="Dirección General de Deportes.">
                                <option value="Unidad De Desarrollo Integral de Deporte.">Unidad De Desarrollo Integral de Deporte.</option>
                                <option value="Unidad de Coordinación y Apoyo al Deporte.">Unidad de Coordinación y Apoyo al Deporte.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Formación Deportiva.">
                                <option value="Unidad de Coordinación de Centros Deportivos.">Unidad de Coordinación de Centros Deportivos.</option>
                                <option value="Unidad de Formación, Promoción y recreación deportiva.">Unidad de Formación, Promoción y recreación deportiva.</option>
                              </optgroup>
                              <optgroup label="Dirección General de Patrimonio Cultural.">
                                <option value="Unidad De Patrimonio Inmaterial.">Unidad De Patrimonio Inmaterial.</option>
                                <option value="Unidad de Monumentos y Sitios Históricos y Bienes Culturales.">Unidad de Monumentos y Sitios Históricos y Bienes Culturales.</option>
                                <option value="Unidad de Arqueología y Museos.">Unidad de Arqueología y Museos.</option>
                              </optgroup>

                              <optgroup label="Dirección General de Promoción Cultural y artística.">
                                <option value="Unidad de Industrias Culturales.">Unidad de Industrias Culturales.</option>
                                <option value="Unidad de Producción de Eventos Artísticos.">Unidad de Producción de Eventos Artísticos.</option>
                                <option value="Unidad de Producción Comunicacional.">Unidad de Producción Comunicacional.</option>
                              </optgroup>

                              <optgroup label="UNIDADES QUE NO DEPENDEN DE DIRECCIONES.">
                                <option value="Sistema Plurinacional de Certificados de Competencias.">Sistema Plurinacional de Certificados de Competencias.</option>
                               
                              </optgroup>
                              
    
                          </select>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label for="cargo">Cargo actual</label>
                          <select name="cargo" class="form-control" id="cargo">
                          <option value="" selected="selected">Seleccione el Cargo</option>
                          <option value="195">ADMINISTRACIÓN FINANCIERA</option>
                          <option value="202">ADMINISTRATIVO</option>
                          <option value="63">ALCALDE</option>
                          <option value="12">ANALISTA</option>
                          <option value="48">ASAMBLEISTA</option>
                          <option value="3">ASESOR/A GENERAL</option>
                          <option value="31">ASISTENTE</option>
                          <option value="116">AUDITOR INTERNO</option>
                          <option value="196">AUTORIDAD ORIGINARIA</option>
                          <option value="132">CHOFER</option>
                          <option value="64">CONCEJAL</option>
                          <option value="36">CONSULTOR</option>
                          <option value="65">CONTADOR</option>
                          <option value="160">COORDINADOR</option>
                          <option value="2">DIRECTOR/A</option>
                          <option value="62">DIRIGENTE</option>
                          <option value="201">DOCENTE</option>
                          <option value="169">ENCARGADO DE LIMPIEZA</option>
                          <option value="59">ENCARGADO DE PERSONAL</option>
                          <option value="134">ESPECIALISTA</option>
                          <option value="56">GERENTE</option>
                          <option value="205">GESTOR PLATAFORMA VIRTUAL</option>
                          <option value="0">INDEPENDIENTE</option>
                          <option value="5">JEFE DE UNIDAD O AREA</option>
                          <option value="1">MAXIMA AUTORIDAD EJECUTIVA</option>
                          <option value="200">MINISTRO/A</option>
                          <option value="29">NO CUENTA CON CARGO ACTUAL</option>
                          <option value="71">OTROS</option>
                          <option value="197">PARLAMENTARIO/A SUPRAESTATAL</option>
                          <option value="119">PASANTE</option>
                          <option value="187">PRESIDENTE</option>
                          <option value="17">PROFESIONAL</option>
                          <option value="49">PROFESOR/A O DOCENTE</option>
                          <option value="55">RECAUDADOR/A</option>
                          <option value="142">RECEPCIONISTA</option>
                          <option value="199">SECRETARIA</option>
                          <option value="130">SERENO</option>
                          <option value="198">SERVIDOR/A PUBLICO</option>
                          <option value="38">SIN DEFINIR</option>
                          <option value="61">SUPERVISOR (A)</option>
                          <option value="21">TECNICO</option>
                          <option value="204">TRABAJADORA SOCIAL</option>
                          <option value="180">VICEMINISTRO/A</option>
                          <option value="203">VICEPRESIDENTE</option>
                          </select>

                        </div>
                      </div>
                    </div>
                
              </div>


<!-- fin codigo replica -->

                  </div>
                </div>  
              </div>
            </div>
          </div>


          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Cursos <b>subvencionados</b> por el Ministerio de Educación, Deportes y Culturas <b>(GRATUITOS)</b></h5>
                  </div>
                  <div class="card-body">
                    <p class="text-muted m-b-30">
                        Puede seleccionar una de las siguientes opciones:
                    </p>
                    <div class="table-responsive">

                    <table class="table"> 
                      <tr>
                        <th>Cursos</th>
                        <th align="right">Costo</th>
                      </tr>
                      <tr>
                        <td>
                          <!-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch_idioma1" name="check[]" value="idioma_subv" onclick="calc();">
                            <label class="custom-control-label" for="ch_idioma1">IDIOMA ORIGINARIO</label>
                            <select class="form-control"  id="select_idioma1" name="select_idioma1">
                              <option value="Aimara">Aimara</option>
                              <option value="Quechua">Quechua</option>
                            </select>
                          </div> -->
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input mi_check" id="ch_ofimatica" name="check[]" value="ofimatica_subv">
                            <label class="custom-control-label" for="ch_ofimatica">OFIMATICA</label>
                            
                          </div>
                        </td> 
                        <!-- <td align="right"><label class="lbl_precios" id="lbl_precio_idioma1">Bs. 00</label>  </td>   -->
                        <td align="right"><label class="lbl_precios" id="lbl_ofimatica">Bs. 00</label>  </td>  

                      </tr>
                      <tr>  
                        <td>
                          <!-- <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input mi_check" id="ch_combo" name="check[]" value="combo_subv">
                              <label class="custom-control-label" for="ch_combo">- LEY 004 <br>- RESPONSABILIDAD POR LA FUNCION PUBLICA</label>
                          </div> -->
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input mi_check" id="ch_combo2" name="check[]" value="combo2_subv">
                              <label class="custom-control-label" for="ch_combo2">- PREVENCIÓN DE LA VIOLENCIA <br>- RELACIONES HUMANAS</label>
                          </div>
                        </td>
                        <!-- <td align="right"><label class="lbl_precios" id="lbl_precio_combo">Bs. 00</label>  </td>   -->
                        <td align="right"><label class="lbl_precios" id="lbl_precio_combo2">Bs. 00</label>  </td>  
                      </tr>                    
                    </table>
                    </div>

                    
                    <div class="alert alert-dark" role="alert">
                       <strong>Recuerde!</strong> Para que se haga efectiva la subvención,terminado el curso el participante debe presentar el certificado de aprobación al área de recursos humanos del Ministerio de Educación, Deportes y Culturas.
                    </div>




                  </div>
                </div>  
              </div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Cursos Con 15% descuento</h5>
                  </div>
                  <div class="card-body">
                     <p class="text-muted m-b-30">
                        Puede seleccionar uno o varios:
                    </p>
                    <div class="table-responsive">
                        
                    
                    <table class="table"> 
                      <tr>
                        <th>Cursos</th>
                        <th align="right">Costo</th>
                      </tr>
                      <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_violencia" name="check[]" value="violencia">
                                <label class="custom-control-label" for="ch_violencia">PREVENCIÓN DE LA VIOLENCIA</label>
                            </div>
                        </td> 
                        <td align="right"><label class="lbl_precios" id="lbl_precio_violencia">Bs. 85</label>  </td>  
                      </tr>
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_1178" name="check[]" value="1178">
                                <label class="custom-control-label" for="ch_1178">LEY Nº 1178</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_1178">Bs. 153</label>  </td>  
                      </tr>  
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_pp" name="check[]" value="pp">
                                <label class="custom-control-label" for="ch_pp">POLÍTICAS PÚBLICAS</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_pp">Bs. 153</label>  </td>  
                      </tr>  
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_004" name="check[]" value="004">
                                <label class="custom-control-label" for="ch_004">LEY 004</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_004">Bs. 153</label>  </td>  
                      </tr>  
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_responsabilidad" name="check[]" value="responsabilidad">
                                <label class="custom-control-label" for="ch_responsabilidad">RESPONSABILIDAD POR LA FUNCION PUBLICA</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_responsabilidad">Bs. 153</label>  </td>  
                      </tr>


                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox div_idioma2">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_idioma2" name="check[]" value="idioma_desc">
                                <label class="custom-control-label" for="ch_idioma2">IDIOMA ORIGINARIO</label>
                                <select class="form-control "  data-width="50%" id="select_idioma2" name="select_idioma2">
                                    <option value="Aimara">Aimara</option>
                                    <option value="Quechua">Quechua</option>
                                    </select>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_idioma2">Bs. 255</label>  </td>  
                      </tr>                    
                    </table>
                    </div>



                  </div>
                </div>  
              </div>


            </div>
          </div> 

          <div class="" align="center">
              <small>Por favor revise sus datos antes de inscribirse.</small><br>
              <button type="submit" class="btn btn-primary btn-lg btn_guardar">INSCRIPCIÓN ... <span class="badge badge-light" id="precio_fin" style="font-size: 15px;">Bs.0</span></button>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</form>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro Exitoso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Gracias por inscribirse, Revisaremos su información y le enviaremos su hoja de inscripción en los próximos días. Por favor esté atento a su correo.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalerror" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Error!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Esta Cedula de Identidad ya se encuentra registrada. NO puede volver a inscribirse.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


@endsection
@section('js')

@if(!session('mensaje')==null)
    <script type="text/javascript"> 
        var mensaje='{{session('mensaje')}}';

        $('#exampleModalCenter').modal('show'); 
         
    </script>>    
@endif﻿

<script type="text/javascript">
var precio = 0.0;
var monto1=85.0;
var monto2=153.0;
var monto3=255.0;


    function calc_precio(monto,operacion){
        if(operacion == 'sum'){
            precio=precio+monto;
        }
        else{
            precio=precio-monto;
        }
          document.getElementById('precio_fin').innerHTML ='Bs.'+ precio;
    }
    
    inicio();

    function inicio() {
        $(".mi_check").prop("checked", false);
        $("#select_idioma1").attr("disabled", true);
        $(".lbl_precios").hide();
        document.getElementById('precio_fin').innerHTML = 'Bs.0';
    };

    function deshabilita_combo() {
        $("#ch_combo").prop("checked", false);
        $("#lbl_precio_combo").hide();
    };

    function habilita_combo() {
        $("#lbl_precio_combo").show();
    };


    function deshabilita_combo2() {
        $("#ch_combo2").prop("checked", false);
        $("#lbl_precio_combo2").hide();
    };

    function habilita_combo2() {
        $("#lbl_precio_combo2").show();
    };

    function habilita_ofimatica_subv() {
        
        $("#lbl_ofimatica").show();
    };

    function deshabilita_ofimatica_subv() {
        $("#ch_ofimatica").prop("checked", false);
        $("#lbl_ofimatica").hide();
    };


    function habilita_idioma_subv() {
        $("#select_idioma1").removeAttr("disabled");
        $("#lbl_precio_idioma1").show();
    };

    function deshabilita_idioma_subv() {
        $("#ch_idioma1").prop("checked", false);
        $("#select_idioma1").attr("disabled", true);
        $("#lbl_precio_idioma1").hide();
    };

    function habilita_idioma_desc() {
        $("#select_idioma2").removeAttr("disabled");
        $("#lbl_precio_idioma2").show();
    };

    function deshabilita_idioma_desc() {
        $("#ch_idioma2").prop("checked", false);
        $("#select_idioma2").attr("disabled", true);
        $("#lbl_precio_idioma2").hide();
    };

    function habilita_1178() {
        $("#lbl_precio_1178").show();
    }; 

    function deshabilita_1178() {
        $("#lbl_precio_1178").hide();
    };

   function habilita_pp() {
        $("#lbl_precio_pp").show();
    }; 

    function deshabilita_pp() {
        $("#lbl_precio_pp").hide();
    };

   function habilita_violencia() {
        $("#lbl_precio_violencia").show();
    }; 

    function deshabilita_violencia() {
        $("#ch_violencia").prop("checked", false);
        $("#lbl_precio_violencia").hide();
    };

    function habilita_004() {
        $("#lbl_precio_004").show();
    }; 

    function deshabilita_004() {
        $("#ch_004").prop("checked", false);
        $("#lbl_precio_004").hide();
    };

    function habilita_responsabilidad() {
        $("#lbl_precio_responsabilidad").show();
    };

    function deshabilita_responsabilidad() {
        $("#ch_responsabilidad").prop("checked", false);
        $("#lbl_precio_responsabilidad").hide();
    };

// IDIOMA SUBVENCION
$('#ch_idioma1').click(function() {
  if ($(this).is(':checked')) {
      if ($('#ch_idioma2').is(':checked')) {
         calc_precio(monto3,'rest');
      }
    deshabilita_combo();
    habilita_idioma_subv();
    deshabilita_idioma_desc();
  }
  else{
    deshabilita_idioma_subv();

  }

});

// OFIMATICA SUBVENCION

$('#ch_ofimatica').click(function() {
  if ($(this).is(':checked')) {
    habilita_ofimatica_subv();
    deshabilita_combo2();
  }
  else{
    deshabilita_ofimatica_subv();
  }
});


// COMBO
$('#ch_combo').click(function() {
  if ($(this).is(':checked')) {
    if ($('#ch_004').is(':checked')) {
         calc_precio(monto2,'rest');
      }
    if ($('#ch_responsabilidad').is(':checked')) {
         calc_precio(monto2,'rest');
      }
    habilita_combo();
    deshabilita_idioma_subv(); 
    deshabilita_004();
    deshabilita_responsabilidad();
  }
  else{
    deshabilita_combo();
  }
});



// COMBO2
$('#ch_combo2').click(function() {
  if ($(this).is(':checked')) {
    if ($('#ch_violencia').is(':checked')) {
         calc_precio(monto1,'rest');
      }
  
    habilita_combo2();
    deshabilita_ofimatica_subv(); 
    deshabilita_violencia();
  }
  else{
    deshabilita_combo2();
  }
});



$('#ch_violencia').click(function() {
  if ($(this).is(':checked')) {
    habilita_violencia();
    deshabilita_combo2();
    calc_precio(monto1,'sum');
  }
  else{
    deshabilita_violencia();
    calc_precio(monto1,'rest');
  }
});



$('#ch_1178').click(function() {
  if ($(this).is(':checked')) {
    habilita_1178();
    calc_precio(monto2,'sum');
  }
  else{
    deshabilita_1178();
    calc_precio(monto2,'rest');
  }
});

$('#ch_pp').click(function() {
  if ($(this).is(':checked')) {
    habilita_pp();
    calc_precio(monto2,'sum');

  }
  else{
    deshabilita_pp();
    calc_precio(monto2,'rest');
  }
});

$('#ch_004').click(function() {
  if ($(this).is(':checked')) {
    habilita_004();
    deshabilita_combo();
    calc_precio(monto2,'sum');
  }
  else{
    deshabilita_004();
    calc_precio(monto2,'rest');
  }
});

$('#ch_responsabilidad').click(function() {
  if ($(this).is(':checked')) {
    habilita_responsabilidad();
    deshabilita_combo();
    calc_precio(monto2,'sum');
  }
  else{
    deshabilita_responsabilidad();
    calc_precio(monto2,'rest');
  }
});

// IDIOMA DESCUENTO
$('#ch_idioma2').click(function() {
  if ($(this).is(':checked')) {
    habilita_idioma_desc();
    deshabilita_idioma_subv();
    calc_precio(monto3,'sum');
  }
  else{
    deshabilita_idioma_desc();
    calc_precio(monto3,'rest');
  }
});



(function() {
    function addValidation(checkboxes) {
        const firstCheckbox = getFirstCheckbox(checkboxes);
    
        if (firstCheckbox) {
            for (let i = 0; i < checkboxes.length; i++) {
                checkboxes[i].addEventListener('change', function() {
                    checkValidity(checkboxes, firstCheckbox);
                });
            }

            checkValidity(checkboxes, firstCheckbox);
        }
    }
    
    function getFirstCheckbox(checkboxes) {
        return checkboxes.length > 0 ? checkboxes[0] : null;
    }

    function isChecked(checkboxes) {
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity(checkboxes, firstCheckbox) {
        const errorMessage = !isChecked(checkboxes) ? 'Seleccione al menos una opcion.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

        const form = document.querySelector('#formulario_ini');
    
    // Let's add a validation for the first group of checkboxes
    const checkboxes = form.querySelectorAll('input[name="check"]');
    addValidation(checkboxes);
    
    // another group of checkboxes
    const subCheckboxes = form.querySelectorAll('input[name="check[]"]');
    addValidation(subCheckboxes);
})();


function validar_ci() {

var cid = $("#ci").val();

$.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('inscripcion.validar_ci')}}",
    data: {
      ci: cid
    },
    success: function(dataResult)
    {
       func_alerta(dataResult);
    }
  });
};


function func_alerta(resultado) {


var obj_php = "<?php echo json_encode("+resultado+"); ?>";
var ecnuestador = JSON.parse(obj_php );

  if (ecnuestador.length > 0){
     $('#modalerror').modal('show'); 

    // new PNotify({title: "Error",type: "error",text: 'El Ci:'+ecnuestador[0].ci+' Ya se encuentra registrado como encuestador con el nombre de '+ecnuestador[0].primer_nombre+' '+ecnuestador[0].apellido_paterno+'. No puede registrarse nuevamente.' ,styling: 'bootstrap3',});


    $(".btn_guardar").attr("disabled", true);
  }
  else{
   $(".btn_guardar").attr("disabled", false);

  }
};



</script>
@endsection


@extends('layouts.main_gesac')
@section('content')
 
<div>
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="card">
                  <div class="card-body">
                    <h5>Formulario de contacto</h5>
                    <hr>                                


                    <form method="get" action="{{route('contacto.form_save')}}" id="empleados_form" >
                    {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Nombres (*)</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" required="required">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Apellidos (*)</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" required="required">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="correo" id="correo">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Celular (*)</label>
                            <input type="text" class="form-control" name="celular" id="celular" required="required">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cursos de los que desea informacion (*)</label>
                        <select class="form-control select2"  data-width="50%" id="cursos" name="curso" required="">
                          <option value=""></option>
                          @foreach($areas as $det)
                            <optgroup label="{{$det->tipo_oferta}}">
                            @foreach($cursos as $det1)
                              @if($det1->tipo_oferta==$det->tipo_oferta)
                              <option value="{{$det1->id_curso}}">{{$det1->curso}}</option>
                              @endif
                            @endforeach
                            </optgroup>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ingrese su consulta (*)</label>
                        <textarea class="form-control" name="cosnulta" id="cosnulta" rows="3" required="required" minlength = "10"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                      
                      <small>Los campos marcados con (*) son obligatorios.</small>
                    </form>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
        Su consulta fue enviada correcatamente, le enviaremos una respuesta a la brevedad posible.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

    // $('.select2').select2({
    // });

    $('#select2').select2({
        placeholder: 'Selecione una opcion',
        templateResult: formatOutput
    });

    // $(document).ready(function() {
    //     $('.select2').select2();
    // });

    function formatOutput (optionElement) {
      if (!optionElement.id) { return optionElement.text; }
      var $state = $('<span><strong>' + optionElement.element.value + '</strong> ' + optionElement.text + '</span>');
      return $state;
    };

  </script>
@endsection


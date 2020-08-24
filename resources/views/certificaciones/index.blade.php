

@extends('layouts.main_gesac')





@section('content')
<!-- [ Main Content ] start -->



    <section class="pcoded-main-container" style="margin-left: 50px !important;">

        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">CURSOS</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Certificaciones</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Habilitacion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ basic-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Busqueda</h5>
                                            <span class="d-block m-t-5">La opcion de habilitacion solo esta disponible para cursos ya impresos no entregados.</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                  <div>
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Ingrese el codigo de curso</label>
                                                          <input type="text" class="form-control input" id="id_curso" name="id_curso" placeholder="Ingrese codigo de curso" required="required">
                                                      </div>
                                                      <a class="btn btn-success" href="javascript:captura();" role="button"><span><i class="fa fa-search"></i></span> Buscar! </a>
                                                      <span id="error" class="text-danger"></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-9 resultado">

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- [ basic-table ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- [ Main Content ] end -->

@endsection

@section('js')

<script type="text/javascript">
    
var resultado = $(".resultado");

function captura(){
  id_curso = $('#id_curso').val();
  var errorSpan = document.getElementById("error");
  if(id_curso=='')
  {
    errorSpan.innerHTML = "Ingresa el codigo de curso";
  }
  else{
    consulta(id_curso);
    errorSpan.innerHTML = "";
  }
}



function habilitar(id_curso, fecha_impr){
  resultado.hide();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('certificaciones.habilitar_entrega')}}",
      data: {
        id_curso: id_curso,
        fecha_impr: fecha_impr
      },
      success: function(dataResult)
      {
        // resultado.show();
        // resultado.html(dataResult);
        consulta(id_curso);
      },
      error: function (error) {
        alert('error; ' + eval(error));
      }
    });
  };

  $('.input').keypress(function (e) {
  if (e.which == 13) {
    captura();
    return false;    //<---- Add this line
  }
});

  function consulta(id_curso){
  resultado.hide();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('certificaciones.busca_curso')}}",
      data: {
        id_curso: id_curso
      },
      success: function(dataResult)
      {
        resultado.show();
        resultado.html(dataResult);
      },
      error: function (error) {
        alert('error; ' + eval(error));
      }
    });
  };

  $('.input').keypress(function (e) {
  if (e.which == 13) {
    captura();
    return false;    //<---- Add this line
  }
});


  </script>

@endsection


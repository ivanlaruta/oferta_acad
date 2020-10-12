
<style type="text/css">
    table.fixed { table-layout:fixed; }
table.fixed td { overflow: hidden; }
</style>

@extends('layouts.main')

@section('content')

<!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Inscripciones Min Edu</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Servicios</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Min Edu</a></li>
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

                                <!-- [ Hover-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>PLANILLA DE INSCRIPCION</h5>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                
                                                <table class="table table-hover table-bordered datatables fixed">
                                                    <col width="10px" />
                                                    <col width="90px" />
                                                    <thead>
                                                        
                                                        <tr>
                                                            <th>Correo</th>
                                                            <th>Mesaje</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($inscritos as $det)
                                                        <tr>
                                                            <td><small>{{$det->email}}</small></td>
                                                            
                                                            <td>
                                                            @if($det->sexo=='M') Estimado: @else Estimada: @endif
                                                            {{strtoupper($det->nombres)}} {{strtoupper($det->paterno)}} {{strtoupper($det->materno)}}
                                                            <br>
                                                            <br>
                                                            De acuerdo a los datos enviados en el formulario de inscripción del Convenio interinstitucional entre el Ministerio de Educación, Deportes y Culturas y la Escuela de Gestión Publica Plurinacional.
                                                            <br>
                                                            usted se inscribió a los siguientes cursos:<br>
                                                            @if($det->ofimatica_subv=='1') <br> - OFIMATICA (SUBVENCIONADO) Bs. 0 @endif
                                                            @if($det->violencia_subv=='1') <br> - PREVENCIÓN DE LA VIOLENCIA (SUBVENCIONADO) Bs. 0 @endif
                                                            @if($det->rel_humanas_subv=='1') <br> - RELACIONES HUMANAS (SUBVENCIONADO) Bs. 0 @endif
                                                            @if($det->violencia_desc=='1') <br> - PREVENCIÓN DE LA VIOLENCIA (15% DE DESCUENTO) Bs. 85  @endif
                                                            @if($det->ley_1178_desc=='1') <br> - LEY Nº 1178 (15% DE DESCUENTO) Bs. 153 @endif
                                                            @if($det->politicas_desc=='1') <br> - POLÍTICAS PÚBLICAS (15% DE DESCUENTO) Bs. 153 @endif
                                                            @if($det->ley_004_desc=='1') <br> - LEY 004 (15% DE DESCUENTO) Bs. 153 @endif
                                                            @if($det->responsabilidad_desc=='1') <br> - RESPONSABILIDAD POR LA FUNCION PUBLICA (15% DE DESCUENTO) Bs. 153 @endif
                                                            @if($det->idioma_desc=='1') <br> - IDIOMA ORIGINARIO {{strtoupper($det->idioma_desc_detalle)}} (15% DE DESCUENTO) Bs. 255 @endif
                                                            <br>

                                                            <p>
                                                                <br>La programación de Cursos de capacitación es el siguiente:
                                                                <br>SUBVENCIONADOS.
                                                                <br>Ofimática (Subvencionado).  12/10/2020 – 01/11/2020
                                                                <br>Prevención de la violencia (Subvencionado).     12/10/2020 – 25/10/2020
                                                                <br>relaciones humanas (Subvencionado).     26/10/2020 – 08/11/2020
                                                                <br>CUROS CON DESCUENTO.
                                                                <br>Políticas Públicas. 12/10/2020 – 25/10/2020
                                                                <br>Ley 1178.   26/10/2020 – 08/11/2020
                                                                <br>Ley 004     09/11/2020 – 22/11/2020
                                                                <br>Responsabilidad por la función Pública      23/11/2020 – 06/12/2020
                                                                <br>Prevención de la violencia      16/11/2020 – 29/11/2020
                                                                <br>Idiomas.        02/11/2020 – 22/11/2020

                                                            </p>    



                                                            </td>     
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            <br><hr>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- [ Hover-table ] end -->

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
 
   var table = $('.datatables').DataTable({
     dom: 'Brt',
     buttons: [{
        extend:'copy',
        title: '',
    }
        ],
     lengthMenu: [[-1], ["TODO"]],
  
   });

</script>

@endsection


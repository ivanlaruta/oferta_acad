  <div class=table-responsive>
    <table class="table table-bordered table-striped table-hover datatable" style="table-layout:fixed;">
        <thead>
            <tr>
                <th style="width: 10%">#ID</th>
                <th style="width: 40%">Curso</th>
                <th style="width: 25%">Estados</th>
                <th style="width: 25%">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estado_cursos as $det)
            <tr>
                <td>{{$det->id_curso}}</td>
                <td style="white-space: normal !important;">
                <b>{{$det->curso}}</b>
                <br>Version: {{$det->ver}}
                <br>Incio de curso: {{date("d/m/Y", strtotime($det->fec_ini_curso))}}
                <br>Participantes <span class="badge badge-secondary">{{$det->cantidad}}</span>
                </td>
                <td>
                  <b>Impresion:</b> 
                  @if($det->cer_impreso==1)
                    <h5><span class="badge badge-success">Si</span> - <small> {{date("d/m/Y", strtotime($det->cer_fec_impresion))}}</small></h5>
                  @else
                    <h5><span class="badge badge-danger">No</span></h5>
                  @endif
                <hr>
                  <b>Disponibilidad de entrega:</b> 
                  @if($det->cer_disponible==1)
                    <h5><span class="badge badge-success">Si</span> - <small> {{date("d/m/Y", strtotime($det->cer_fec_disponible))}}</small></h5>
                  @else
                    <h5><span class="badge badge-danger">No</span></h5>
                  @endif
               
                </td>
                <td>
                  @if($det->cer_impreso==1 && $det->cer_disponible!=1)
                    
                    <!-- <a class="btn btn-success" href="{{ route('Certificaciones.habilitar_entrega',$det->id_curso)}}" role="button">Habilitar Entrega</a> -->

                    <a class="btn btn-success" href="javascript:habilitar({{$det->id_curso}}, {{json_encode($det->cer_fec_impresion)}});" role="button">Habilitar Entrega</a>

                  @else
                    <button type="button" class="btn btn-success" disabled="">Habilitar Entrega</button>
                  @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
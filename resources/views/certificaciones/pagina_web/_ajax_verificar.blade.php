<div class="container php-email-form">



<div class="row">
  <div class="col-md-6">
    <small><i>CP-{{$inscripcion->id_inscripcion}}</i></small>
  </div>
  <div class="col-md-6" style="text-align: right;">
    <small><i>{{$codigo}}</i></small>
  </div>
</div>
<hr>
<br>
<div class="row" >
  <small>Participante:</small>
  <div class="col-md-12" style="text-align: center !important;">
    <h4><i>{{$inscripcion->rel_participante->nombres}} {{$inscripcion->rel_participante->paterno}} {{$inscripcion->rel_participante->materno}}</i></h4>

  </div>
  <br><br>
  <small>{{$inscripcion->rel_curso->rel_tipo->tipo_curso}}:</small>
  <div class="col-md-12" style="text-align: center !important;">
    <h4><i>{{$inscripcion->rel_curso->curso}} </i></h4>
  </div>
</div>
<br>
<hr>
<div class="row">
  <div class="col-md-6">
    <small><strong>Carga horaria:</strong>{{$inscripcion->rel_curso->carga_horaria}} Horas académicas</small>
  </div>
  <div class="col-md-6" style="text-align: right;">
    <small><strong>Emisión:</strong>{{date("d/m/Y", strtotime($inscripcion->cer_fec_impresion))}}</small>
  </div>

  
</div>
<hr>
<p style="text-align: center !important;">
<small>Esta herramienta es solo de consulta.<br>La información  generada NO puede presentarse como documento legal. </small>  
</p>

</div>

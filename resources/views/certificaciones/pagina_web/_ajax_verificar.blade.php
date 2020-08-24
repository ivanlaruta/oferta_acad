<div class="container php-email-form">


  <p>Estimad@: {{$participante->nombres}}</p>            
  <p>La disponibilidad de entrega de sus cursos aprobados se detalla acontinuacion:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Curso</th>
        <th>Disponibilidad de entrega</th>
      </tr>
    </thead>
    <tbody>
    @foreach($inscripcion as $det)
      <tr>
        <td>{{$det->rel_curso->curso}}
        	<p>
				<small><strong>{{$det->rel_curso->rel_tipo->tipo_curso}}</strong></small><br>
				<small><strong>{{$det->rel_curso->rel_area->area_curso}}</strong></small><br>
				<small><strong>Version: </strong>{{$det->rel_curso->version}}</small><br>
				<small><strong>Inicio: </strong>{{date("d/m/Y", strtotime($det->rel_curso->fec_ini_curso))}}</small><br>
        <small>#{{$det->rel_curso->id_curso}}</small>
        	</p>
        </td>
        <td>
          @if($det->cer_disponible == 1)
        	<span class="badge badge-success">DISPONIBLE</span>
          @else
          <span class="badge badge-danger">NO DISPONIBLE</span>
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>

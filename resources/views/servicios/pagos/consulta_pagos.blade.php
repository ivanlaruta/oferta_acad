


@extends('layouts.main_public')

@section('content')
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css"/>

<!--   <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>PAGOS</h1>
      <p><span class="typed" data-typed-items="PARTICIPANTES, PAGOS"></span></p>
    </div>
</section> -->

  <main id="">
    <section id="contact" class="contact">
      <div class="container" style="    max-width: 90%;">

        <div class="section-title">
          <h2>Consulta</h2>
          
        </div>

        <div data-aos="fade-in">

 

                    <div class="table-responsive">
                      <table id="datatable_pago" class="table table-bordered table-hover nowrap">
                        <thead>
                          <tr>
                            <th>ci</th>
                            <th>nombre_alumno</th>
                            <th>curso</th>                            
                            <th>nro_factura</th>                            
                            <th>monto_pagado</th>                            
                            <th>fecha pago</th>                            
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>


      </div>
      </div>
    </section><!-- End Contact Section -->
  </main>
@endsection

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>

<script type="text/javascript">
    


        oTable = $('#datatable_pago').DataTable({

            "language": {
              
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "Buscar en Todo:",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                  },
                  "buttons": {
                      "copyTitle": "Informacion copiada en el portapapeles",
                      "copyKeys": "Pege la informacion en donde lo requiera",
                      "copySuccess": {
                        _: '%d registros copiados',
                        1: '1 registro copiado'
                    }
                  },
              },
            "dom": "Blfrtip",
            "buttons": [ { "extend": 'copy', "text": 'Copiar' }, 'excel'],

            "lengthMenu": [[ 25, 50, 100,-1], [ 25, 50, 100,"TODO"]],
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('pago.res_consulta_pagos')}}",
            "columns": [
                {data: 'ci'},
                {data: 'nombre_alumno'},
                {data: 'curso'},
                {data: 'nro_factura'},
                {data: 'monto_pagado'},
                {data: 'fecha_pago'}
            ]
        });

  </script>

@endsection

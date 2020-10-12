

<?php    
 function services($url)
    {

      $long_url = $url;
    $apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
    $genericAccessToken = '2a4d5d31d4a1e8fadba022d9325c1ceeafdc31eb';

    $data = array(
        'long_url' => $long_url
    );
    $payload = json_encode($data);

    $header = array(
        'Authorization: Bearer ' . $genericAccessToken,
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    );

    $ch = curl_init($apiv4);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    $resultToJson = json_decode($result);

    if (isset($resultToJson->link)) {
        return($resultToJson->link);
    }
    else {
        return('Not found');
    }


    }
?>


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
                                        <h5 class="m-b-10">Oferta academica para Bot Whatsapp</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Servicios</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Oferta</a></li>
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
                                            <h5>OFERTA ACADEMICA</h5>
                                        </div>
                                        <div class="card-block table-border-style">
                                            @foreach($tipos as $det_tipo)
                                            <h4>🎓 *{{$det_tipo->tipo_oferta}}* 🎓</h4>
                                            <div class="table-responsive">
                                              @foreach($cusos as $det_cuso)
                                                @if($det_tipo->tipo_oferta == $det_cuso->tipo_oferta)
                                                <table class="table table-hover table-bordered datatables">
                                                    <thead>
                                                        <tr>
                                                            <th> 
                                                                <strong>  ✅ &nbsp; *{{$det_cuso->curso}}* </strong>
                                                            </th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <br> _{{$det_cuso->area_curso}}_
                                                                <br>  📅 Inicio: {{date("d/m/Y", strtotime($det_cuso->fec_ini_curso))}}
                                                                <br>  ⏰ Horarios: {{$det_cuso->horarios}}
                                                                <br>  💲 Inversion: Bs. {{$det_cuso->costo_curso}}
                                                                <br>  &nbsp;
                                                                <br>  🌐 Para ver mas detalle e inscripcion siga este enlace: ⬇️⬇️⬇️⬇️ 
                                                                <br>  {{services($det_cuso->url_gesac)}}
                                                                <br>  &nbsp;
                                                                <br>  🙋‍♀️🙋‍♂️ Coordinacion: *{{$det_cuso->coordinador}}*
                                                                <br>  📧 Correo:{{$det_cuso->email_infor}}
                                                                @if(!empty($det_cuso->tel_interno))
                                                                <br>  ☎️ Telefono: 2 200353 Int. {{$det_cuso->tel_interno}}
                                                                @endif
                                                                @if(!empty($det_cuso->tel_movil))
                                                                <br>  📱 celular: {{$det_cuso->tel_movil}}
                                                                <br>  📲 Whatsapp: {{services($det_cuso->url_wapp)}}
                                                                @endif
                                                                <br><br>
                                                            </td>     
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <br><hr>
                                                @endif
                                              @endforeach
                                            </div>

                                            @endforeach
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


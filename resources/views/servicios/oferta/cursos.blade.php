@extends('layouts.main_public')

@section('content')
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="{{URL::asset('img/LOGOTIPO_BLANCO.png')}}">
      </div>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="{{ route('cursos')}}"><i class="bx bx-home"></i> <span>OFERTA ACADEMICA</span></a></li>
          @foreach($tipos as $det)
            <li><a target="_parent"  href="#{{$det->tipo_oferta_min}}"><i class="bx bx-right-arrow-alt"></i> <span>{{$det->tipo_oferta}}</span></a></li>
          @endforeach
          <li><a href="https://egpp.gob.bo/"><i class="bx bx-exit"></i> <span>VOLVER A LA PAGINA WEB</span></a></li>
          
        </ul>
      </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>OFERTA ACADEMICA</h1>
      <p><span class="typed" data-typed-items="DIPLOMADOS, CURSOS CORTOS, CURSOS ESPECIALIZADOS, IDIOMAS"></span></p>
    </div>
  </section>

  <main id="main">
  @foreach($tipos as $det_tipo)
    <section id="{{$det_tipo->tipo_oferta_min}}" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{$det_tipo->tipo_oferta}}</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li onclick="filtros('{{$det_tipo->tipo_oferta_min}}','{{$det_tipo->tipo_oferta_min}}')" class="filter-active">TODOS</li>
              @foreach($areas as $det_area)
                  @if($det_tipo->tipo_oferta == $det_area->tipo_oferta)
                      <li onclick="filtros('{{$det_area->tipo_oferta_min}}','{{$det_area->area_curso_min}}')">{{$det_area->area_curso}}</li>
                  @endif
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @foreach($cusos as $det_cuso)
          @if($det_tipo->tipo_oferta == $det_cuso->tipo_oferta)
            <div class="col-lg-4 col-md-6 portfolio-item {{$det_cuso->tipo_oferta_min}} {{$det_cuso->area_curso_min}}">
              <div class="portfolio-cuadro">
                <!-- {{$det_cuso->link_imagen}} -->
                @if($det_cuso->link_imagen!='')
                  <img src="{{$det_cuso->url_imagen}}" class="img-fluid" alt="">
                @else
                  <img src="{{URL::asset('img/generico.png')}}" class="img-fluid" alt="">
                @endif
                <div class="about">
                    <div class="col-lg-12 content">
                      <div class="text-center">
                        <strong> {{$det_cuso->curso}} </strong>
                        <p> <small>{{$det_cuso->area_curso}}</small> </p>  
                      </div>
                      <hr>
                      <div class="row">
                        <ul>
                          <li><i class="fa fa-calendar"></i> <strong>Inicio:</strong> {{date("d/m/Y", strtotime($det_cuso->fec_ini_curso))}}</li>
                          <li><i class="fa fa-clock-o"></i> <strong>Horarios:</strong> {{$det_cuso->horarios}}</li>
                          <li><i class="fa fa-book"></i> <strong>Carga Horaria:</strong> {{$det_cuso->carga_horaria}} Horas</li>
                          <li><i class="fa fa-credit-card"></i> <strong>Inversion:</strong> Bs.  {{$det_cuso->costo_curso}}</li>
                          <small>
                          <li  class="text-danger"><i class="fa fa-calendar fa-small text-danger"></i> <strong>Limite de inscripcion:</strong> {{$det_cuso->fec_fin_preins}}</li>
                          <li><i class="fa fa-user"></i> <strong>Coordinador:</strong> {{$det_cuso->coordinador}}</li>
                          <li><i class="fa fa-at"></i> <strong>Correo:</strong> {{$det_cuso->email_infor}}</li>
                          </small>
                        </ul>
                      </div>
                      <a target="_blank" rel="noopener noreferrer" href="{{$det_cuso->url_gesac}}" class="btn btn-miboton btn-block" role="button">Detalle e Inscripcion</a>
                    </div>
                </div>
              </div>
            </div>
          @endif
        @endforeach
        </div>
      </div>
    </section>

  @endforeach
  </main>
@endsection

@section('js')
  <script type="text/javascript">
      function filtros(a,b) {
        $('.'+a).hide();
        $('.'+a+'.'+b).show();
      }; 
  </script>
@endsection

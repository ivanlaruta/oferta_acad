


@extends('layouts.main_public')

@section('content')

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>CERTIFICACIONES</h1>
      <p><span class="typed" data-typed-items="DISPONIBILIDAD DE ENTREGA"></span></p>
    </div>
</section>

  <main id="">
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Disponibilidad de entrega de certificados</h2>
          <small>Para el caso de cursos, los certificados se generan 14 días después de la conclusión del mismo. En el caso de diplomados dependerá de la disponibilidad de entrega del Ministerio de Educación.</small>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-4 mt-12 mt-lg-0 d-flex align-items-stretch">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
                <div class="form-group">
                  <label for="name">* Carnet de identidad</label> <small> (Por ejemplo: 5789652) </small>
                  <input type="text" name="ci" class="form-control" id="ci" data-rule="minlen:4" data-msg="Porfavor ingrese mas de 4 valores" required="" />
                  <div class="validate"></div>
                </div>
              
              <div class="text-center" onclick="captura();"><button type="submit">Consultar</button></div>
            </form>
          </div>


          <div class="col-lg-7 mt-12 mt-lg-0 d-flex align-items-stretch resultado">

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main>
@endsection

@section('js')
<script type="text/javascript">
    
var resultado = $(".resultado");

function captura(){
  ci = $('#ci').val();
  consulta(ci);
}
  

function consulta(ci){
  resultado.hide();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('certificaciones.ajax_consultar')}}",
      data: {
        ci: ci
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

  </script>
@endsection

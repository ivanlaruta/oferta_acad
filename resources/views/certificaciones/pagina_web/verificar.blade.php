


@extends('layouts.main_public')

@section('content')

<!--   <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>CERTIFICACIONES</h1>
      <p><span class="typed" data-typed-items="VERIFICACIONES"></span></p>
    </div>
</section>
 -->
  <main id="">
    <section id="contact" class="contact">
      <div class="container">

     <!--    <div class="section-title">
          <h2>Verifique la autenticidad de certificados</h2>
          
        </div> -->

        <div class="row" data-aos="fade-in">

          <div class="col-lg-4 mt-12 align-items-stretch">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
                <div class="form-group">
                  <label for="name">* CÓDIGO DE CERTIFICADO</label> <br>  
                  <input type="text" name="codigo" class="form-control" id="codigo" data-rule="minlen:4" data-msg="Porfavor ingrese mas de 4 valores" required="" />
                  <div class="validate"></div>
                  <small><b>Certificados: </b>El código  se encuentra en la parte superior derecha del certificado físico. <br>
                  <b>Diplomas: </b>El código  se encuentra en la parte posterior del certificado físico.  <hr>Ejemplo: X0012345EGPP2020 </small>
                </div>
              
              <div class="text-center" onclick="captura();"><button type="submit">Consultar</button></div>
            </form>
          </div>


          <div class="col-lg-8 mt-12 align-items-stretch resultado">

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
  codigo = $('#codigo').val();
  consulta(codigo);
}
  

function consulta(codigo){
  resultado.hide();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('certificaciones.ajax_verificar')}}",
      data: {
        codigo: codigo
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

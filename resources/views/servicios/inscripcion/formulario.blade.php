@extends('layouts.main_gesac')
@section('content')
<!-- codigo original -->

        <form method="get" action="{{ route('inscripcion.form_save') }}" id="formulario_ini" >
            {{ csrf_field() }}


<div>
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="main-body">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <center>
              <h5 class="page-header">
                <i class="ion ion-university"></i> <b>FORMULARIO DE INSCRIPCIÓN </b>
              </h5>
              </center>
            </div><!-- /.col -->
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <center>
                <!-- <h4><b>Atención!!!</b></h4> -->
                <p style="color:black;"><b>Convenio interinstitucional entre el Ministerio de Educación, Deportes y Culturas y la Escuela de Gestión Publica Plurinacional..
                </b></p>
                <small>Los datos marcados con (*) son obligatorios.</small>
              </center>
            </div><!-- /.col -->
          </div>



          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h5>Datos del/la Participante</h5>
                  </div>
                  <div class="card-body">


<!-- codigo replica -->



                    <div class="box-body" style="display: block;">

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="ci">Nro. Documento de Identidad <span style="color:red">*</span></label>
                          <input type="text" class=":required form-control     vanadium-invalid" name="ci" id="ci" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="exp_depto">Expedido en: <span style="color:red">*</span></label>
                          <select name="exp_depto" class="form-control" id="exp_depto" required="">
                            <option value="" selected="selected">Seleccione el departamento</option>
                            <option value="1">CHUQUISACA</option>
                            <option value="2">LA PAZ</option>
                            <option value="3">COCHABAMBA</option>
                            <option value="4">ORURO</option>
                            <option value="5">POTOSI</option>
                            <option value="6">TARIJA</option>
                            <option value="7">SANTA CRUZ</option>
                            <option value="8">BENI</option>
                            <option value="9">PANDO</option>
                            <option value="26">EXTRANJERO</option>
                            <option value="33">OTROS</option>
                            <option value="34">SIN DEFINIR</option>
                          </select>

                        </div>
                      </div>                      
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="paterno">Apellido Paterno <span style="color:red">*</span></label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="paterno" id="paterno" value="" required="required">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="materno">Apellido Materno <span style="color:red">*</span></label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="materno" id="materno" value="" required="required">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="nombres">Nombres <span style="color:red">*</span></label>
                          <input type="text" style="text-transform: uppercase" class=":required form-control" name="nombres" id="nombres" value="" required="required">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-sm-6">
                        <div class="form-group">
                          <label for="ciudad_vive">Ciudad donde vive</label>
                          <select name="ciudad_vive" class=":required form-control   vanadium-valid" id="ciudad_vive">
                            <option value="" selected="selected">Seleccione la ciudad</option>
                            <option value="376">BE - BAURES</option>
                            <option value="36">BE - BENI</option>
                            <option value="377">BE - EXALTACION</option>
                            <option value="40">BE - GUAYARAMERIN</option>
                            <option value="84">BE - HUACARAJE</option>
                            <option value="83">BE - LORETO</option>
                            <option value="88">BE - MAGDALENA</option>
                            <option value="378">BE - PUERTO SILES</option>
                            <option value="38">BE - REYES</option>
                            <option value="39">BE - RIBERALTA</option>
                            <option value="41">BE - RURRENABAQUE</option>
                            <option value="379">BE - SAN ANDRES</option>
                            <option value="37">BE - SAN BORJA</option>
                            <option value="85">BE - SAN IGNACIO DE MOXOS</option>
                            <option value="87">BE - SAN JAVIER</option>
                            <option value="89">BE - SAN JOAQUIN</option>
                            <option value="380">BE - SAN RAMON</option>
                            <option value="81">BE - SANTA ANA DEL YACUMA</option>
                            <option value="79">BE - TRINIDAD</option>
                            <option value="168">CH - ALCALA</option>
                            <option value="120">CH - AZURDUY</option>
                            <option value="91">CH - CAMARGO</option>
                            <option value="65">CH - CHUQUISACA</option>
                            <option value="173">CH - CULPINA</option>
                            <option value="169">CH - EL VILLAR</option>
                            <option value="132">CH - HUACARETA</option>
                            <option value="175">CH - HUACAYA</option>
                            <option value="166">CH - ICLA</option>
                            <option value="172">CH - INCAHUASI</option>
                            <option value="174">CH - LAS CARRERAS</option>
                            <option value="176">CH - MACHARETI</option>
                            <option value="165">CH - MOJOCOYA</option>
                            <option value="2">CH - MONTEAGUDO</option>
                            <option value="167">CH - PADILLA</option>
                            <option value="161">CH - POROMA</option>
                            <option value="164">CH - PRESTO</option>
                            <option value="134">CH - SAN LUCAS</option>
                            <option value="94">CH - SOPACHUY</option>
                            <option value="1">CH - SUCRE</option>
                            <option value="170">CH - TARABUCO</option>
                            <option value="162">CH - TARVITA</option>
                            <option value="133">CH - TOMINA</option>
                            <option value="99">CH - VILLA ABECIA</option>
                            <option value="139">CH - VILLA CHARCAS</option>
                            <option value="137">CH - VILLA SERRANO</option>
                            <option value="138">CH - VILLA VACA GUZMAN</option>
                            <option value="171">CH - YAMPARAEZ</option>
                            <option value="141">CH - YOTALA</option>
                            <option value="163">CH - ZUDAÑEZ</option>
                            <option value="13">CB - AIQUILE</option>
                            <option value="242">CB - ALALAY</option>
                            <option value="243">CB - ANZALDO</option>
                            <option value="72">CB - ARANI</option>
                            <option value="244">CB - ARBIETO</option>
                            <option value="245">CB - ARQUE</option>
                            <option value="246">CB - AYOPAYA</option>
                            <option value="247">CB - BOLIVAR</option>
                            <option value="126">CB - CAPINOTA</option>
                            <option value="97">CB - CERCADO</option>
                            <option value="248">CB - CHIMORE</option>
                            <option value="249">CB - CLIZA</option>
                            <option value="250">CB - COCAPATA</option>
                            <option value="9">CB - COCHABAMBA</option>
                            <option value="159">CB - COLCAPIRHUA</option>
                            <option value="251">CB - COLOMI</option>
                            <option value="252">CB - CUCHUMUELA</option>
                            <option value="253">CB - ENTRE RIOS</option>
                            <option value="112">CB - MANCOMUNIDAD DEL CONO SUR</option>
                            <option value="15">CB - MIZQUE</option>
                            <option value="254">CB - MOROCHATA</option>
                            <option value="255">CB - OMEREQUE</option>
                            <option value="256">CB - PASARAPA</option>
                            <option value="257">CB - POCONA</option>
                            <option value="258">CB - POJO</option>
                            <option value="259">CB - PUERTO VILLARROEL</option>
                            <option value="70">CB - PUNATA</option>
                            <option value="10">CB - QUILLACOLLO</option>
                            <option value="11">CB - SACABA</option>
                            <option value="260">CB - SACABAMBA</option>
                            <option value="261">CB - SAN BENITO</option>
                            <option value="262">CB - SANTIVAÑEZ</option>
                            <option value="74">CB - SHINAHOTA</option>
                            <option value="263">CB - SICAYA</option>
                            <option value="71">CB - SIPE SIPE</option>
                            <option value="264">CB - TACACHI</option>
                            <option value="265">CB - TAPACARI</option>
                            <option value="266">CB - TARATA</option>
                            <option value="157">CB - TIQUIPAYA</option>
                            <option value="267">CB - TIRAQUE</option>
                            <option value="268">CB - TOCOPAYA</option>
                            <option value="269">CB - TOKO</option>
                            <option value="270">CB - TOLATA</option>
                            <option value="14">CB - TOTORA</option>
                            <option value="271">CB - VACAS</option>
                            <option value="272">CB - VILA VILA</option>
                            <option value="273">CB - VILLA RIVERO</option>
                            <option value="12">CB - VILLA TUNARI</option>
                            <option value="160">CB - VINTO</option>
                            <option value="80">EX - EXTRANJERO</option>
                            <option value="7">LP - ACHACACHI</option>
                            <option value="177">LP - ACHOCALLA</option>
                            <option value="178">LP - ALTO BENI</option>
                            <option value="179">LP - ANCORAIMES</option>
                            <option value="180">LP - APOLO</option>
                            <option value="181">LP - AUCAPATA</option>
                            <option value="142">LP - AYATA</option>
                            <option value="182">LP - AYO AYO</option>
                            <option value="183">LP - BATALLAS</option>
                            <option value="184">LP - CAIROMA</option>
                            <option value="185">LP - CAJUATA</option>
                            <option value="186">LP - CALACOTO</option>
                            <option value="187">LP - CALAMARCA</option>
                            <option value="114">LP - CAQUIAVIRI</option>
                            <option value="5">LP - CARANAVI</option>
                            <option value="188">LP - CATACORA</option>
                            <option value="189">LP - CHARAÑA</option>
                            <option value="190">LP - CHARARILLA</option>
                            <option value="191">LP - CHUA COCANI</option>
                            <option value="96">LP - CHULUMANI</option>
                            <option value="192">LP - CHUMA</option>
                            <option value="194">LP - COLLANA</option>
                            <option value="193">LP - COLQUENCHA</option>
                            <option value="101">LP - COLQUIRI</option>
                            <option value="196">LP - COMANCHE</option>
                            <option value="195">LP - COMBAYA</option>
                            <option value="197">LP - COPACABANA</option>
                            <option value="198">LP - CORIPATA</option>
                            <option value="123">LP - CORO CORO</option>
                            <option value="63">LP - COROICO</option>
                            <option value="124">LP - CURVA</option>
                            <option value="199">LP - DESAGUADERO</option>
                            <option value="4">LP - EL ALTO</option>
                            <option value="200">LP - ESCOMA</option>
                            <option value="203">LP - GUANAY</option>
                            <option value="102">LP - GUAQUI</option>
                            <option value="201">LP - HUARINA</option>
                            <option value="204">LP - HUATAJATA</option>
                            <option value="202">LP - HUMANATA</option>
                            <option value="205">LP - ICHOCA</option>
                            <option value="206">LP - INQUISIVI</option>
                            <option value="207">LP - IRUPANA</option>
                            <option value="208">LP - IXIAMAS</option>
                            <option value="144">LP - JESUS DE MACHACA</option>
                            <option value="125">LP - JUAN JOSE PEREZ</option>
                            <option value="209">LP - LA ASUNTA</option>
                            <option value="210">LP - LAJA</option>
                            <option value="3">LP - LA PAZ</option>
                            <option value="155">LP - LICOMA PAMPA</option>
                            <option value="211">LP - LURIBAY</option>
                            <option value="212">LP - MALLA</option>
                            <option value="213">LP - MAPIRI</option>
                            <option value="214">LP - MECAPACA</option>
                            <option value="215">LP - MOCOMOCO</option>
                            <option value="143">LP - NAZACARA DE PACAJES</option>
                            <option value="216">LP - PALCA</option>
                            <option value="121">LP - PALOS BLANCOS</option>
                            <option value="217">LP - PAPEL PAMPA</option>
                            <option value="8">LP - PATACAMAYA</option>
                            <option value="218">LP - PELECHUCO</option>
                            <option value="219">LP - PUCARANI</option>
                            <option value="220">LP - PUERTO ACOSTA</option>
                            <option value="221">LP - PUERTO CARABUCO</option>
                            <option value="222">LP - PUERTO PEREZ</option>
                            <option value="231">LP - QUIABAYA</option>
                            <option value="232">LP - QUIME</option>
                            <option value="226">LP - SAN ANDRES DE MACHACA</option>
                            <option value="6">LP - SAN BUENA VENTURA</option>
                            <option value="227">LP - SAN PEDRO DE CURAHUARA</option>
                            <option value="228">LP - SAN PEDRO DE TIQUINA</option>
                            <option value="223">LP - SANTIAGO DE CALLAPA</option>
                            <option value="224">LP - SANTIAGO DE HUATA</option>
                            <option value="225">LP - SANTIAGO DE MACHACA</option>
                            <option value="229">LP - SAPAHAQUI</option>
                            <option value="230">LP - SICA SICA</option>
                            <option value="116">LP - SORATA</option>
                            <option value="233">LP - TACACOMA</option>
                            <option value="234">LP - TARACO</option>
                            <option value="235">LP - TEOPONTE</option>
                            <option value="147">LP - TIAWANACU</option>
                            <option value="236">LP - TIPUANI</option>
                            <option value="237">LP - TITO YUPANQUI</option>
                            <option value="238">LP - UMALA</option>
                            <option value="66">LP - VIACHA</option>
                            <option value="239">LP - WALDO BALLIVIAN</option>
                            <option value="240">LP - YACO</option>
                            <option value="241">LP - YANACACHI</option>
                            <option value="274">OR - ANDAMARCA</option>
                            <option value="275">OR - ANTEQUERA</option>
                            <option value="276">OR - BELEN DE ANDAMARCA</option>
                            <option value="17">OR - CARACOLLO</option>
                            <option value="131">OR - CHALLAPATA</option>
                            <option value="277">OR - CHIPAYA</option>
                            <option value="278">OR - CHOQUECOTA</option>
                            <option value="279">OR - COIPASA</option>
                            <option value="280">OR - CORQUE</option>
                            <option value="281">OR - CRUZ DE MACHACAMARCA</option>
                            <option value="282">OR - CURAHUARA DE CARANGAS</option>
                            <option value="283">OR - EL CHORRO</option>
                            <option value="284">OR - ESCARA</option>
                            <option value="285">OR - ESMERALDA</option>
                            <option value="286">OR - EUCALIPTUS</option>
                            <option value="287">OR - HUACHACALLA</option>
                            <option value="69">OR - HUANUNI</option>
                            <option value="288">OR - HUAYLLAMARCA</option>
                            <option value="289">OR - LA RIVERA</option>
                            <option value="290">OR - MACHACAMARCA</option>
                            <option value="16">OR - ORURO</option>
                            <option value="291">OR - PAMPA AULLAGAS</option>
                            <option value="292">OR - PARI O SORACACHI</option>
                            <option value="293">OR - PAZÑA</option>
                            <option value="68">OR - POOPO</option>
                            <option value="294">OR - QUILLACAS</option>
                            <option value="295">OR - SABAYA</option>
                            <option value="296">OR - SALINAS DE GARCI MENDOZA</option>
                            <option value="130">OR - SANTIAGO DE HUARI</option>
                            <option value="297">OR - TODOS SANTOS</option>
                            <option value="298">OR - TOLEDO</option>
                            <option value="299">OR - TOTORA</option>
                            <option value="300">OR - TURCO</option>
                            <option value="301">OR - YUNGUYO DEL LITORAL</option>
                            <option value="64">OT - NACIONAL</option>
                            <option value="393">OT - OTROS</option>
                            <option value="394">OT - SIN DEFINIR</option>
                            <option value="383">PA - BELLA FLOR</option>
                            <option value="382">PA - BOLPEBRA</option>
                            <option value="42">PA - COBIJA</option>
                            <option value="387">PA - EL SENA</option>
                            <option value="385">PA - FILADELFIA</option>
                            <option value="389">PA - INGAVI</option>
                            <option value="390">PA - NUEVA ESPERANZA</option>
                            <option value="381">PA - PORVENIR</option>
                            <option value="43">PA - PUERTO GONZALO MORENO</option>
                            <option value="44">PA - PUERTO RICO</option>
                            <option value="386">PA - SAN LORENZO</option>
                            <option value="384">PA - SAN PEDRO</option>
                            <option value="388">PA - SANTA ROSA DEL ABUNÁ</option>
                            <option value="392">PA - SANTOS MERCADO</option>
                            <option value="391">PA - VILLA NUEVA</option>
                            <option value="302">PO - ACASIO</option>
                            <option value="303">PO - ARAMPAMPA</option>
                            <option value="108">PO - ATOCHA</option>
                            <option value="153">PO - BETANZOS</option>
                            <option value="140">PO - CAIZA "D"</option>
                            <option value="304">PO - CARIPUYO</option>
                            <option value="305">PO - CHAQUI</option>
                            <option value="92">PO - CHAYANTA</option>
                            <option value="306">PO - CHUQUIHUTA AYLLU JUCUMANI</option>
                            <option value="307">PO - CKOCHAS</option>
                            <option value="308">PO - COLCHA K</option>
                            <option value="309">PO - COLQUECHACA</option>
                            <option value="104">PO - COTAGAITA</option>
                            <option value="20">PO - LLALLAGUA</option>
                            <option value="310">PO - LLICA</option>
                            <option value="311">PO - MOJINETE</option>
                            <option value="312">PO - OCURI</option>
                            <option value="146">PO - POCOATA</option>
                            <option value="127">PO - POCOATA</option>
                            <option value="313">PO - PORCO</option>
                            <option value="18">PO - POTOSI</option>
                            <option value="90">PO - PUNA</option>
                            <option value="314">PO - RAVELO</option>
                            <option value="315">PO - SACACA</option>
                            <option value="316">PO - SAN AGUSTIN</option>
                            <option value="317">PO - SAN ANTONIO DE ESMORUCO</option>
                            <option value="95">PO - SAN PABLO</option>
                            <option value="318">PO - SAN PEDRO</option>
                            <option value="319">PO - SAN PEDRO DE QUEMES</option>
                            <option value="320">PO - TACOBAMBA</option>
                            <option value="321">PO - TAHUA</option>
                            <option value="322">PO - TINGUIPAYA</option>
                            <option value="323">PO - TOMAVE</option>
                            <option value="324">PO - TORO TORO</option>
                            <option value="62">PO - TUPIZA</option>
                            <option value="22">PO - UNCIA</option>
                            <option value="122">PO - URMIRI</option>
                            <option value="19">PO - UYUNI</option>
                            <option value="23">PO - VILLAZON</option>
                            <option value="325">PO - VITICHI</option>
                            <option value="326">PO - YOCALLA</option>
                            <option value="32">SC - ASCENSION DE GUARAYOS</option>
                            <option value="331">SC - AYACUCHO</option>
                            <option value="332">SC - BOYUIBE</option>
                            <option value="333">SC - BUENA VISTA</option>
                            <option value="334">SC - CABEZAS</option>
                            <option value="34">SC - CAMIRI</option>
                            <option value="335">SC - CARMEN RIVERO TORREZ</option>
                            <option value="336">SC - CHARAGUA</option>
                            <option value="337">SC - COLPA BELGICA</option>
                            <option value="338">SC - COMARAPA</option>
                            <option value="339">SC - CONCEPCION</option>
                            <option value="340">SC - COTOCA</option>
                            <option value="341">SC - CUATRO CAÑADAS</option>
                            <option value="342">SC - CUEVO</option>
                            <option value="343">SC - EL PUENTE</option>
                            <option value="344">SC - EL TORNO</option>
                            <option value="345">SC - FERNANDEZ ALONSO</option>
                            <option value="346">SC - GENERAL SAAVEDRA</option>
                            <option value="347">SC - GUTIERREZ</option>
                            <option value="156">SC - LA GUARDIA</option>
                            <option value="348">SC - LAGUNILLAS</option>
                            <option value="349">SC - MAIRANA</option>
                            <option value="350">SC - MINEROS</option>
                            <option value="30">SC - MONTERO</option>
                            <option value="351">SC - MORO MORO</option>
                            <option value="352">SC - OKINAWA I</option>
                            <option value="353">SC - PAILON</option>
                            <option value="354">SC - PAMPA GRANDE</option>
                            <option value="93">SC - PORTACHUELO</option>
                            <option value="355">SC - POSTRER VALLE</option>
                            <option value="356">SC - PUCARA</option>
                            <option value="357">SC - PUERTO QUIJARRO</option>
                            <option value="33">SC - PUERTO SUAREZ</option>
                            <option value="358">SC - QUIRUSILLAS</option>
                            <option value="359">SC - ROBORE</option>
                            <option value="360">SC - SAIPINA</option>
                            <option value="361">SC - SAMAIPATA</option>
                            <option value="362">SC - SAN ANTONIO DE LOMERIO</option>
                            <option value="363">SC - SAN CARLOS</option>
                            <option value="158">SC - SAN IGNACIO DE VELASCO</option>
                            <option value="364">SC - SAN JAVIER</option>
                            <option value="365">SC - SAN JOSE DE CHIQUITOS</option>
                            <option value="366">SC - SAN JUAN</option>
                            <option value="367">SC - SAN JULIAN</option>
                            <option value="368">SC - SAN MATIAS</option>
                            <option value="369">SC - SAN MIGUEL</option>
                            <option value="370">SC - SAN PEDRO DE BUENA VISTA</option>
                            <option value="371">SC - SAN RAFAEL DE VELASCO</option>
                            <option value="372">SC - SAN RAMON</option>
                            <option value="29">SC - SANTA CRUZ DE LA SIERRA</option>
                            <option value="373">SC - SANTA ROSA DEL SARA</option>
                            <option value="374">SC - TRIGAL</option>
                            <option value="375">SC - URUBICHA</option>
                            <option value="107">SC - VALLEGRANDE</option>
                            <option value="31">SC - WARNES</option>
                            <option value="35">SC - YAPACANI</option>
                            <option value="26">TJ - BERMEJO</option>
                            <option value="328">TJ - CARAPARI</option>
                            <option value="119">TJ - EL PUENTE</option>
                            <option value="28">TJ - ENTRE RIOS</option>
                            <option value="327">TJ - PADCAYA</option>
                            <option value="73">TJ - SAN LORENZO</option>
                            <option value="24">TJ - TARIJA</option>
                            <option value="329">TJ - URIONDO</option>
                            <option value="27">TJ - VILLAMONTES</option>
                            <option value="25">TJ - YACUIBA</option>
                            <option value="330">TJ - YUNCHARA</option>
                          </select>
                          <!--<input type="text" style="text-transform: uppercase" class="form-control" name="ciudad_vive" id="ciudad_vive" value="<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Array to string conversion</p>
<p>Filename: frontend/form_inscripcion_view.php</p>
<p>Line Number: 92</p>

</div>Array">-->
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-sm-6">
                        <div class="form-group">
                          <label for="direccion_vive">Dirección donde vive</label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="direccion_vive" id="direccion_vive" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="lugar_nacimiento">Lugar de Nacimiento (Departamento) <span style="color:red">*</span></label>
                          <select name="lugar_nacimiento" class="form-control" id="lugar_nacimiento" required="">
                            <option value="" selected="selected">Seleccione la ciudad</option>
                            <option value="1">CHUQUISACA</option>
                            <option value="3">LA PAZ</option>
                            <option value="9">COCHABAMBA</option>
                            <option value="16">ORURO</option>
                            <option value="18">POTOSI</option>
                            <option value="24">TARIJA</option>
                            <option value="29">SANTA CRUZ</option>
                            <option value="36">BENI</option>
                            <option value="42">PANDO</option>
                            <option value="80">EXTRANJERO</option>
                          </select>
                          <!--<input type="text" style="text-transform: uppercase" class=":required form-control" name="lugar_nacimiento" id="lugar_nacimiento" value="<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Array to string conversion</p>
<p>Filename: frontend/form_inscripcion_view.php</p>
<p>Line Number: 108</p>

</div>Array">-->
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="fec_nacimiento">Fecha de Nacimiento <span style="color:red">*</span></label>
                          <input type="date" class=":required form-control       vanadium-invalid" name="fec_nacimiento" id="fec_nacimiento" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="sexo">Sexo <span style="color:red">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <br>
                            <input type="radio" name="sexo" id="optionsRadios1" value="M" required> Masculino
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="sexo" id="optionsRadios2" value="F"> Femenino
                            <br>
                                                    </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="email">Email personal <span style="color:red">*</span></label>
                          <input type="text" class=":required form-control     vanadium-invalid" name="email" id="email" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2">
                        <div class="form-group">
                          <label for="tel_fijo">Teléfono Fijo</label>
                          <input type="text" class="form-control" name="tel_fijo" id="tel_fijo" value="">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-2">
                        <div class="form-group">
                          <label for="tel_movil">Teléfono Móvil <span style="color:red">*</span></label>
                          <input type="text" class=":integer :min_length;7 :required form-control     vanadium-invalid" name="tel_movil" id="tel_movil" value="" required="required"><span class="vanadium-advice vanadium-invalid">Requerido.</span><span class="vanadium-advice vanadium-invalid">Valor debe ser como minimo <span class="vanadium-message-value">7</span> caracteres.</span>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="profesion">Profesión</label>
                          <select name="profesion" class="form-control" id="profesion">
                            <option value="" selected="selected">Seleccione la Profesión</option>
                            <option value="125">ACRIMENSURA</option>
                            <option value="39">AGRICULTOR (YAPUCHIRI)</option>
                            <option value="67">DISEÑADOR GRÁFICO</option>
                            <option value="0">ESTUDIANTE</option>
                            <option value="95">FUNCIONARIO DEL BANCO</option>
                            <option value="115">GASTRÓNOMO</option>
                            <option value="131">GESTOR PLATAFORMA VIRTUAL</option>
                            <option value="32">INDEPENDIENTE</option>
                            <option value="132">ING. CIVIL</option>
                            <option value="124">ING. FINANCIERA/O</option>
                            <option value="22">ING. FORESTAL</option>
                            <option value="127">ING./LIC. DESARROLLO RURAL SOSTENIBLE</option>
                            <option value="49">ING./LIC./TS AERONAUTICO</option>
                            <option value="21">ING./LIC./TS AGRÓNOMO</option>
                            <option value="20">ING./LIC./TS ALIMENTOS</option>
                            <option value="114">ING./LIC/TS AMBIENTAL</option>
                            <option value="112">ING./LIC./TS AUTOMOTRIZ</option>
                            <option value="19">ING./LIC./TS COMERCIAL</option>
                            <option value="6">ING./LIC./TS CONSTRUCCIÓN CIVIL</option>
                            <option value="113">ING./LIC./TS ELÉCTRICO</option>
                            <option value="83">ING./LIC./TS ELECTROMECÁNICO</option>
                            <option value="5">ING./LIC./TS ELECTRÓNICA</option>
                            <option value="16">ING./LIC./TS FÍSICO</option>
                            <option value="77">ING./LIC./TS INDUSTRIAL</option>
                            <option value="110">ING./LIC./TS MARKETING</option>
                            <option value="43">ING./LIC./TS MECÁNICO</option>
                            <option value="80">ING./LIC./TS METALURGIA</option>
                            <option value="27">ING./LIC./TS PETROLERO</option>
                            <option value="116">ING./LIC./TS PRODUCCIÓN</option>
                            <option value="17">ING./LIC./TS QUÍMICO</option>
                            <option value="7">ING./LIC./TS SISTEMAS INFORMÁTICOS</option>
                            <option value="117">ING./LIC./TS SONIDO</option>
                            <option value="9">ING./LIC./TS TELECOMUNICACIONES</option>
                            <option value="88">ING./LIC./TS TOPÓGRAFO</option>
                            <option value="30">ING. TECNOLOGIA ESPACIAL</option>
                            <option value="4">LIC. ADMINISTRACION DE EMPRESAS</option>
                            <option value="62">LIC. ANTROPOLOGÍA</option>
                            <option value="14">LIC. ARQUITECTURA</option>
                            <option value="1">LIC. AUDITORIA</option>
                            <option value="85">LIC. BIBLIOTECOLOGÍA</option>
                            <option value="74">LIC. BIOQUÍMICA</option>
                            <option value="18">LIC. CIENCIAS DE LA EDUCACION</option>
                            <option value="130">LIC. CIENCIAS JURIDICAS</option>
                            <option value="129">LIC. CIENCIAS POLICIALES</option>
                            <option value="111">LIC. CIENCIAS SOCIALES</option>
                            <option value="118">LIC. COMERCIO EXTERIOR</option>
                            <option value="52">LIC. COMUNICACIÓN SOCIAL</option>
                            <option value="2">LIC. DERECHO</option>
                            <option value="3">LIC. ECONOMÍA</option>
                            <option value="75">LIC. EN LABORATORIO CLÍNICO</option>
                            <option value="15">LIC. ESTADISTICA</option>
                            <option value="126">LIC. GESTIÓN SOCIAL DEL DESARROLLO LOCAL</option>
                            <option value="96">LIC. IDIOMAS</option>
                            <option value="128">LIC. INFORMÁTICA</option>
                            <option value="10">LIC. MEDICINA</option>
                            <option value="119">LIC. MERCADOTECNIA</option>
                            <option value="120">LIC. NUTRICIÓN</option>
                            <option value="121">LIC. PARVULARIA</option>
                            <option value="65">LIC. PEDAGOGÍA</option>
                            <option value="56">LIC. POLITOLOGO</option>
                            <option value="55">LIC. PSICOLOGIA</option>
                            <option value="123">LIC. RELACIONES INTERNACIONALES</option>
                            <option value="76">LIC. SOCIOLOGÍA</option>
                            <option value="71">LIC. TRABAJO SOCIAL</option>
                            <option value="109">LIC./TS BIOLOGÍA</option>
                            <option value="13">LIC./TS CONTADURÍA PÚBLICA</option>
                            <option value="11">LIC./TS ENFERMERÍA</option>
                            <option value="12">LIC./TS ODONTOLOGIA</option>
                            <option value="97">LIC. TURISMO &amp; HOTELERÍA</option>
                            <option value="23">LIC. VETERINARIA</option>
                            <option value="45">METEREOLOGO</option>
                            <option value="61">MILITAR</option>
                            <option value="36">OTROS</option>
                            <option value="48">PILOTO DE AVIACIÓN</option>
                            <option value="24">PROFESOR</option>
                            <option value="68">RECEPCIONISTA</option>
                            <option value="31">SECRETARIA</option>
                            <option value="34">SERVIDOR/A PÚBLICO</option>
                            <option value="122">SIN DEFINIR</option>
                          </select>

                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="empresa">Empresa/Institución donde trabaja</label>
                          <select name="empresa" class="form-control" id="empresa">
                            <option value="" selected="selected">Seleccione la empresa</option>
                            
                            <option value="1">MINISTERIO DE EDUCACION - MINEDU</option>
                            
                          </select>

                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="cargo">Cargo actual</label>
                          <select name="cargo" class="form-control" id="cargo">
                      <option value="" selected="selected">Seleccione el Cargo</option>
                      <option value="195">ADMINISTRACIÓN FINANCIERA</option>
                      <option value="202">ADMINISTRATIVO</option>
                      <option value="63">ALCALDE</option>
                      <option value="12">ANALISTA</option>
                      <option value="48">ASAMBLEISTA</option>
                      <option value="3">ASESOR/A GENERAL</option>
                      <option value="31">ASISTENTE</option>
                      <option value="116">AUDITOR INTERNO</option>
                      <option value="196">AUTORIDAD ORIGINARIA</option>
                      <option value="132">CHOFER</option>
                      <option value="64">CONCEJAL</option>
                      <option value="36">CONSULTOR</option>
                      <option value="65">CONTADOR</option>
                      <option value="160">COORDINADOR</option>
                      <option value="2">DIRECTOR/A</option>
                      <option value="62">DIRIGENTE</option>
                      <option value="201">DOCENTE</option>
                      <option value="169">ENCARGADO DE LIMPIEZA</option>
                      <option value="59">ENCARGADO DE PERSONAL</option>
                      <option value="134">ESPECIALISTA</option>
                      <option value="56">GERENTE</option>
                      <option value="205">GESTOR PLATAFORMA VIRTUAL</option>
                      <option value="0">INDEPENDIENTE</option>
                      <option value="5">JEFE DE UNIDAD O AREA</option>
                      <option value="1">MAXIMA AUTORIDAD EJECUTIVA</option>
                      <option value="200">MINISTRO/A</option>
                      <option value="29">NO CUENTA CON CARGO ACTUAL</option>
                      <option value="71">OTROS</option>
                      <option value="197">PARLAMENTARIO/A SUPRAESTATAL</option>
                      <option value="119">PASANTE</option>
                      <option value="187">PRESIDENTE</option>
                      <option value="17">PROFESIONAL</option>
                      <option value="49">PROFESOR/A O DOCENTE</option>
                      <option value="55">RECAUDADOR/A</option>
                      <option value="142">RECEPCIONISTA</option>
                      <option value="199">SECRETARIA</option>
                      <option value="130">SERENO</option>
                      <option value="198">SERVIDOR/A PUBLICO</option>
                      <option value="38">SIN DEFINIR</option>
                      <option value="61">SUPERVISOR (A)</option>
                      <option value="21">TECNICO</option>
                      <option value="204">TRABAJADORA SOCIAL</option>
                      <option value="180">VICEMINISTRO/A</option>
                      <option value="203">VICEPRESIDENTE</option>
                      </select>
                          <!--<input type="text" style="text-transform: uppercase" class="form-control" name="cargo" id="cargo" value="<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Array to string conversion</p>
<p>Filename: frontend/form_inscripcion_view.php</p>
<p>Line Number: 186</p>

</div>Array">-->
                        </div>
                      </div>
                      <!-- 
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                          <label for="nivel_cargo">Nivel del Cargo</label>
                          <input type="text" style="text-transform: uppercase" class="form-control" name="nivel_cargo" id="nivel_cargo" value="0">
                        </div>
                      </div>
                       -->
                    </div>
<!-- 
                    <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4">
                        <img src="http://webdisk.cursos.egpp.gob.bo/sisacademico/captcha/1600693088.2959.jpg" width="200" height="60" style="border:0;" alt=" " id="img-captcha"> <a href="#" id="new_captcha"> <i class="fa fa-refresh"></i> Refrescar Código</a>
                        <br>
                        <br>
                        <label for="captcha_cod">Ingresar el Código de la imagen <span style="color:red">*</span></label>
                        <input type="text" class=":required form-control" name="captcha_cod" id="captcha_cod" placeholder="Ingresar el Código de la imagen " value="">
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4">
                    </div>
                    
                  </div>

                  <div class="box-footer" style="display: block;">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </div> -->
                
              </div>


<!-- fin codigo replica -->

                  </div>
                </div>  
              </div>
            </div>
          </div>


          <div class="page-wrapper">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Cursos <b>subvencionados</b> por el Ministerio de Educación, Deportes y Culturas <b>(GRATUITOS)</b></h5>
                  </div>
                  <div class="card-body">
                    <p class="text-muted m-b-30">
                        Puede seleccionar una de las siguientes opciones:
                    </p>
                    <div class="table-responsive">

                    <table class="table"> 
                      <tr>
                        <th>Cursos</th>
                        <th align="right">Costo</th>
                      </tr>
                      <tr>
                        <td>
                          <!-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch_idioma1" name="check[]" value="idioma_subv" onclick="calc();">
                            <label class="custom-control-label" for="ch_idioma1">IDIOMA ORIGINARIO</label>
                            <select class="form-control"  id="select_idioma1" name="select_idioma1">
                              <option value="Aimara">Aimara</option>
                              <option value="Quechua">Quechua</option>
                            </select>
                          </div> -->
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input mi_check" id="ch_ofimatica" name="check[]" value="ofimatica_subv">
                            <label class="custom-control-label" for="ch_ofimatica">OFIMATICA</label>
                            
                          </div>
                        </td> 
                        <!-- <td align="right"><label class="lbl_precios" id="lbl_precio_idioma1">Bs. 00</label>  </td>   -->
                        <td align="right"><label class="lbl_precios" id="lbl_ofimatica">Bs. 00</label>  </td>  

                      </tr>
                      <tr>  
                        <td>
                          <!-- <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input mi_check" id="ch_combo" name="check[]" value="combo_subv">
                              <label class="custom-control-label" for="ch_combo">- LEY 004 <br>- RESPONSABILIDAD POR LA FUNCION PUBLICA</label>
                          </div> -->
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input mi_check" id="ch_combo2" name="check[]" value="combo2_subv">
                              <label class="custom-control-label" for="ch_combo2">- PREVENCIÓN DE LA VIOLENCIA <br>- RELACIONES HUMANAS</label>
                          </div>
                        </td>
                        <!-- <td align="right"><label class="lbl_precios" id="lbl_precio_combo">Bs. 00</label>  </td>   -->
                        <td align="right"><label class="lbl_precios" id="lbl_precio_combo2">Bs. 00</label>  </td>  
                      </tr>                    
                    </table>
                    </div>

                    
                    <div class="alert alert-dark" role="alert">
                       <strong>Recuerde!</strong> Para que se haga efectiva la subvención,terminado el curso el participante debe presentar el certificado de aprobación al área de recursos humanos del Ministerio de Educación, Deportes y Culturas.
                    </div>




                  </div>
                </div>  
              </div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Cursos Con 15% descuento</h5>
                  </div>
                  <div class="card-body">
                     <p class="text-muted m-b-30">
                        Puede seleccionar uno o varios:
                    </p>
                    <div class="table-responsive">
                        
                    
                    <table class="table"> 
                      <tr>
                        <th>Cursos</th>
                        <th align="right">Costo</th>
                      </tr>
                      <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_violencia" name="check[]" value="violencia">
                                <label class="custom-control-label" for="ch_violencia">PREVENCIÓN DE LA VIOLENCIA</label>
                            </div>
                        </td> 
                        <td align="right"><label class="lbl_precios" id="lbl_precio_violencia">Bs. 85</label>  </td>  
                      </tr>
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_1178" name="check[]" value="1178">
                                <label class="custom-control-label" for="ch_1178">LEY Nº 1178</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_1178">Bs. 153</label>  </td>  
                      </tr>  
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_pp" name="check[]" value="pp">
                                <label class="custom-control-label" for="ch_pp">POLÍTICAS PÚBLICAS</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_pp">Bs. 153</label>  </td>  
                      </tr>  
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_004" name="check[]" value="004">
                                <label class="custom-control-label" for="ch_004">LEY 004</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_004">Bs. 153</label>  </td>  
                      </tr>  
                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_responsabilidad" name="check[]" value="responsabilidad">
                                <label class="custom-control-label" for="ch_responsabilidad">RESPONSABILIDAD POR LA FUNCION PUBLICA</label>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_responsabilidad">Bs. 153</label>  </td>  
                      </tr>


                      <tr>  
                        <td>
                            <div class="custom-control custom-checkbox div_idioma2">
                                <input type="checkbox" class="custom-control-input mi_check" id="ch_idioma2" name="check[]" value="idioma_desc">
                                <label class="custom-control-label" for="ch_idioma2">IDIOMA ORIGINARIO</label>
                                <select class="form-control "  data-width="50%" id="select_idioma2" name="select_idioma2">
                                    <option value="Aimara">Aimara</option>
                                    <option value="Quechua">Quechua</option>
                                    </select>
                            </div>
                        </td>
                        <td align="right"><label class="lbl_precios" id="lbl_precio_idioma2">Bs. 255</label>  </td>  
                      </tr>                    
                    </table>
                    </div>



                  </div>
                </div>  
              </div>


            </div>
          </div> 

          <div class="" align="center">
              <small>Por favor revise sus datos antes de inscribirse.</small><br>
              <button type="submit" class="btn btn-primary btn-lg">INSCRIPCIÓN ... <span class="badge badge-light" id="precio_fin" style="font-size: 15px;">Bs.0</span></button>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</form>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro Exitoso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Gracias por inscribirse, Revisaremos su información y le enviaremos su hoja de inscripción en los próximos días. Por favor esté atento a su correo.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection
@section('js')

@if(!session('mensaje')==null)
    <script type="text/javascript"> 
        var mensaje='{{session('mensaje')}}';

        $('#exampleModalCenter').modal('show'); 
         
    </script>>    
@endif﻿

<script type="text/javascript">
var precio = 0.0;
var monto1=85.0;
var monto2=153.0;
var monto3=255.0;


    function calc_precio(monto,operacion){
        if(operacion == 'sum'){
            precio=precio+monto;
        }
        else{
            precio=precio-monto;
        }
          document.getElementById('precio_fin').innerHTML ='Bs.'+ precio;
    }
    
    inicio();

    function inicio() {
        $(".mi_check").prop("checked", false);
        $("#select_idioma1").attr("disabled", true);
        $(".lbl_precios").hide();
        document.getElementById('precio_fin').innerHTML = 'Bs.0';
    };

    function deshabilita_combo() {
        $("#ch_combo").prop("checked", false);
        $("#lbl_precio_combo").hide();
    };

    function habilita_combo() {
        $("#lbl_precio_combo").show();
    };


    function deshabilita_combo2() {
        $("#ch_combo2").prop("checked", false);
        $("#lbl_precio_combo2").hide();
    };

    function habilita_combo2() {
        $("#lbl_precio_combo2").show();
    };

    function habilita_ofimatica_subv() {
        
        $("#lbl_ofimatica").show();
    };

    function deshabilita_ofimatica_subv() {
        $("#ch_ofimatica").prop("checked", false);
        $("#lbl_ofimatica").hide();
    };


    function habilita_idioma_subv() {
        $("#select_idioma1").removeAttr("disabled");
        $("#lbl_precio_idioma1").show();
    };

    function deshabilita_idioma_subv() {
        $("#ch_idioma1").prop("checked", false);
        $("#select_idioma1").attr("disabled", true);
        $("#lbl_precio_idioma1").hide();
    };

    function habilita_idioma_desc() {
        $("#select_idioma2").removeAttr("disabled");
        $("#lbl_precio_idioma2").show();
    };

    function deshabilita_idioma_desc() {
        $("#ch_idioma2").prop("checked", false);
        $("#select_idioma2").attr("disabled", true);
        $("#lbl_precio_idioma2").hide();
    };

    function habilita_1178() {
        $("#lbl_precio_1178").show();
    }; 

    function deshabilita_1178() {
        $("#lbl_precio_1178").hide();
    };

   function habilita_pp() {
        $("#lbl_precio_pp").show();
    }; 

    function deshabilita_pp() {
        $("#lbl_precio_pp").hide();
    };

   function habilita_violencia() {
        $("#lbl_precio_violencia").show();
    }; 

    function deshabilita_violencia() {
        $("#ch_violencia").prop("checked", false);
        $("#lbl_precio_violencia").hide();
    };

    function habilita_004() {
        $("#lbl_precio_004").show();
    }; 

    function deshabilita_004() {
        $("#ch_004").prop("checked", false);
        $("#lbl_precio_004").hide();
    };

    function habilita_responsabilidad() {
        $("#lbl_precio_responsabilidad").show();
    };

    function deshabilita_responsabilidad() {
        $("#ch_responsabilidad").prop("checked", false);
        $("#lbl_precio_responsabilidad").hide();
    };

// IDIOMA SUBVENCION
$('#ch_idioma1').click(function() {
  if ($(this).is(':checked')) {
      if ($('#ch_idioma2').is(':checked')) {
         calc_precio(monto3,'rest');
      }
    deshabilita_combo();
    habilita_idioma_subv();
    deshabilita_idioma_desc();
  }
  else{
    deshabilita_idioma_subv();

  }

});

// OFIMATICA SUBVENCION

$('#ch_ofimatica').click(function() {
  if ($(this).is(':checked')) {
    habilita_ofimatica_subv();
    deshabilita_combo2();
  }
  else{
    deshabilita_ofimatica_subv();
  }
});


// COMBO
$('#ch_combo').click(function() {
  if ($(this).is(':checked')) {
    if ($('#ch_004').is(':checked')) {
         calc_precio(monto2,'rest');
      }
    if ($('#ch_responsabilidad').is(':checked')) {
         calc_precio(monto2,'rest');
      }
    habilita_combo();
    deshabilita_idioma_subv(); 
    deshabilita_004();
    deshabilita_responsabilidad();
  }
  else{
    deshabilita_combo();
  }
});



// COMBO2
$('#ch_combo2').click(function() {
  if ($(this).is(':checked')) {
    if ($('#ch_violencia').is(':checked')) {
         calc_precio(monto1,'rest');
      }
  
    habilita_combo2();
    deshabilita_ofimatica_subv(); 
    deshabilita_violencia();
  }
  else{
    deshabilita_combo2();
  }
});



$('#ch_violencia').click(function() {
  if ($(this).is(':checked')) {
    habilita_violencia();
    deshabilita_combo2();
    calc_precio(monto1,'sum');
  }
  else{
    deshabilita_violencia();
    calc_precio(monto1,'rest');
  }
});



$('#ch_1178').click(function() {
  if ($(this).is(':checked')) {
    habilita_1178();
    calc_precio(monto2,'sum');
  }
  else{
    deshabilita_1178();
    calc_precio(monto2,'rest');
  }
});

$('#ch_pp').click(function() {
  if ($(this).is(':checked')) {
    habilita_pp();
    calc_precio(monto2,'sum');

  }
  else{
    deshabilita_pp();
    calc_precio(monto2,'rest');
  }
});

$('#ch_004').click(function() {
  if ($(this).is(':checked')) {
    habilita_004();
    deshabilita_combo();
    calc_precio(monto2,'sum');
  }
  else{
    deshabilita_004();
    calc_precio(monto2,'rest');
  }
});

$('#ch_responsabilidad').click(function() {
  if ($(this).is(':checked')) {
    habilita_responsabilidad();
    deshabilita_combo();
    calc_precio(monto2,'sum');
  }
  else{
    deshabilita_responsabilidad();
    calc_precio(monto2,'rest');
  }
});

// IDIOMA DESCUENTO
$('#ch_idioma2').click(function() {
  if ($(this).is(':checked')) {
    habilita_idioma_desc();
    deshabilita_idioma_subv();
    calc_precio(monto3,'sum');
  }
  else{
    deshabilita_idioma_desc();
    calc_precio(monto3,'rest');
  }
});



(function() {
    function addValidation(checkboxes) {
        const firstCheckbox = getFirstCheckbox(checkboxes);
    
        if (firstCheckbox) {
            for (let i = 0; i < checkboxes.length; i++) {
                checkboxes[i].addEventListener('change', function() {
                    checkValidity(checkboxes, firstCheckbox);
                });
            }

            checkValidity(checkboxes, firstCheckbox);
        }
    }
    
    function getFirstCheckbox(checkboxes) {
        return checkboxes.length > 0 ? checkboxes[0] : null;
    }

    function isChecked(checkboxes) {
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity(checkboxes, firstCheckbox) {
        const errorMessage = !isChecked(checkboxes) ? 'Seleccione al menos una opcion.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

        const form = document.querySelector('#formulario_ini');
    
    // Let's add a validation for the first group of checkboxes
    const checkboxes = form.querySelectorAll('input[name="check"]');
    addValidation(checkboxes);
    
    // another group of checkboxes
    const subCheckboxes = form.querySelectorAll('input[name="check[]"]');
    addValidation(subCheckboxes);
})();

</script>
@endsection


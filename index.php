<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="SERVICIO DE LOGISTICA Y TRANSPORTACION EN CAJAS REFRIGERADAS ">
	<meta name="author" content="Perla Holguín">
    <title> Transporte de productos perecederos | Envíos a todo Mèxico  | Thermotransportes.com	</title>
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <!-- Datepicker  -->
     <link rel="stylesheet" type="text/css" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
    <script>
        $(function(){
            $("#btn-ajax").click(function(){
                var url = 'mail/ajax.php';
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: $("#formularioAjax").serialize(),
                    success: function(data){
                        $('#nombre-status').html('');
                        $('#email-status').html('');
                        $('#telefono-status').html('');
                        $('#origen-status').html('');
                        $('#destino-status').html('');
                        $('#fecha-status').html('');
                        $('#opciones-servicio-status').html('');
                        $('#opciones-carga-status').html('');
                        $('#mensaje-status').html('');
                        $('#terminos-status').html('');
                        $('#mensajeErr-status').html(data);
                    }
                });
                return false;
            });
        });
   
    </script>

    <script>
    $(function(){
            $("#btn-ajax2").click(function(){
                var url = 'mail/ajax2.php';
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: $("#contact-form").serialize(),
                    success: function(data){
                        $('#nombre2-status').html('');
                        $('#email2-status').html('');
                        $('#telefono2-status').html('');
                        $('#ciudad2-status').html('');
                        $('#mensaje2-status').html('');
                        $('#terminos2-status').html('');
                        $('#mensajeErr-status').html(data);
                    }
                });
                return false;
            });
        });
    </script>
  
  </head>
  <body>
    
    <section id="intro" >
            
                    <nav class="navbar  ">
                       
                        
                             <ul class="nav justify-content-end container">
                                    <li class="nav-item">
                                     <h3 class="bar"></h3>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="tel:8119340020"> <i class="fas fa-phone"></i> <span class="oculto-movil show-web">(81) 1934 0020</span></a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="https://www.facebook.com/Thermotransportes-SA-De-CV-338638772873979/" target="_blank"><i class="fab fa-facebook"></i> </a>
                                    </li>
                              </ul>
                              
                   </nav>
                   
                   <!-- <img src="images/Recurso 8.png" class=" " alt="">-->
                    <div class="container ">
                            <div class="row">
                                   <div class="col-xs-12 col-sm-5 col-md-6 ">
                                        <div class="brand">
                                            <img src="images/brand.png" alt=" Thermotransportes logotipo" width="200">
                                        </div>   
                                   </div>
                                  <div  id="blue" class=" COL-XS-12 contacto col-sm-7 col-md-5 col-lg-5  ml-auto">
                                       <h2 class="cont">¡PIDE INFORMES!</h2>
                                       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formularioAjax" method="post" role="form" onsubmit="return validar();" novalidate>
                                            <div id="mensajeErr-status"></div>
                                            <div class="ajax-hidden">
                                                <div class="form-group">
                                                    <label class="sr-only" for="c_nombre">Nombre</label>
                                                    <input type="text" id="c_nombre" class="form-control" name="nombre" placeholder="Nombre" required>
                                                    <div id="nombre-status" style="color:white;"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="c_email">E-mail </label>
                                                    <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail" required>
                                                    <div id="email-status"></div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="sr-only" for="c_telefono">Teléfono </label>
                                                    <input type="tel" id="c_telefono" class="form-control" name="telefono" placeholder="Teléfono" required>
                                                    <div id="telefono-status"></div>
                                                </div>
                                                <div class="form-group">
                                                        <input id="fechaTransporte"
                                                        class=' datepicker-here form-control' id="c_fecha" data-language='es' name="fecha" placeholder="Fecha del evento" />
                                                        <div id="fecha-status"></div>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class=" col-xs-12 col-md-6 form-group" style="margin: 0px  0  10px  0 ">
                                                        <label class="sr-only" for="c_location">Origen </label>
                                                        <input type="text" id="c_origen" class="thermo-form" name="origen" placeholder="Origen" required>
                                                        <div id="origen-status"></div>
                                                    </div>
                                                
                                                    <div class=" col-xs-12 col-md-6 form-group" style="margin: 0px  0  10px  0 ">
                                                        <label class="sr-only" for="c_location">Destino </label>
                                                        <input type="text" id="c_destino" class="thermo-form" name="destino" placeholder="Destino" required>
                                                        <div id="destino-status"></div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="row">
                                                    
                                                    <div class="col-xs-12 col-md-6  form-group" style="margin:  5px 0 5px 0  ">
                                                        <select class="thermo-form" name="opcionesServicio" id="c_opcionesSevicio" placeholder="Tipo de servicio">
                                                            <option value="">Tipo de producto</option>
                                                            <option value="Carne">Carne</option>
                                                            <option value="Lácteo">Lácteo</option>
                                                            <option value="Frutas">Frutas</option>
                                                            <option value="Verduras">Verduras</option>
                                                            <option value="Farmacéutico">Farmacéutico</option>
                                                            <option value="Otro">Otro</option>
                                                            
                                                            
                                                        </select>
                                                        <div id="opciones-servicio-status"></div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6  form-group " style="margin:  5px 0 15px 0  ">
                                                            <select class="thermo-form" id="c_opcionesCarga" name="opcionesCarga" placeholder="Carga (Toneladas)">
                                                                <option value="">Carga (Toneladas)</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                               
                                                                
                                                            </select>
                                                            <div id="opciones-carga-status"></div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="c_message" name="mensaje" rows="7" placeholder="Mensaje"></textarea>
                                                    <div id="mensaje-status"></div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="terminos" id="terminos">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        <a class="aviso2" href="aviso-privacidad.html" target="_blank" >Acepto términos de privacidad</a>
                                                    </label>
                                                </div>
                                                <div id="terminos-status"></div>

                                                   <div class="row justify-content-center">
                                                        <input type="hidden" name="ajax">
                                                        <input type="button" value="ENVIAR" id="btn-ajax" class="btn-enviar">
                                                   </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                       </div>
        </section>


        

    <section class="blue">
        <div class="container ">
            <div class="row ">
                <div class="col-xs-6 col-sm-8 col-lg-8">
                        <div class=" ">
                                <h5 ><strong>TRANSPORTAMOS TUS PRODUCTOS PERECEDEROS</strong></h5> 
                                <h2 class="cont2"><strong>¡A CUALQUIER PARTE DEL PAÍS!</strong> </h2>
                    
                            </div>
                </div>
                <div class="col-xs-4 col-sm-2 col-lg-4 margen-3">
                    <img src="images/mexico.png" alt=" transportamos a todo mexico" width="180">
                </div>
            </div>
                
        </div>
        
    </section>
    <section class="section container" >
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6  col-lg-3 margen-top">
                    <div class="media">
                            <img class="align-self-center mr-3" src="images/1.png" alt="PRODUCTOS CARNICOS" width="115px">
                            <div class="media-body">
                              <h4 class="mt-0">PRODUCTOS CÁRNICOS</h4>
                             </div>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margen-top">
                <div class="media">
                    <img class="align-self-center mr-3" src="images/2.png" alt="PRODUCTOS LACTEOS" width="115px">
                    <div class="media-body">
                    <h4 class="mt-0">PRODUCTOS LÁCTEOS</h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margen-top">
                <div class="media">
                    <img class="align-self-center mr-3" src="images/3.png" alt="FRUTAS y VERDURAS" width="115px">
                    <div class="media-body">
                      <h4 class="mt-0">FRUTAS Y VERDURAS</h4>
                     </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margen-top">
                <div class="media">
                    <img class="align-self-center mr-3" src="images/7.png" alt="FRUTAS y VERDURAS" width="115px">
                    <div class="media-body">
                      <h4 class="mt-0">PRODUCTOS FARMACÉUTICOS</h4>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="services background-image">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-md-8 "> 
                    <div class="servicios azul">

                        <h3><strong>SERVICIO DE LOGISTICA Y TRANSPORTACION EN CAJAS REFRIGERADAS</strong> </h3>
                        <div class="col-xs-12 col-md-8">
                            <ul class="servicio">
                                    <li class="servicio"> <i class="fas fa-circle"></i>  Ubicados en Monterrey, Nuevo León.</li>
                                <li class="servicio"> <i class="fas fa-circle"></i> Camiones con cajas de 6 y 10 toneladas.</li>
                                <li class="servicio"><i class="fas fa-circle"></i>  Camiones nuevos y con menos de 3 años de uso.</li>
                                <li class="servicio"><i class="fas fa-circle"></i> Última tecnología de refrigeración en unidades con equipo <b> Thermo King</b>.</li>
                                <li class="servicio"> <i class="fas fa-circle"></i> Contamos con los mejores aislamientos para tener siempre tus productos frescos y a tiempo</li>              
                                <li class="servicio"> <i class="fas fa-circle"></i> Transporta con nosotros tus productos perecederos: 
                                    Lácteos y Quesos; Carnes y Carnes Frías;
                                    Frutas y Verduras; etc.
                                </li>
                            </ul>
                        </div>                                    
                    </div>
                </div> 
                <div class="col-xs-12 col-md-4 oculto-movil">
                    <img class="experiencia" src="images/4.png" alt=" 10 años de experiencia" width="200">
                </div>
                

            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <h2 class="cobertura">LOGÍSTICA, COBERTURA Y RASTREO DIGITAL</h2>
            <div class="row">
                    <div class="col-xs-12 col-lg-4 margen-top2">
                        
                            <div class="media">
                                    <img class="align-self-center mr-3" src="images/8.png" alt="PRODUCTOS LACTEOS" width="130px">
                                    <div class="media-body">
                                        <h4 class="mt-0">
                                            MATRIZ EN MONTERREY, NUEVO LEÓN</h4>
                                     </div>
                            </div>
                    </div>
                <div class="col-xs-12 col-lg-4 margen-top2">
                    <div class="media">
                        <img class="align-self-center mr-3" src="images/6.png" alt="PRODUCTOS LACTEOS" width="130px">
                        <div class="media-body">
                            <h4 class="mt-0">RASTREO DIGITAL GPS 24/7</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4 margen-top2">
                    <div class="media">
                        <img class="align-self-center mr-3" src="images/5.png" alt="PRODUCTOS CARNICOS" width="130px">
                        <div class="media-body">
                            <h4 class="mt-0">APOYANDO LA CADENA DE  SUMINISTRO DE TU NEGOCIO</h4>
                        </div>
                    </div>
                </div>
                        
            </div>
            <div class="row justify-content-center">
                    <a href="tel:8119340020"><button type="submit" class="btn-llamar"> <strong> LLÁMANOS </strong> </button></a>
            </div>

        </div> 
     </section>


    <footer class="footer1">
        <div class="container">
            <div class="row">
                    
                            <h2 class="contacto">¡CONTÁCTANOS!</h2>
                             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact-form" method="post" role="form">
                                 <div class="ajax-hidden">
                                     <div class="row">

                                     
                                     <div class="form-group col-xs-12 col-md-6" >
                                        <label class="sr-only" for="c_name">Nombre</label>
                                        <input type="text" id="c_name2" class="form-control" name="nombre2" placeholder="Nombre">
                                        <div id="nombre2-status" style="color:red;"></div>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                         <label class="sr-only" for="c_email">E-mail </label>
                                        <input type="email" id="c_email2" class="form-control" name="email2" placeholder="E-mail">
                                        <div id="email2-status" style="color:red;"></div>
                                    </div>
                                    <div class="form-group col-xs-12 col-md-6">
                                            <label class="sr-only" for="c_phone">Telefono </label>
                                            <input type="number" id="c_phone2" class="form-control" name="telefono2" placeholder="Teléfono">
                                            <div id="telefono2-status" style="color:red;"></div>
                                     </div>
                                     <div class="form-group col-xs-12 col-md-6">
                                            <label class="sr-only" for="c_ciudad">Ciudad </label>
                                            <input type="text" id="c_ciudad2" class="form-control" name="ciudad2" placeholder="Ciudad">
                                            <div id="ciudad2-status" style="color:red;"></div>
                                     </div>
                                     
                                    <div class="form-group col-xs-12 col-md-12">
                                        <textarea class="form-control" id="c_message2" name="mensaje2" rows="7" placeholder="Mensaje"></textarea>
                                        <div id="mensaje2-status" style="color:red;"></div>
                                    </div>
                                    <div class="row ">
                                        <input type="hidden" name="ajax2">
                                        <input type="button" value="Enviar" id="btn-ajax2" class="btn-enviar2">

                                        
                                        <div class="form-check acepto">
                                            <input class="form-check-input" 
                                            type="checkbox" 
                                            value="" 
                                            name="terminos2"
                                             id="defaultCheck1">

                                            
                                            <label class="form-check-label" for="defaultCheck1">
                                                    <div id="terminos2-status" style="color:red;"></div>
                                                <a class="aviso2" 
                                                href="aviso-privacidad.html" target="_blank">Acepto terminos de prvacidad</a>
                                            </label>
                                        </div>
                                        

                                    </div>
                                       
                                </div>
                            </div>
                                <div class="ajax-response"></div>
                             </form>
                         </div>

                        <div class="row justify-content-center ">
                            <p class="copy">Thermotransportes, S.A. de C.V. Derechos Reservados Monterrey, Nuevo León © 2018</p>
                        </div>  
              </div> 
     </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- datepicker -->
    <script src="js/datepicker.min.js"></script>
    <script src="js/datepickerLang.js"></script>
    <!--Validaciones-->
    <script src="js/validaciones.js"></script>
   
   <script >
        // Initialization
        //$('#my-element').datepicker([options])
        $('#fechaTransporte').data({
        autoClose: true
        });
   </script>
     
</body>
</html>
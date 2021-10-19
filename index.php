<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario</title>
  </head>
  <body>
    <header style="height: 70px">
    </header>
    <div style="height: 30px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="card-header">Formulario de Registro</div>
            <div class="card-body">
              <form name="form1" id="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
                <label style="color: blue; width: 85%;" >DATOS PERSONALES</label>
                <span style="color: red">* campos obligatorios</span>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="nombre" >Nombre/s <span style="color: red;" >*</span> </label>
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="apellido">Apellido <span style="color: red;" >*</span></label>
                    <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="dni">DNI <span style="color: red;" >*</span></label>
                    <input name="dni" type="number" class="form-control" id="dni" placeholder="Ingrese su dni" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="estado_civil">Estado civil <span style="color: red;" >*</span></label>
                    <select name="estado_civil" class="form-control" class="custom-select" required>
                      <option value="">Seleccione su estado
                      <option value="Soltero/a">Soltero/a
                      <option value="Casado/a">Casado/a
                      <option value="Viudo/a">Viudo/a
                      <option value="Divorciado/a">Divorciado/a
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="email">Correo electronico <span style="color: red;" >*</span></label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Ingrese su correo" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="telefono">Telefono <span style="color: red;" >*</span></label>
                    <input name="telefono" type="number" class="form-control" id="teelfono" placeholder="Ingrese su telefono" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <br>
                <label style="color: blue;" >DOMICILIO</label>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="calle">Calle <span style="color: red;" >*</span></label>
                    <input name="calle" type="text" class="form-control" id="direccion" placeholder="Ingrese calle" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="num_calle">Numero <span style="color: red;" >*</span></label>
                    <input name="num_calle" type="number" class="form-control" id="num_calle" placeholder="Ingrese numero calle" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="piso_dpto">Piso/Depto</label>
                    <input name="piso_dpt" type="text" class="form-control" id="piso_dpt" placeholder="Ingrese piso/dpto">
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="pais">Pais <span style="color: red;" >*</span></label>
                    <select name="pais" class="form-control" class="custom-select" onchange="cambia_provincia('form1')" required>
                      <option value="" selected>Seleccione un Pais 
                      <option value="1">España 
                      <option value="2">Argentina 
                      <option value="3">Colombia 
                      <option value="4">Francia 
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="provincia">Provincia <span style="color: red;" >*</span></label>
                    <select name="provincia" class="form-control" required>
                      <option value="">Seleccione una Provincia 
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="localidad">Localidad <span style="color: red;" >*</span></label>
                    <input name="localidad" type="text" class="form-control" id="localidad" placeholder="Ingrese localidad" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <br>
                <label style="color: blue;" >DATOS DE NACIMIENTO</label>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="fecha_nac">Fecha de nacimiento <span style="color: red;" >*</span></label>
                    <input name="fecha_nac" type="date" class="form-control" id="fecha_nac" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="pais_2">Pais <span style="color: red;" >*</span></label>
                    <select name="pais_2" class="form-control" class="custom-select"  required>
                      <option value="" > Seleccione un Pais
                      <option value="1">Argentina 
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="provincia_2">Provincia <span style="color: red;" >*</span></label>
                    <select name="provincia_2" class="form-control" required>
                      <option value="">Seleccione una Provincia 
                      <option value="1">Buenos aires
                      <option value="2">La pampa
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="localidad_2">Localidad <span style="color: red;" >*</span></label>
                    <input name="localidad_2" type="text" class="form-control" id="localidad_2" placeholder="Ingrese localidad" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <br>
                <label style="color: blue;" >ESTUDIOS</label>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="nivel_estudio">Nivel de estudio <span style="color: red;" >*</span></label>
                    <select name="nivel_estudio" class="form-control" class="custom-select" required>
                      <option value="">Seleccione un nivel
                      <option value="1">Bachiller
                      <option value="2">Técnico
                      <option value="3">Terciario
                      <option value="4">Universitario
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="email">Especialidad <span style="color: red;" >*</span></label>
                    <input name="especialidad" type="text" class="form-control" id="especialidad" placeholder="Ingrese especialidad" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="institucion">Institución <span style="color: red;" >*</span></label>
                    <input name="institucion" type="text" class="form-control" id="institucion" placeholder="Ingrese institucion" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="pais_2">Pais <span style="color: red;" >*</span></label>
                    <select name="pais_2" class="form-control" class="custom-select"  required>
                      <option value="" > Seleccione un Pais
                      <option value="1">Argentina 
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="provincia_2">Provincia <span style="color: red;" >*</span></label>
                    <select name="provincia_2" class="form-control" required>
                      <option value="">Seleccione una Provincia 
                      <option value="1">Buenos aires
                      <option value="2">La pampa
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="localidad_2">Localidad <span style="color: red;" >*</span></label>
                    <input name="localidad_2" type="text" class="form-control" id="localidad_2" placeholder="Ingrese localidad" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <br>
                <label style="color: blue;" >DATOS DE TRABAJO</label>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="fecha_ing">Fecha de ingreso <span style="color: red;" >*</span></label>
                    <input name="fecha_ing" type="date" class="form-control" id="fecha_ing" value="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="actividad">Actividad <span style="color: red;" >*</span></label>
                    <input name="actividad" type="text" class="form-control" id="actividad" placeholder="Ingrese actividad" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="telefono_2">Telefono <span style="color: red;" >*</span></label>
                    <input name="telefono_2" type="number" class="form-control" id="telefono_2" placeholder="Ingrese telefono" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="calle_3">Calle <span style="color: red;" >*</span></label>
                    <input name="calle_3" type="text" class="form-control" id="direccion_3" placeholder="Ingrese calle" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="num_calle_3">Numero <span style="color: red;" >*</span></label>
                    <input name="num_calle_3" type="number" class="form-control" id="num_calle_3" placeholder="Ingrese numero calle" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="piso_dpto_3">Piso/Depto</label>
                    <input name="piso_dpt_3" type="text" class="form-control" id="piso_dpt_3" placeholder="Ingrese piso/dpto">
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="pais_2">Pais <span style="color: red;" >*</span></label>
                    <select name="pais_2" class="form-control" class="custom-select"  required>
                      <option value="" > Seleccione un Pais
                      <option value="1">Argentina 
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="provincia_2">Provincia <span style="color: red;" >*</span></label>
                    <select name="provincia_2" class="form-control" required>
                      <option value="">Seleccione una Provincia 
                      <option value="1">Buenos aires
                      <option value="2">La pampa
                    </select>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="localidad_2">Localidad <span style="color: red;" >*</span></label>
                    <input name="localidad_2" type="text" class="form-control" id="localidad_2" placeholder="Ingrese localidad" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                    <div class="valid-feedback">¡Aceptado!</div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="bootstrap4/js/bootstrap.min.js"></script>    
    <script src="codigo.js"></script>    
    <script src="provincia_pais.js"></script> 
  </body>
</html>
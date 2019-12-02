<?php require_once('../app/views/inc/header.php'); ?>
  <main>
    <section class="section section-lg section-shaped">
      <!-- Background circles -->
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container">
          <div class="content-center">
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row row-grid justify-content-center">
                        <div class="col-lg-8 text-center">
                          <h4 class="text-white">Crear Cuenta</h4>
                        </div>
                      </div>
                    </div>
                </div>
                <br>
                  <form action="<?php echo ROUTE_URL?>/Index/add_client" method="post">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-white" for="nombre">Nombre</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="Ingrese su Nombre" type="text"
                            name="nombre" id="nombre">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="text-white" for="apellido">Apellido</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="Ingrese su Apellido" type="text"
                            name="apellido" id="apellido">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-white" for="dui">DUI</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                            </div>
                            <input class="form-control" placeholder="Numero de DUI" type="text"
                            name="dui" id="dui">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="text-white" for="nit">NIT</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                            </div>
                            <input class="form-control" placeholder="Numero de NIT" type="text"
                            name="nit" id="nit">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-white" for="licencia">Licencia</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                            </div>
                            <input class="form-control" placeholder="Numero de Licencia" type="text"
                            name="licencia" id="licencia">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="text-white" for="telefono">Telefono</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-mobile-alt"></i></span>
                            </div>
                            <input class="form-control" placeholder="Numero Telefonico" type="text"
                            name="telefono" id="telefono">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-white" for="correo">Correo Electrónico</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Correo" type="email"
                            name="correo" id=""correo>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="text-white" for="#">Sexo</label>
                          <div class="custom-control custom-radio mb-3 form-check-inline">
                              <input name="genero" class="custom-control-input" id="hombre" value="1"
                                  type="radio">
                              <label class="custom-control-label text-white" for="hombre">Hombre</label>
                          </div>
                          <div class="custom-control custom-radio mb-3 form-check-inline">
                              <input name="genero" class="custom-control-input" id="mujer" value="2" type="radio">
                              <label class="custom-control-label text-white" for="mujer">Mujer</label>
                          </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label class="text-white" for="direccion">Dirección</label>
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                            </div>
                            <input class="form-control" placeholder="Ingresar Direccion" type="text"
                            name="direccion" id=""direccion>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label class="text-white" for="pass">Contraseña</label>
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Contraseña" type="password"
                          name="pass" id="pass">
                        </div>
                        </div>
                        <div class="col-md-6">
                          <label class="text-white" for="pass2">Repetir Contraseña</label>
                          <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Repetir Contraseña" type="password"
                          name="pass2" id="pass2">
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-neutral" name="guardar" value="Crear Cuenta">
                    </div>
                  </form>
                </div>
          </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>

  </main>
  <?php require_once('../app/views/inc/footer.php'); ?>

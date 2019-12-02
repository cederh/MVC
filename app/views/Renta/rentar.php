<?php require_once('../app/views/inc/header.php'); ?>

<main>
  <div class="position-relative">
    <!-- Hero for FREE version -->
    <section class="section section-lg section-shaped">
      <!-- Background circles -->
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg">
      <div class="container">
        <div class="row row-grid justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-3">Renta<span class="display">Llega hasta donde tu quieras con Donovan Imports.</span>
            </h2>
          </div>
        </div>
    </section>

    </section>
    <section class="section section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="container">
        <div class="content-center">
          <div class="row">
            <div class="col-md-12">
              <form m action="<?php echo ROUTE_URL?>/Renta/car" method="post">
                <h4 class="text-white">Formulario de Renta</h4>
                <div class="row">
                  <div class="col-md-12">
                    <label class="text-white" for="recogida">Lugar de Recogida</label>
                    <div class="form-group" id="entrega">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <input type="text" placeholder="Ingresar Lugar de Recogida" class="form-control"
                          name="recogida">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="text-white" for="entrega">Lugar de Devolución</label>
                    <div class="form-group" id="entrega">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <input type="text" placeholder="Ingresar Lugar de Devolución" class="form-control"
                          name="entrega">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <div class="input-daterange datepicker row align-items-center">
                      <div class="col">
                        <label class="text-white" for="fetentrega">Fecha de Entrega</label>
                        <div class="form-group" id="fetentrega">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control" placeholder="Start date" type="text" value="12/02/2019"
                              name="dateEntrega">
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <label class="text-white" for="fetdevolucion">Fecha Devolución</label>
                        <div class="form-group" id="fetdevolucion">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control" placeholder="End date" type="text" value="12/06/2019"
                              name="datedevol">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-3-md">
                    <label class="text-white" for="time">Hora</label>
                    <div class="form-group" id="time">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-clock"></i></span>
                        </div>
                        <input type="text" placeholder="Hora" class="form-control" name="hora">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Siguiente">
                    </div>
                  </div>
                </div>
              </form>
            </div>
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
  </div>
</main>
</div>

</main>
<?php require_once('../app/views/inc/footer.php'); ?>

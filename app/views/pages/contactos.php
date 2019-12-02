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
            <h2 class="display-3">Contactanos<span class="display">Ponte en contacto con nosotros</span></h2>
            <p class="lead">Llena el siguiente formulario y nosotros nos comunicaremos contigo</p>
          </div>
        </div>
      </div>
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
      <form action="<?php echo ROUTE_URL?>/Index/add_consult" method="post">
      <div class="container">
        <div class="content-center">
          <div class="row">
            <div class="col-md-12">
              <form action="<?php echo ROUTE_URL?>/Index/add_consult" method="post">
                <h4 class="text-white">Formulario de contacto</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-white" for="nombre">Nombre</label>
                      <input type="text" placeholder="Ingresar Nombre" class="form-control" id="nombre" name="nombre">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-white" for="apellido">Apellido</label>
                      <input type="text" placeholder="Ingresar Apellido" class="form-control" id="apellido"
                        name="apellido">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-white" for="telefono">Teléfono</label>
                      <input type="text" placeholder="Numero de telefono" class="form-control" id="telefono"
                        name="telefono">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-white" for="correo">Correo electrónico</label>
                      <input type="email" placeholder="Correo electrónico" class="form-control" id="correo"
                        name="correo">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <form>
                      <label class="text-white" for="mensaje">Mensaje</label>
                      <textarea class="form-control" id="mensaje" name="mensaje" rows="3"
                        placeholder="Escriba su mensaje"></textarea>
                    </form>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="customCheck1" type="checkbox">
                        <label class="custom-control-label text-white" for="customCheck1">
                          <span>Envíame información de ofertas y promociones al correo proporcionado.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <p class="description text-white">Tus datos son confidenciales, Donovan Imports no usa estos datos
                        con fines publicitarios ni comparte tu información con terceros. Lee más en nuestro Aviso de
                        Privacidad.</p>
                    </div>
                  </div>
                </div>
                <br>
                  <div class="text-center">>
                      <input type="submit" class="btn btn-neutral" value="Enviar mensaje">
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
<?php require_once('../app/views/inc/footer.php'); ?>

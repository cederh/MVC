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
      <div class="container">
        <div class="content-center">
          <div class="row">
            <div class="col-md-12">
              <form action="#">
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
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="g-recaptcha" data-sitekey="6LeeJykUAAAAAM3_Nu1SDFP6aRDipraq4I1_-MF6">
                        <div style="width: 304px; height: 78px;">
                          <div>
                            <iframe
                              src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeeJykUAAAAAM3_Nu1SDFP6aRDipraq4I1_-MF6&amp;co=aHR0cHM6Ly9tZXhyZW50YWNhci5jb206NDQz&amp;hl=es-419&amp;v=75nbHAdFrusJCwoMVGTXoHoM&amp;size=normal&amp;cb=c7zs12uu6wnw"
                              role="presentation" name="a-5ebbae2admim" scrolling="no"
                              sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                              width="304" height="78" frameborder="0">
                            </iframe>
                          </div>
                          <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                                 </textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Enviar mensaje">
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
<?php require_once('../app/views/inc/footer.php'); ?>
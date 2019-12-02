<?php require_once('../app/views/inc/header.php'); ?>
<main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-primary mb-4">
                  <small>Utiliza tus Credenciales</small>
                </div>
                <form>
                  <div class="form-group mb-3">
                    <label class="text-primary" for="correo">Correo</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83 text-primary"></i></span>
                      </div>
                      <input class="form-control" placeholder="Correo" type="email" name="correo" id="correo">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="text-primary" for="pass">Contraseña</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open text-primary"></i></span>
                      </div>
                      <input class="form-control" placeholder="Contraseña" type="password" name="pass" id="pass">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary my-4">Iniciar Sesión</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
              </div>
              <div class="col-6 text-right">
                <a href="<?php echo ROUTE_URL?>/pages/register" class="text-white"><small>Crear Cuenta Nueva!</small></a>
              </div>
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
  </main>
  <?php require_once('../app/views/inc/footer.php'); ?>

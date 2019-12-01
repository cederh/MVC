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
        <div class="card card-profile shadow p-3">
          <div class="content-center">
            <div class="row">
              <div class="col-md-12">
                <div class="row row-grid justify-content-center">
                  <div class="col-lg-8 text-center">
                    <h2 class="display-3">Formulario de Renta</h2>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <h5><span class="display"><i class="fas fa-map-marked-alt"></i></span> Lugar de entrega: <span
                    class="display text-primary"><?php echo $recogida = $_POST['recogida'];?></span></h5>
              </div>
              <div class="col-md-6">
                <h5><span class="display"><i class="ni ni-calendar-grid-58"></i></span> Entrega: <span
                    class="display text-primary"><?php echo $dateEntrega = $_POST['dateEntrega'];?></span></h5>
              </div>
              <div class="col-md-6">
                <h5><span class="display"><i class="fas fa-clock"></i></span> A las: <span
                    class="display text-primary"><?php echo $hora = $_POST['hora'];?></span></h5>
              </div>
              <br>
              <div class="col-md-12">
                <h5><span class="display"><i class="fas fa-map-marked-alt"></i></span> Lugar de Devolución: <span
                    class="display text-primary"><?php echo $entrega = $_POST['entrega'];?></span></h5>
              </div>
              <div class="col-md-6">
                <h5><span class="display"><i class="ni ni-calendar-grid-58"></i></span> Devolución: <span
                    class="display text-primary"><?php echo $datedevol = $_POST['datedevol'];?></span></h5>
              </div>
              <div class="col-md-6">
                <h5><span class="display"><i class="fas fa-clock"></i></span> A las: <span
                    class="display text-primary"><?php echo $hora = $_POST['hora'];?></span></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card card-profile shadow p-3">
          <div class="col-md-12">
            <div class="row row-grid justify-content-center">
              <div class="col-lg-8 text-center">
                <h2 class="display-3">Selecciona el modelo</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo ROUTE_URL?>/public/img/carros/01.png" class="card-img-top" alt="image">
            </div>
            <div class="col-md-6">
              <div class="descripcion">
                <h4 class="display-3 font-weight-bold text-primary">Toyota Camry </h4>
                <p class="lead text-italic text-primary">Lujoso - Automático</p>
              </div>
              <div class="caracteristicas">
                <p class="text-primary"><i class="fas fa-snowflake text-primary"></i>A/A</p>
                <p class="text-primary"><i class="fas fa-road text-primary"></i> Kilometraje Ilimitado</p>
                <p class="text-primary"><i class="fas fa-dollar-sign text-primary"></i>Precio por Dia: </p>
                <p class="text-primary"><i class="fas fa-money-check-alt text-primary"></i> Precio Total: </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card card-profile shadow p-3">
          <div class="col-md-12">
            <div class="row row-grid justify-content-center">
              <div class="col-lg-8 text-center">
                <h2 class="display-3">Información de Usuario</h2>
              </div>
            </div>
          </div>
          <form class="" action="index.html" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-primary" for="nombre">Nombre</label>
                <input type="text" placeholder="Ingresar Nombre" class="form-control" id="nombre" name="nombre">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-primary" for="apellido">Apellido</label>
                <input type="text" placeholder="Ingresar Apellido" class="form-control" id="apellido" name="apellido">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-primary" for="telefono">Teléfono</label>
                <input type="text" placeholder="Numero de telefono" class="form-control" id="telefono" name="telefono">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-primary" for="correo">Correo electrónico</label>
                <input type="email" placeholder="Correo electrónico" class="form-control" id="correo" name="correo">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-primary" for="dui">DUI</label>
                <input type="text" placeholder="Ingresar el DUI" class="form-control" id="dui" name="dui">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="text-primary" for="Licencia">Licencia</label>
                <input type="text" placeholder="Ingresar el numero de Licencia" class="form-control" id="Licencia"
                  name="Licencia">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="text-primary" for="card">Numero de Tarjeta</label>
                <input type="text" placeholder="Ingrese Numero de Tarjeta" class="form-control" id="card" name="card">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="text-primary" for="mes">Mes de Expiración</label>
                <input type="text" placeholder="MM" class="form-control" id="mes" name="mes">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="text-primary" for="year">Año de Expiración</label>
                <input type="text" placeholder="YY" class="form-control" id="year" name="year">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="text-primary" for="ccv">CCV (Reverso)</label>
                <input type="text" placeholder="CCV" class="form-control" id="ccv" name="ccv">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary" value="Siguiente">
            </div>
          </div>
        </form>
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

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
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
              <a href="<?php echo ROUTE_URL?>/Renta/car" <h5><span class="display"><i class="fas fa-edit"></i></span>
                Cambiar</h5></a>
            </div>
          </div>
          <form class="" action="<?php echo ROUTE_URL?>/Renta/payment" method="post">
            <input type="text" style="display: none" name="recogida"
              value="<?php echo $recogida = $_POST['recogida'];?>">
            <input type="text" style="display: none" name="entrega" value="<?php echo $entrega = $_POST['entrega'];?>">
            <input type="text" style="display: none" name="dateEntrega"
              value="<?php echo $dateEntrega = $_POST['dateEntrega'];?>">
            <input type="text" style="display: none" name="datedevol"
              value="<?php echo $datedevol = $_POST['datedevol'];?>">
            <input type="text" style="display: none" name="hora" value="<?php echo $hora = $_POST['hora'];?>">
            <input type="submit" class="btn btn-primary" value="Siguiente">
          </form>
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
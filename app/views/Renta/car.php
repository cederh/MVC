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
              <div class="col-md-9">
              </div>
              <div class="col-md-3">
                <a href="<?php echo ROUTE_URL?>/Renta" <h5><span class="display"><i class="fas fa-edit"></i></span>
                  Cambiar</h5></a>
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
          <div class="card-body">
            <div class="row justify-content-center inventario">
                <?php if ($parameters['inventary'] != ""): ?>
                <?php foreach ($parameters['inventary'] as $key => $producto): ?>

                <div class="card shadow-lg p-3 m-3 mb-5 bg-black rounded" style="width: 18rem;">
                    <img src="<?php echo ROUTE_URL?>/assets/img/brand/<?php echo $producto->foto?>" class="card-img-top"
                        alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title"><b><?php echo $producto->nombre?></b></h3>
                        <p class="">
                            <i class="fas fa-users"></i> <?php echo $producto->capacidad?> Personas<br />
                            <i class="fas fa-door-open"></i> <?php echo $producto->npuertas?> Puertas<br />
                            <i class="fas fa-car"></i> <?php echo $producto->modelo?><br />
                            <i class="fas fa-comment-dollar"></i> $<?php echo $producto->precio?>
                        </p>
                        <a href="<?php echo ROUTE_URL?>/inventary/view_inventary/<?php echo $producto->idvehiculo?>"
                            class="btn btn-primary btn-block">Ver mas</a>
                    </div>
                </div>
                <?php endforeach?>
                <?php endif?>
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

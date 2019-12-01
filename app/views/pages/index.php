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
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-shaped">
      <div class="container py-md">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <img alt="image" src="img/logo-white.png" style="width: 300px;" class="img-fluid">
            <h1 class="text-primary font-weight-light">Donovan Imports</h1>
            <p class="lead text-primary mt-4">Movilizando tus deceos</p>
              <div class="btn-wrapper">
                <a href="<?php echo ROUTE_URL?>/rentar" class="btn btn-lg btn-primary btn-icon mb-3 mb-sm-0">
                  <span class="btn-inner--icon"><i class="fas fa-car"></i></span>
                  <span class="btn-inner--text">Rentar auto</span>
                </a>
              </div>
          </div>
          <div class="col-lg-6 mb-lg-auto">
            <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
              <div id="carousel_example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel_example" data-slide-to="1"></li>
                  <li data-target="#carousel_example" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="./assets/img/theme/1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/theme/2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/theme/4.jpg" alt="Four slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
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
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card bg-default shadow border-0">
                  <img src="img/carros/01.png" class="card-img-top" alt="image">
                  <blockquote class="card-blockquote">
                    <!-- Comentar esta linea si quieten eliminar la esquina de la imagen -->

                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                      class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default" />
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                    </svg>

                    <div class="descripcion">
                      <h4 class="display-3 font-weight-bold text-white">Toyota Camry </h4>
                      <p class="lead text-italic text-white">Lujoso - Automático</p>
                    </div>
                    <div class="caracteristicas">
                      <p class="text-white"><i class="fas fa-snowflake"></i> A/A</p>
                      <p class="text-white"><i class="fas fa-road"></i> Kilometraje Ilimitado</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-square"></i> Rentar</a>
                  </blockquote>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card bg-default shadow border-0">
                  <img src="img/carros/02.png" class="card-img-top" alt="image">
                  <blockquote class="card-blockquote">
                    <!-- Comentar esta linea si quieten eliminar la esquina de la imagen -->

                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                      class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default" />
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                    </svg>

                    <div class="descripcion">
                      <h4 class="display-3 font-weight-bold text-white">Toyota Yaris </h4>
                      <p class="lead text-italic text-white">Lujoso - Automático</p>
                    </div>
                    <div class="caracteristicas">
                      <p class="text-white"><i class="fas fa-snowflake"></i> A/A</p>
                      <p class="text-white"><i class="fas fa-road"></i> Kilometraje Ilimitado</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-square"></i> Rentar</a>
                  </blockquote>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card bg-default shadow border-0">
                  <img src="img/carros/03.png" class="card-img-top" alt="image">
                  <blockquote class="card-blockquote">
                    <!-- Comentar esta linea si quieten eliminar la esquina de la imagen -->

                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                      class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default" />
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                    </svg>

                    <div class="descripcion">
                      <h4 class="display-3 font-weight-bold text-white">Hyundai Creta</h4>
                      <p class="lead text-italic text-white">Compacta - Automática</p>
                    </div>
                    <div class="caracteristicas">
                      <p class="text-white"><i class="fas fa-snowflake"></i> A/A</p>
                      <p class="text-white"><i class="fas fa-road"></i> Kilometraje Ilimitado</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-square"></i> Rentar</a>
                  </blockquote>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card bg-default shadow border-0">
                  <img src="img/carros/04.png" class="card-img-top" alt="image">
                  <blockquote class="card-blockquote">
                    <!-- Comentar esta linea si quieten eliminar la esquina de la imagen -->

                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                      class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default" />
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                    </svg>
                    <!-- --------------------------------------------------------------- -->
                    <div class="descripcion">
                      <h4 class="display-3 font-weight-bold text-white">Kia Sportage</h4>
                      <p class="lead text-italic text-white">Mediana - Automático</p>
                    </div>
                    <div class="caracteristicas">
                      <p class="text-white"><i class="fas fa-snowflake"></i> A/A</p>
                      <p class="text-white"><i class="fas fa-road"></i> Kilometraje Ilimitado</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-square"></i> Rentar</a>
                  </blockquote>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card bg-default shadow border-0">
                  <img src="img/carros/05.png" class="card-img-top" alt="image">
                  <blockquote class="card-blockquote">
                    <!-- Comentar esta linea si quieten eliminar la esquina de la imagen -->

                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                      class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default" />
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                    </svg>

                    <div class="descripcion">
                      <h4 class="display-3 font-weight-bold text-white">Chevrolet </h4>
                      <p class="lead text-italic text-white">Lujoso - Automático</p>
                    </div>
                    <div class="caracteristicas">
                      <p class="text-white"><i class="fas fa-snowflake"></i> A/A</p>
                      <p class="text-white"><i class="fas fa-road"></i> Kilometraje Ilimitado</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-square"></i> Rentar</a>
                  </blockquote>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card bg-default shadow border-0">
                  <img src="img/carros/06.png" class="card-img-top" alt="image">
                  <blockquote class="card-blockquote">
                    <!-- Comentar esta linea si quieten eliminar la esquina de la imagen -->

                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                      class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default" />
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                    </svg>

                    <div class="descripcion">
                      <h4 class="display-3 font-weight-bold text-white">Toyota Hiace</h4>
                      <p class="lead text-italic text-white">Grande - Automática</p>
                    </div>
                    <div class="caracteristicas">
                      <p class="text-white"><i class="fas fa-snowflake"></i> A/A</p>
                      <p class="text-white"><i class="fas fa-road"></i> Kilometraje Ilimitado</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm btn-block"><i class="fas fa-check-square"></i> Rentar</a>
                  </blockquote>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
          xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
  </div>
</main>


<?php require_once('../app/views/inc/footer.php'); ?>

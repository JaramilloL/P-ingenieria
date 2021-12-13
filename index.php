<?php
  session_start();

  require 'conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>Carrito</title>
    

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header class="container-fluid bg-dark position-sticky top-0">
      <ul
        class="nav nav-pills mb-3 py-3 container"
        id="pills-tab"
        role="tablist"
      >
        <!--<li class="nav-item text-primary" role="presentation">
          <a
            class="nav-link "
            id="pills-home-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-home"
            type="button"
            role="tab"
            aria-controls="pills-home"
            aria-selected="true"
            >Home</a
          >
        </li>-->
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="pills-contact-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-contact"
            type="button"
            role="tab"
            aria-controls="pills-contact"
            aria-selected="false"
            >Carrito</a
          >
        </li>
      </ul>
    </header>

    <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Producto Añadido al carrito!
    </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
      Producto removido!
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade "
        id="pills-home"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
      >
        1
      </div>
      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <h2 class="h4 m-4 text-primary">Productos</h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ALITAS</h5>
              <img src="./img/alitas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 100</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ALITAS MEDIANAS</h5>
              <img src="./img/alitas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ALITAS CHICAS</h5>
              <img src="./img/alitas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 30</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ALITAS ADOBADAS</h5>
              <img src="./img/alitasadobadas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 100</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ALITAS ADOBADAS MEDIANAS</h5>
              <img src="./img/alitasadobadas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ALITAS ADOBADAS CHICAS</h5>
              <img src="./img/alitasadobadas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 30</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">HAMBURGUESA CLASICA</h5>
              <img src="./img/amburguesa-clasica.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 70</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">HAMBURGUESA CHICA</h5>
              <img src="./img/amburguesa-clasica.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ARIZONA FRUIT PUNCH</h5>
              <img src="./img/arizona-fruit-punch.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ARIZONA MUCHO MANGO</h5>
              <img src="./img/arizona-mucho-mango.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ARIZONA SANDIA</h5>
              <img src="./img/arizona-sandia.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ARIZONA TE FRESA</h5>
              <img src="./img/arizona-te-fresa.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ARIZONA TE NEGRO</h5>
              <img src="./img/arizona-te-negro.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ARIZONA TE VERDE</h5>
              <img src="./img/arizona-te-verde.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">AROS DE CEBOLLA</h5>
              <img src="./img/aros-cebolla.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BHOEMIA</h5>
              <img src="./img/bohemia.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE DURAZNO</h5>
              <img src="./img/boing-durazno.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE FRESA</h5>
              <img src="./img/boing-fresa.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE GUAYABA</h5>
              <img src="./img/boing-guayaba.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE MANGO</h5>
              <img src="./img/boing-mango.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE MANZANA</h5>
              <img src="./img/boing-manzana.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE NARANJA</h5>
              <img src="./img/boing-naranja.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">BOING DE UVA</h5>
              <img src="./img/boing-uva.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">CHICKEN TENDERS</h5>
              <img src="./img/chicken-tenders.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">CHICKEN TENDERS CHICO</h5>
              <img src="./img/chicken-tenders.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 25</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">COCA COLA</h5>
              <img src="./img/coca-cola.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">COMBINADO CHICO</h5>
              <img src="./img/combinado-chico.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 25</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">COMBINADO MEDIANO</h5>
              <img src="./img/combinado-mediano.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 35</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">COMBINADO GRANDE</h5>
              <img src="./img/combinado-grande.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 60</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">COMBO BURGER</h5>
              <img src="./img/combo-burger.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">CORONA</h5>
              <img src="./img/corona.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">DEDOS DE QUESO</h5>
              <img src="./img/dedos.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 40</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">DEL VALLE DURAZNO</h5>
              <img src="./img/deValle-durazno.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">DEL VALLE MANZANA</h5>
              <img src="./img/deValle-manzana.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">ESTRELLITA</h5>
              <img src="./img/estrellita.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">FANTA</h5>
              <img src="./img/fanta.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">JUMEX DE DURAZNO</h5>
              <img src="./img/jumex-durazno.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">JUMEZ DE MANGO</h5>
              <img src="./img/jumex-mango.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">JUMEX DE MANZANA</h5>
              <img src="./img/jumex-manzana.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">MIRINDA</h5>
              <img src="./img/mirinda.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PALOMITAS DE POLLO</h5>
              <img src="./img/palomitas-pollo.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPAS BARBIQUES</h5>
              <img src="./img/papas-barbiquiur.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPA BARBIQUES CHICAS</h5>
              <img src="./img/papas-barbiquiur.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 25</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPAS BUFALO</h5>
              <img src="./img/papas-bufalo.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPAS BUFALO CHICAS</h5>
              <img src="./img/papas-bufalo.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 25</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPAS CHICAS</h5>
              <img src="./img/papas-chicas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPAS MEDIANAS</h5>
              <img src="./img/papas-medianas.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 30</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PAPAS GRANDES</h5>
              <img src="./img/papas-grandes.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">PEPSI</h5>
              <img src="./img/pepsi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">SEVEN UP</h5>
              <img src="./img/sevenUp.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">SIDRAL MUNDET</h5>
              <img src="./img/sidral-mundet.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">SPRITE</h5>
              <img src="./img/sprite.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-white-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 20</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>






        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success" name="comprar">COMPRAR</button>
        </div>
      </div>



      <div id="todo">
          <?php
            $servidor = "localhost";
            $username = "root";
            $password = "luis75jara10";
            $bd = "proyecto";
        
            $conexion = new mysqli($servidor, $username, $password, $bd);
        
            if($conexion->connect_error){
                die("Error connecting". $conexion->connect_error);
            }
          ?>
      </div>
      



      </div>
    </div>

    <footer class="bg-dark p-3 mt-5">
      <p class="text-center m-0 text-muted">JSON DEV - VANILLA JAVASCRIPT</p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
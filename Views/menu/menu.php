<?php
// This is your main page file, e.g., index.php
include __DIR__ . '../../taxi.php';  // Includes header content
?>
  
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.seguridadvialenlaempresa.com/media/blog/riesgos-taxista-1194x585-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pide un taxi</h5>
        <p>donde sea que estés.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Segunda diapositiva</h5>
        <p>Descripción de la segunda diapositiva.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tercera diapositiva</h5>
        <p>Descripción de la tercera diapositiva.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

      <div class="w-100 text-center" style="align-content: center;">
         <div style="font-size: 30px; font-weight: bold;" class="color01 my-4">
            Servicio de pedido de taxi ¡Seguro y fácil!
         </div>
         <form action="">
            <div class="px-4 mx-auto" style="width: 50%;">
               <div class="col-12 m-3">
                  <button class="btn bg_web01" type="button" >Pedir taxi</button>
                  <button class="btn bg_web01" type="button" >Afíliate</button>
               </div>
            </div>
         </form>
         
      </div>
    </div>
   <div class="d-flex">
   <div class="d-flex w-100 color01 my-5" style="justify-content: center;">
      <div class="mx-5" style="font-size: 30px;">
         Seguridad
      </div>
      <div style="font-size: 30px;" class="mx-5">
         Somos una empresa que prioriza la seguridad de sus clientes en cada uno de nuestros viajes
      </div>
   </div>
   </div>

<?php
include __DIR__ . '/../footer.php';  // Includes header content
?>
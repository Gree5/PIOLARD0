<?php
// This is your main page file, e.g., index.php
include 'Views\taxi.php';  // Includes header content
?>
   <div class="d-flex">
      <div class="w-100 text-center" style="align-content: center;">
         <div style="font-size: 30px; font-weight: bold;" class="color01 my-4">
            Iniciar Sesión
         </div>
         <form action="">
            <div class="px-4 mx-auto" style="width: 50%;">
               <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Correo Electrónico</label>
               </div>
               <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Contraseña</label>
               </div>
               <div class="col-12 m-3">
                  <button class="btn bg_web01" type="button" >Ingresar</button>
                  <a href="http://Views\taxi.php">Ingresar</a>
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
include 'Views\footer.php';
?>
   
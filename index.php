<?php
// This is your main page file, e.g., index.php
include 'Views\taxi.php';  // Includes header content
require_once 'conf\databsae.php';
?>

   <div class="d-flex">
      <div class="w-100">
<<<<<<< HEAD
         <img src="assets\img\pixelcut-export(9).jpeg" class="img-fluid w-100" alt="">
=======
         <img src="assets\img\pixelcut-export (9).jpeg" class="img-fluid w-100" alt="">
>>>>>>> c19650d0df69272a0631ef7115aae4baf0211b13
      </div>
      <div class="w-100 text-center" style="align-content: center;">
         <div style="font-size: 30px; font-weight: bold;" class="color01 my-4">
            Iniciar Sesión
         </div>
         <form action="conf\login.php" method="post">
            <div class="px-4 mx-auto" style="width: 50%;">
               <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="correoUser" name="mail_admin" required placeholder="name@example.com">
                  <label for="correoUser">Correo Electrónico</label>
               </div>
               <div class="form-floating">
                  <input type="password" class="form-control" id="contrasena" name="pass_admin" required placeholder="Password">
                  <label for="contrasena">Contraseña</label>
               </div>
               <div class="col-12 m-3">
                  <input type="submit" value="Iniciar sesión">
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
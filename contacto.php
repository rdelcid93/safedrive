<?php 
$page = 'contacto';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Examen Parcial</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <?php include('includes/_meta.php'); ?>

  </head>

  <body>

    <?php include('includes/_header.php'); ?>

  <!-- formulario-->

  <section class="d-flex justify-content-center align-items-center m-5">
        <div class="card shadow col-xs-12 p-4"> 
            <div class="mb-4 d-flex justify-content-start align-items-center">
              
                <h4>  <i class="bi bi-chat-left-quote"></i> &nbsp; Contacto</h4>
            </div>
            <div class="mb-1">
                <form id = "contacto" >
                    <div class="mb-4 d-flex justify-content-between"> 
                        <div>
                            <label for="nombre"> <i class="bi bi-person-fill"></i> Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder= "Gabriel" required>
                            <div class="nombre text-danger "></div>
                        </div>
                        <div >
                            <label for="apellido"> <i class="bi bi-person-bounding-box"></i> Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder= "Pacheco" required>
                            <div class="apellido text-danger"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="correo"><i class="bi bi-envelope-fill"></i> Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder= "gpmcheco@mail.com" required>
                        <div class="correo text-danger"></div>
                        
                    </div> 
                    <div class="mb-4">
                        <label for="sexo"><i class="bi bi-gender-ambiguous"></i> Sexo: </label>
                        <input type="radio" class="form-check-input"  name="sexo"  value="masculino" > Masculino
                        <input type="radio" class="form-check-input" name="sexo"  value="femenino" > Femenino
                        <div class="sexo text-danger"></div>
                    </div>  
                    <div class="mb-4">
                        <label for="mensaje"> <i class="bi bi-chat-right-dots-fill" required></i> Mensaje</label>
                        <textarea name="mensaje" id="mensaje" class="form-control" placeholder="hola"></textarea>
                        <div class="mensaje text-danger"></div>
                    </div> 
                    
                    <div class="mb-2">
                        <button id ="botton" class="col-12 btn btn-secondary d-flex justify-content-between ">
                            <span>Enviar </span><i id="icono" class="bi bi-cursor-fill "></i>
                        </button>
                    </div> 
                              
                </form>
            </div>
        </div>

  </section>
    <?php include('includes/_footer.php'); ?>

    <?php include('includes/_scripts.php'); ?>


</body>


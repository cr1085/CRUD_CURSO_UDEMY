<?php
session_start();

if(!isset($_SESSION['user'])){
header('Location: http://localhost:3000/view/login.php');
}

?>
<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">  

<!-- LIBRERÍAS EXTERNAS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript" ></script>


<title>CRUD PHP</title>

<a href="#" id="logout">salir</a>
</head>
<body>

<!-- ACORDEON -->
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Registrar persona
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
      <form class="row g-3" id="formularioPersona" name="formularioPersona" method="POST" action="#">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Dni</label>
    <input type="text" class="form-control-plaintext" id="dni" name="dni" placeholder="dni">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Nombre completo</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
  </div>
  <div class="col-auto">
    <!-- <button type="button" id="save" name="save" class="btn btn-primary mb-3">Guardar</button> -->
  <a href="#" id="save" class="btn btn-info">Guardar</a>
  </div>
</form>

      </div>
    </div>
  </div>  
</div>
<!-- END ACORDEON -->

<!-- TABLE -->
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DNI</th>
      <th scope="col">EMAIL</th>
      <th scope="col">NOMBRE</th>
      <th scope="col" style="background: blue; color:white;">update</th>
      <th scope="col" style="background: red; color:white;">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
      <!-- <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td> -->
      <!-- <td><button class="btn btn-info">O</button></td>
      <td><button class="btn btn-danger">X</button></td> -->
    </tr>
   
  </tbody>
</table>
<!-- END TABLE -->
<div id="paginar">
  <a href="#" id="siguiente">Siguiente</a>
  <a href="#" id="anterior">Anterior</a>
</div>
<!-- end paginar  -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal update</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <form id="formUpdate" method="POST" action="#">
        
        <input type="text" id="nUpdate" name="nUpdate" placeholder="Nombre">
        <input type="email" id="eUpdate" name="eUpdate" placeholder="Email">
        
        <a href="#" id="btnUpdate" class="btn btn-success">Update</a>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- END MODAL -->



<!-- LIBRERÍAS LOCALES -->
<link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="./js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./js/ajax.js" type="text/javascript"></script>
</body>
<foot>

</foot>
</html>
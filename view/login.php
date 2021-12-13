<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript" ></script>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<div class="login">    
<form >
  <div class="form-group" >
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
     </div>
  <div class="form-group">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
  </div>
  <a href="#" id="btnLogin" class="btn btn-info">Ingresar</a> 
  <a href="./registro.php" id="btnRegistro" class="registro btn btn-success" >Registrar</a>
</form>
</div>

<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="../css/login.css" rel="stylesheet">
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/ajax.js" type="text/javascript"></script>
</body>
</html>
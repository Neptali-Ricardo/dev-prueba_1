<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto</title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Precios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Trabajos realizados
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
    <div class="titulo" >
            <div class="titulo-contacto" >
                <h2>Contacto</h2>
                <div class="contacto" >
                    <h3>Nepta</h3>
                    <h4>Diseño Web Madrid</h4>
                    <br>
                    <a class="telefono" href="">645 89 83 13</a>
                    <br>
                    <br>
                    <p>L-V de 10-14h y de 16-20h</p>
                    <br>
                    <a href="">Dirección postal</a>
                    <p>Paracuellos de Jarama, 28860 Madrid</p>
                    <br>
                    <p>Escríbenos a:<a href="https://www.neprcm@gmail.com"> neprcm@gmail</a></p>
                    <br>
                    <p>O si lo prefieres, puedes contactar con nosotros por medio del formulario a continuación y te contactaremos lo antes posible.</p>   
                </div>
            </div>
            <div class="wrap">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <h3>Tus datos</h3>

                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y apellidos" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
                
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Email" value="<?php if(!$enviado && isset($correo)) echo $correo?>">
                    
                    <input type="text" class="form-control" name="movil" id="movil" placeholder="Móvil" size="9" value="">


                    <p>¿En qué te podemos ayudar?</p>

                    <select class="lista" name="OS">
                        <option selected value="0"> Escoge un servicio </option>
                            <option value="1">Desarrollo de tienda online</option> 
                            <option value="2">Mantenimiento web</option> 
                            <option value="3">Diseño web a medida</option> 
                            <option value="4">Desarrollo de apps</option> 
                            <option value="5">Otras consultas</option> 
                        </optgroup> 
                    </select>
                
                    <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="1">
                        <label class="form-check-label" for="conditions">He leído y acepto el <a href="">aviso legal</a> y <a href="">política de privacidad</a></label>
                    </div>

                    <p>En Sitelabs respetamos tu privacidad. Sólo usamos tus datos para contactarte con
                       respecto a los servicios por los que te has interesado, nunca compartiremos ni venderemos tu información.</p>


                    <?php if (!empty($errores)): ?>
                        <div class="alert error">
                            <?php echo $errores; ?>
                        </div>
                    <?php elseif($enviado): ?>
                        <div class="alert success">
                            <p>Enviado Correctamente</p>
                        </div>
                    <?php endif ?>

                    <input type="submit" name="submit" class="btn btn-primary" value="Enviar">


                </form>
            </div>
    </div>
</body>
</html>


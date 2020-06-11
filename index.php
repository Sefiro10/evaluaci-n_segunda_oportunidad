<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todas_materias</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <nav id="main-nav">
            <div>Aquí va el logo</div>
            <a href="#"> <i class=" fas fa-sign-out-alt fa-3x"></i> </a>
        </nav>
    </header>
    <main>
        
        <section class="page-content">
            <div class="container pt-3 text-center">
				
				<div class="modal-dialog text-center">
		
	
		<div class= "col-sm-8 main-section">
                <div class="modal-content">	

				<div class="col-12 user-img">
					<i class="user fas fa-user"></i>
				</div>

				<?php 
					if (isset($_GET['res'])) {
						if($_GET['res']== 'error'){
				?>				<div class="alert alert-danger" role="alert">
				  				Usuario o contraseña incorrecto
								</div>
				<?php					}
					}
				?>
				
				<form class="col-12" action="checkLogin.php" method="post">
					
					<div class="form-group">	
						<input type="Text" maxlength="30" size="30" class="form-control" placeholder="Usuario" name="usuario">
					</div>
					
					<div class="form-group">
						<input type="Password" maxlength="30"class="form-control" placeholder="Contraseña" size="30" name="contrasena">
					</div>
					
					<button class="btn" type="submit"><i class="fas fa-sign-in-alt"> </i> Ingresar</button>				

				</form>
				<button class="btn" onclick="location.href='formulario.php'"><i class="fas fa-sign-in-alt"> </i> Registrar </button>

			</div>
            </div>
        </section>
    </main>

 	    <footer>
        <div>
            <p class="bold">Programación Web Avanzada</p>
            <p>Mayo 2020 &copy;</p>
        </div>
    </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
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
        <aside class="selection-panel pt-5">
            <h3>Panel De Selección</h3>
            <nav id="side-nav">

            </nav>
        </aside>
        <section class="page-content">
            <div class="container pt-2 text-center">
                <h1>Nuevo Estudiante</h1>

		  <div class="form_1">
		    	<input type="text" name="uName" placeholder="Nombre de Usuario">
			 	<input type="text"  name="pwd" placeholder=Contraseña>
		  </div>
				
		  <div class="form_1">
			
				<input type="text"  name="lstName" placeholder=Nombre>
				<input type="text"  name="cusName" placeholder=Apellido>
		  </div>
		  <div class="form_1">
			
				<input type="text"  name="eml" placeholder=Correo Electronico>
		  </div>


		<br>		  
                  <div class="form_bottom">
                     <input type="submit" value="Agregar">
					  
                     <form action="login.php" style="margin-top: 20px"><input type="submit" value="Cancelar"></form>
                  </div>
		</form>
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
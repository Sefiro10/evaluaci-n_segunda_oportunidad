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
	
	
	  <?php
	$materiasEnHorario=array();
	if(isset($_GET['idM'])){
		
		
	}
  ?>
	
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
                <a href="mis_materias.php" class="active">Mis Materias</a>
                <a href="todas_materias.php">Todas las Materias</a>                
				<a></a><a></a><a></a><a></a>
				<a href=>Salir</a>
            </nav>
        </aside>
        <section class="page-content">
            <div class="container pt-3 text-center">
                <h1>Materias</h1>                
                <i class="fas fa-user-plus fa-3x add"></i>
				
				
            
				<div class="table-responsive">
                <table class="table ">
  <thead class="thead-dark">
    <tr>
    	<th scope="col">Agregar</th>
      	<th scope="col">ID Materia</th>
		<th scope="col">Clave Maestro</th>
		<th scope="col">Clave Carrera</th>
		<th scope="col">Nombre Materia</th>
		<th scope="col">Grupo</th>
		<th scope="col">Lunes Hora</th>
		<th scope="col">Lunes Aula</th>
		<th scope="col">Martes Hora</th>
		<th scope="col">Martes Aula</th>
		<th scope="col">Miercoles Hora</th>
		<th scope="col">Miercoles Aula</th>
		<th scope="col">Jueves Hora</th>
		<th scope="col">Jueves Aula</th>
		<th scope="col">Viernes Hora</th>
		<th scope="col">Viernes Aula</th>

    </tr>
  </thead>
  <tbody>
	
	  <?php	include_once 'conexion.php';
		session_start();
	  $usuario=$_SESSION['id_usuario'];
		$db = new Database();
	  
	  $query = $db->connect()->prepare( "SELECT id_alumno from horario_temporal where id_alumno = :usuario");
                    $query->execute(['usuario'=>$usuario]);
                    $datos= $query->fetch(PDO::FETCH_OBJ);
                    
                     if ($datos->id_alumno !="") {
                        
                        
                       
                     }else{
                            $query = $db->connect()->prepare( "insert into horario_temporal (id_alumno) values (:usuario)
                   ");
                   
                    try{
                        $datos= $query -> execute(['usuario'=>$usuario]);

                    }catch (Exception $e){
                        echo "<script>
                        alert('no');
                        
                        </script>";
                    }
                  
                
                    }
	  
	  
	  
	  
		$conexion = $db->connect()->prepare("select * from materias");
		$conexion->execute([]);
 		 while($filas = $conexion->fetch(PDO::FETCH_OBJ)){
			 $materias[]=$filas;
			 
		 }
  ?>
	  
	  
    
     <?php
	 
		foreach($materias as $mat){?>
	  <tr>
	  <?php
		if(in_array('$mat->id_materia',$materiasEnHorario)){
	  ?>
			
			
				<td><button onClick="location.href='todas_materias.php?idM=<?php echo $mat->id_materia; ?> '" type="button" class="btn btn-warning">eliminar</button></td>
				
				
			<?php
		
	 	}else{?>
			<td><button onClick="location.href='todas_materias.php?idM=<?php echo $mat->id_materia; ?>'" type="button" class="btn btn-primary">Agregar</button></td>
			 
			<?php
			 }
			 echo "<td>".$mat->id_materia." </td>";
			 echo "<td>".$mat->clave_maestro."</td>";
			 echo "<td>".$mat->clave_carrera." </td>";
			 echo "<td>".$mat->materia." </td>";
			 echo "<td>".$mat->grupo." </td>";
			 echo "<td>".$mat->lunes_hora."</td>";
			 echo "<td>".$mat->lunes_aula." </td>";
			 echo "<td>".$mat->martes_hora." </td>";
			 echo "<td>".$mat->martes_aula." </td>";
			 echo "<td>".$mat->miercoles_hora." </td>";
			 echo "<td>".$mat->miercoles_aula."</td>";
			 echo "<td>".$mat->jueves_hora." </td>";
			 echo "<td>".$mat->jueves_aula." </td>";
			 echo "<td>".$mat->viernes_hora." </td>";
			 echo "<td>".$mat->viernes_aula."</td>";
			
			
			
		
  ?>
      
    </tr>
	   <?php
		}
		
  ?>
    
  </tbody>
</table>
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
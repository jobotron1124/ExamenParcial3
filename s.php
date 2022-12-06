<?php
	
	$conectar=@mysql_connect('localhost','root','');
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('formulario');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	
	$Titulo=$_POST['Titulo'];
	$Imagen=$_POST['Imagen'];
	$Descripcion=$_POST['Descripcion'];
    $Nombredelautor=$_POST['Nombre del autor'];
    $Fechadepublicacion=$_POST['Fecha de publicacion'];
	$sql="INSERT INTO datos VALUES('$Titulo',
								   '$Imagen',
								   '$Descripcion',
                                   '$Nombredelautor',
                                   '$Fechadepublicacion',)";
	
	$ejecutar=mysql_query($sql);
	
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='Form.html'>Volver</a>";
	}
?>
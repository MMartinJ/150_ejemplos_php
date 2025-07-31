<?php
//******LEER
$archivo = fopen( "productos.csv", "rb" );
$aDatos = fgetcsv( $archivo, 100, ";");

// Volvemos a situar el puntero al principio del archivo:
fseek($archivo, 0);
// Recorremos el archivo completo:

     while( feof($archivo) == false )
     {    
	    $aDatos = fgetcsv( $archivo, 100, ";");

		if ($aDatos[0] <=0 ) { //  paro busqueda cuando no exista id		
		 exit; //dejo de buscar	
   		  }

		//Titulos de la tabla
		echo "<table border='1'>";
		echo "<tr>";
		echo "  <th> PRODUCTO </th>";
		echo "  <th> CONCEPTO </th>";
		echo "  <th> PRECIO   </th>";
		echo "</tr>";

		//Matriz con los campos de texto del producto
		echo "<tr>  <td>" . $aDatos[0] . "</td> <td>" . $aDatos[1] ."</td> <td>" . $aDatos[2]. "</td> <td>". $aDatos[3]."</td> <td>". $aDatos[4]."</td>  </tr>" ;
		//Imagen con link

		//cargo el ID para gestionar la compra
	//	echo '<td> <a href="compra.php?id='.$id.'"><img src='.$aDatos[4].' width="284" height="67"" ></a> </td> </tr>';
		
		//cargo ruta de la imagen con su link para verla en grande
	//	echo '<td> <a href="'.$aDatos[4].'"><img src='.$aDatos[4].' width="284" height="67"" ></a> </td> </tr>';

		//Cierro la tabla y las celdas
    }

    fclose( $archivo );
		echo "</table>"; //cierro tabla
?>
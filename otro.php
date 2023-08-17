<?php
/*...*/

 $nombre='Estefania';
 $fecha=date('d/n/Y');
 $hora=date('H:i:s');
 $precio=5;
 $cantidad=10;
 define("MINOMBRE", "ESTEFANIA ESCUDERO");

 const OTRONOMBRE="Diego Zaballos";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p> Hola <?=$nombre;?> </p>
<p> Hoy es <?=$fecha;?> </p>
<p> Y son las <?=$hora;?> </p>
<p>El total es <?=$precio+$cantidad;?> € </p>

<?php echo"Mi nombre es ", MINOMBRE, "<br/>" , "El nombre del alumno es ", OTRONOMBRE;
?>



</body>
</html>
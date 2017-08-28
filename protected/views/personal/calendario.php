
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <title>Calendario de pruebas</title>

  <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="calendar-green.css" title="win2k-cold-1" />
 <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="calendar-green.css" title="win2k-cold-1" />

  <!-- librería principal del calendario -->
 <script type="text/javascript" src="calendar.js"></script>

 <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="lang/calendar-es.js"></script>

  <!-- librería que declara la funci&eacute;n Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de c&eacute;digo -->
  <script type="text/javascript" src="calendar-setup.js"></script> 
</head>

<body>

<!-- formulario con el campo de texto y el bot&eacute;n para lanzar el calendario-->
<form action="#" method="get">
<input type="text" name="date" id="campo_fecha"  size="8"/>
<input type="button" id="lanzador" value="..." />
</form>

<!-- script que define y configura el calendario-->
<script type="text/javascript">
   Calendar.setup({
    inputField     :    "campo_fecha",     // id del campo de texto
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador"     // el id del bot&eacute;n que lanzará el calendario
});
</script>

</body>
</html> 
<!DOCTYPE html>
<html>
<header>
<script>
$.ajax({
  url: 'https://randomuser.me/api/',
  dataType: 'json',
  success: function(data) {
    console.log(data);
  }
});
</script>
</header>
<body>

<?php
$i = 0;
$namelist = array (
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
  array("Nombre","G","Geolocacion","email","FechaNac","photo.jpg"),
);

while ($i < 10){
echo "Nombre completo: ".$namelist[$i][0].".<br> Genero: ".$namelist[$i][1].".<br> Ubicación: ".$namelist[$i][2].".<br> Correo electrónico: ".$namelist[$i][3].".<br> Fecha de Nacimiento: ".$namelist[$i][4].".<br><img src='".$namelist[$i][5]."'><br><br>";
}
?>

</body>
</html>

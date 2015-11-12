<?php

# extraer la ubicacion  (latitud y longitud)
# desde Google Maps
# 
 
function CLIMA($latitud,$longitud)
{ $url = "http://api.openweathermap.org/data/2.5/weather?lat=$latitud&lon=$longitud&units=metric";
 # --------------------
 $clima = file_get_contents($url);
 $json = json_decode($clima);
 $temperatura = $json->main->temp;
 #    $temperaturamax = $json->main->temp_max;
 #    $temperaturamin = $json->main->temp_min;
 #    $presion = $json->main->pressure;
 #   $humedad = $json->main->humidity;
 #    $viento = $json->main->speed;
 return $temperatura;
}

# uso:
# A partir de Google Maps determinar coordenadas de Ciudad
# Ejemplo Valencia:  
# $temp = CLIMA(10.1899119,68.0058938);
# echo $temp;

?>

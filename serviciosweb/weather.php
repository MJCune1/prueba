<?php 
  $xml = simplexml_load_file("http://xml.tutiempo.net/xml/70140.xml") or die("there was a problem creating the object");
  echo "Localidad: ".$xml->localidad->nombre."<br>";
  echo "Pais: ".$xml->localidad->pais."<br>";
  echo "<strong> Pronostico del tiempo</strong><br>";
  echo "Fecha: ".$xml->pronostico_dias->dia[0]->fecha."<br>";
  echo "temperatura máxima: ".$xml->pronostico_dias->dia[0]->temp_maxima."<br>";
  echo "temperatura minima: ".$xml->pronostico_dias->dia[0]->temp_minima."<br>";
  echo "salida del sol: ".$xml->pronostico_dias->dia[0]->salida_sol."<br>";
  echo "puesta del sol: ".$xml->pronostico_dias->dia[0]->puesta_sol."<br>";
  echo "salida de la luna: ".$xml->pronostico_dias->dia[0]->salida_luna."<br>";
  echo "puesta de la luna: ".$xml->pronostico_dias->dia[0]->puesta_luna."<br>";
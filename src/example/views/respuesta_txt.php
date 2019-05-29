<?php
$envio=$_SESSION["datos_envio_txt"];

//Usamos esta línea para saber lo que estamos generando.
//print_r(explode('|', $envio));

$datos_especificos=(explode('|', $envio));

if ($datos_especificos[0]=="errors") {
	//Mostramos los errores si los hay
    print $datos_especificos[1];
} else {
  $cadena_codigo_qr=$datos_especificos[25]."|".$datos_especificos[26]."|".$datos_especificos[27]."|".$datos_especificos[28]."|".$datos_especificos[29]."|".$datos_especificos[30]."|".$datos_especificos[31]."|".$datos_especificos[32]."|".$datos_especificos[33]."|".$datos_especificos[34];
	//Mostramos la respuesta
print"<h2>RESPUESTA DE SUNAT</h2>";
print"   <table border='1' style='border-collapse: collapse'>";
print"        <tbody>";
print"           <tr><th>tipo:</th><td>".$datos_especificos[1]."</td></tr>";
print"            <tr><th>serie:</th><td>".$datos_especificos[3]."</td></tr>";
print"            <tr><th>numero:</th><td>".$datos_especificos[5]."</td></tr>";
print"            <tr><th>enlace:</th><td>".$datos_especificos[7]."</td></tr>";
print"            <tr><th>aceptada_por_sunat:</th><td>".$datos_especificos[9]."</td></tr>";
print"            <tr><th>sunat_description:</th><td>".$datos_especificos[11]."</td></tr>";
print"            <tr><th>sunat_note:</th><td>".$datos_especificos[13]."</td></tr>";
print"            <tr><th>sunat_responsecode:</th><td>".$datos_especificos[15]."</td></tr>";
print"            <tr><th>sunat_soap_error:</th><td>".$datos_especificos[17]."</td></tr>";
print"            <tr><th>pdf_zip_base64:</th><td>".$datos_especificos[19]."</td></tr>";
print"            <tr><th>xml_zip_base64:</th><td>".$datos_especificos[21]."</td></tr>";
print"            <tr><th>cdr_zip_base64:</th><td>".$datos_especificos[23]."</td></tr>";
print"            <tr><th>codigo_hash:</th><td>".$cadena_codigo_qr."</td></tr>";
print"            <tr><th>codigo_hash:</th><td>".$datos_especificos[37]."</td></tr>";
print"        </tbody>";
print"    </table>";
}

 ?>

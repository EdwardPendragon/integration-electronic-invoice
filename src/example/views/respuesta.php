<?php
$envio=$_SESSION["datos_envio"];
if (isset($envio['errors'])) {
	//Mostramos los errores si los hay
    echo $envio['errors'];
} else {
	//Mostramos la respuesta
print"<h2>RESPUESTA DE SUNAT</h2>";
print"   <table border='1' style='border-collapse: collapse'>";
print"        <tbody>";
print"           <tr><th>tipo:</th><td>".$envio['tipo_de_comprobante']."</td></tr>";
print"            <tr><th>serie:</th><td>".$envio['serie']."</td></tr>";
print"            <tr><th>numero:</th><td>".$envio['numero']."</td></tr>";
print"            <tr><th>enlace:</th><td>".$envio['enlace']."</td></tr>";
print"            <tr><th>aceptada_por_sunat:</th><td>".$envio['aceptada_por_sunat']."</td></tr>";
print"            <tr><th>sunat_description:</th><td>".$envio['sunat_description']."</td></tr>";
print"            <tr><th>sunat_note:</th><td>".$envio['sunat_note']."</td></tr>";
print"            <tr><th>sunat_responsecode:</th><td>".$envio['sunat_responsecode']."</td></tr>";
print"            <tr><th>sunat_soap_error:</th><td>".$envio['sunat_soap_error']."</td></tr>";
print"            <tr><th>pdf_zip_base64:</th><td>".$envio['pdf_zip_base64']."</td></tr>";
print"            <tr><th>xml_zip_base64:</th><td>".$envio['xml_zip_base64']."</td></tr>";
print"            <tr><th>cdr_zip_base64:</th><td>".$envio['cdr_zip_base64']."</td></tr>";
print"            <tr><th>codigo_hash:</th><td>".$envio['cadena_para_codigo_qr']."</td></tr>";
print"            <tr><th>codigo_hash:</th><td>".$envio['codigo_hash']."</td></tr>";
print"        </tbody>";
print"    </table>";
}

 ?>

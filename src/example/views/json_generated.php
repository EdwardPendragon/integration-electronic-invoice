<?php
include_once("../../tools/send_nubefact.php");
$sn = new send_nubefact();

if (isset($_POST["btnjson"])){
//Creando este render para múltiples archivos
function Respuesta_print($filename) {
  ob_start();
  include $filename;
  return ob_get_clean();
}

$directorio_base = __DIR__."/JSON-Files" ;
$dir_handle = opendir($directorio_base);

while(($archivo = readdir($dir_handle)) !== false) {
  $dir = $directorio_base . '/' . $archivo;
  //echo $ruta . PHP_EOL;
  if(is_file($dir)) {
      $ext = pathinfo($dir, PATHINFO_EXTENSION);
      if($ext == 'txt') {
        //echo $dir;
        $file = file_get_contents($dir) or exit("Unable to open file!");
        $_SESSION["datos_envio"]= $sn->SendNubeFacTJson($file);

        print"<table>";
        print"<tr>";
        print"<td>";
        print"<textarea rows='25' cols='40'>".$file."</textarea>";
        print"</td>";
        print"<td>";
        print Respuesta_print('respuesta.php');
        print"</td>";
        print"</tr>";
        print"</table>";
      }
  }
}
closedir($dir_handle);

}
else{
    header('location: ../index_generate_json.php');

 }

 ?>

<?php

class send_nubefact{
public function My_Ruta(){
  $ruta="http://localhost:3000/api/v1/9f9790ba-1c22-4f2f-9eca-b1b136731442";
  return $ruta;
}

public function My_Token(){
  $token="9de1ab4ccb4b4e14852821605b0d937813d7535f9b3445daac3ae3e60acae0eb";
  return $token;
}


public function SendNubeFacTJson($data){
  $data_json = $data;
  //Invocamos el servicio de NUBEFACT
 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $this->My_Ruta());
  curl_setopt(
  	$ch, CURLOPT_HTTPHEADER, array(
  	'Authorization: Token token="'.$this->My_Token().'"',
  	'Content-Type: application/json',
  	)
  );
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $respuesta  = curl_exec($ch);
  curl_close($ch);

  $leer_respuesta = json_decode($respuesta, true);
  return $leer_respuesta;
 }



 public function SendNubeFacTTxt($data){
   //$data_txt = json_encode($data);
   $data_txt = $data;
   //Invocamos el servicio de NUBEFACT
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $this->My_Ruta());
   curl_setopt(
    $ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Token token="'.$this->My_Token().'"',
    'Content-Type: text/plain',
    )
   );
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_POSTFIELDS,$data_txt);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $respuesta  = curl_exec($ch);
   curl_close($ch);

   $leer_respuesta = $respuesta;
   return $leer_respuesta;
  }





}

?>

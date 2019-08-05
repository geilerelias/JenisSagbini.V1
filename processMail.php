<?php

$datos = array(
        'estado' => 'alo aqui ',
        'tipo' => 'ihsdkd',
        'titulo' => 'sdkjshdj' , 
        'mensaje' => 'jsbdmsd'
        );
        //
        
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $EmailTo = "contacto@jenissagbini.com";
    $Subject = "New Message Received";
    
   
    // prepare email body text
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";
     
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
     
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";
    
    // send email
    $success = mail($EmailTo, $Subject, $Body, "From:".$email);
    
    // redirect to success page
    if ($success==1){
        $datos = array(
            'estado' => true,
            'tipo' => 'success',
            'titulo' => "Mensaje enviado correctamente",
            'mensaje' => "Muy pronto me pondre en contacto con tigo. ðŸ˜Š"
            );
    }else{
         $datos = array(
            'estado' => false,
            'tipo' => 'error',
            'titulo' => "Mensaje no enviado",
            'mensaje' => "Algo ha salido mal en el envio, Vuelve a intentarlo ðŸ˜¥"
            );
    }
    
}else{
    $datos = array(
            'estado' => false,
            'tipo' => 'error',
            'titulo' => 'Mensaje no enviado',
            'mensaje' => "Datos de envio Incorrectos"
            );
}  
        
header('Content-type: application/json');
echo json_encode($datos);
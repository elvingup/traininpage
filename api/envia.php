<!-- função que envia a mensagem de contato -->
<?php 

if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])){
    $to = 'elvyngthon@gmail.com';
    $subject = 'Contato para Web Dev Full Stack';
    $message = 'hello';
    $headers = 'From: contato@elvyngthon.com'."\r\n".'Reply-To: contato@elvyngthon.com'."\r\n".'X-Mailer: PHP'.phpversion();

    if(mail($to,$subject,$message,$headers)){
        echo json_encode(["status" => "success", "message" => "A mensagem enviado com sucesso."]);
    }else{
        echo json_encode(["status" => "erro", "message" => "Não foi possível enviar a mensagem."]);
    }
}else{
    echo json_encode(["status" => "erro", "message" => "Nenhum dado foi enviado."]);
}
?>
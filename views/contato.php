<div class="row pt-5">
  <div class="col">
    <h3>
      Procure o Profissional através do seguinte contato por mensagem:
    </h3>
  </div>
</div> 

<form action="#####" id="enviaEmail">
  
  <div class="row">
    
    <div class="col-sm-12 col-md-6">
      <label for="nome" class="form-label">Nome: </label>
      <input type="text" class="form-control" name="nome" required>
    </div>

    <div class="col-sm-12 col-md-6">
      <label for="email" class="form-label">e-mail: </label>
      <input type="email" class="form-control" name="email" required>
    </div>

    <div class="col-12 mt-2">
      <label for="mensagem" class="form-label">Escreva a sua mensagem: </label>
      <textarea name="mensagem" rows="3"></textarea>
    </div>

    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-success">
        <b>ENVIAR A MENSAGEM AGORA</b>
      </button>
    </div>

    <div class="resultado"></div>
  </div>
</form>

<!-- https://code.jquery.com/jquery-3.7.1.min.js -->

<!-- 
    <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
 -->

 <!-- https://www.php.net/manual/pt_BR/function.mail.php 

$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
-->
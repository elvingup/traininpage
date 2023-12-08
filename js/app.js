// Escopo do jQuery
    // objetivo: enviar a mensagem de contato formatada como json. Se falhar: usa o alert para exigir a mensagem de erro
    $(function(){

        $(document).on('submit', "#enviaEmail", function(){
            $.ajax({
                url: URL+'api/envia.php',
                type:'POST',
                dataType: 'JSON',
                data: $(this).serialize(),
                success: function(retorno){
                    if(retorno.status == 'success'){
    
                    }else{
                        $('.resultado').html(`
                        <div class"alert alert-primary" role="alert">${retorno.message}</div>
                        `)
                    }
                }
            })
    
            return false;
        })
    })
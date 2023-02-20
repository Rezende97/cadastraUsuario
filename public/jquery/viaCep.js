// busca o cep da residencia e preencher os campos dinamicamente
$('#cep').keyup(function (e) { 

    const cep = $('#cep').val();

    $.ajax({
        url: "https://viacep.com.br/ws/" + cep + "/json/", 
        success: function(result){
            $('#rua').val(result.logradouro)
            $('#bairro').val(result.bairro)
            $('#estado').val(result.uf)
        }
    });
});


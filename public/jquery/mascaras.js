$(document).ready(function () { 

    $("#documento").mask('000.000.000-00', {reverse: true});
    $("#rg").mask('00.000.000-00', {reverse: true});
    $("#telefone").mask('(00)00000-0000', {reverse: true});

});

// função validar tem como objetivo realizar validações nos campos por quantidade
function validar(selector, quantCaracter) { 

    selector.keydown(function (e) { 
        if(e.length > quantCaracter){
            return false
        }
    });

}


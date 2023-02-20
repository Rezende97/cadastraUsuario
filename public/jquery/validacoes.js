$(document).ready(function () { 
   
    validar($('#documento'), 11);
    validar($('#rg'), 9)
    
});

// função validar tem como objetivo realizar validações nos campos por quantidade
function validar(selector, quantCaracter) { 

    $(selector).keydown(function (e) { 
        
        if ($(selector).val() == quantCaracter) {
            
            Swal.fire('Máximo de digito permitidos são '+quantCaracter+'!')
            return false
        }

    });

}


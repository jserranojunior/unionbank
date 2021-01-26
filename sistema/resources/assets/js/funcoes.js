// MASCARAS

$(document).ready(function(){
    /* TELEFONE */
    $('.telefone_mascara').mask('(00) 0000-00009');
    /* CPF */
   // $('.cpf_mascara').mask('000.000.000-00');  

    /* DATA */
    $('.data_mascara').mask('00/00/0000');
    $('.data_completa_mascara').mask('00/00/0000 00:00:00');

    /* DINHEIRO */
    $('.dinheiro_mascara').mask('000.000.000.000.000,00', {reverse: true});
});


// jQuery Mask Plugin v1.14.11
// github.com/igorescobar/jQuery-Mask-Plugin

var cpfMascara = function (val) {
    return val.replace(/\D/g, '').length > 11 ? '00.000.000/0000-00' : '000.000.000-009';
 },
 cpfOptions = {
    onKeyPress: function(val, e, field, options) {
       field.mask(cpfMascara.apply({}, arguments), options);
    }
 };
 $('.cpf_mascara').mask(cpfMascara, cpfOptions);

    // FIM MASCARAS

   //  $('.bd-example-modal-lg').modal('show')
   

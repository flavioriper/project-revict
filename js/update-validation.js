//Update Form submit and success alert
var frm1 = $("#update-req");
frm1.submit(function(ev) {
    if ($("#phone").val().toString().length < 10 || $("#phone").val().toString().length > 11) {
        alert('Telefone Inválido! Código de área + número');
        return false;
    }
    if ($("#cpf").val().toString().length != 11) {
        alert('Cpf inválido!');
        return false;
    }
    if ($("#zip").val().toString().length < 8) {
        alert('CEP inválido!');
        return false;
    }
    var teste = $("#update-req").serializeArray();
    ev.preventDefault();
    console.log(teste);
    $.ajax({
        type: frm1.attr('method'),
        url: frm1.attr('action'),
        data: teste,
        success: function(data) {
            $('#success-alert').replaceWith('<div class="alert alert-success alert-dismissible fade show" role="alert">Cadastro atualizado com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        }
    })
})

//Delete form submit and success alert
var frm2 = $("#delete-req");
frm2.submit(function(ev) {
    var teste = $("#delete-req").serializeArray();
    ev.preventDefault();
    $.ajax({
        type: frm2.attr('method'),
        url: frm2.attr('action'),
        data: teste,
        success: function(data) {
            $('#success-alert').replaceWith('<div class="alert alert-danger alert-dismissible fade show" role="alert">Cadastro excluido!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        }
    })
})
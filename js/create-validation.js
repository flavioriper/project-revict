var frm = $("#teste");
frm.submit(function(ev) {
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
    var teste = $("#teste").serializeArray();
    ev.preventDefault();
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: teste,
        success: function(data) {
            $('#success-alert').replaceWith('<div class="alert alert-success alert-dismissible fade show" role="alert">Cadastro inserido com sucesso!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        }
    })
    $(this).each (function(){
        this.reset();
    });
})
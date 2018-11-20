//Create form and success alert
var frm = $("#create-req");
frm.submit(function(ev) {
    if ($("#phone").val().toString().length < 10 || $("#phone").val().toString().length > 11) {
        alert('Invalid phone! Try area cod + number');
        return false;
    }
    if ($("#cpf").val().toString().length != 11) {
        alert('Invalid CPF!');
        return false;
    }
    if ($("#zip").val().toString().length < 8) {
        alert('Invalid ZIP!');
        return false;
    }
    var teste = $("#create-req").serializeArray();
    ev.preventDefault();
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: teste,
        success: function(data) {
            $('#success-alert').replaceWith('<div class="alert alert-success alert-dismissible fade show" role="alert">Successfully created register!<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button></div>');
        }
    })
    $(this).each (function(){
        this.reset();
    });
})
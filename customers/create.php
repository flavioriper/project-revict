<?php 
    require_once '../config.php';
    require 'functions.php'; 
    insert();
?>
<?php include (HEADER_TEMPLATE); ?>

<form action="create.php" method="post">
<div class="row m-5 p-5">
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name ="name" placeholder="Nome Completo" aria-label="name" aria-describedby="basic-addon2" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name ="phone" placeholder="XX-XXXX-XXXX" aria-label="phone" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Telefone</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name ="cpf" placeholder="XXX.XXX.XXX-XX" aria-label="cpf" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">CPF</span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name ="adress" placeholder="Rua Exemplo, 123" aria-label="adress" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Endereço</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name ="zip" placeholder="XXXXX-XXX" aria-label="zip" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">CEP</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <input type="number" class="form-control" name ="bill" placeholder="Valor Dívida" aria-label="bill" required>
            <div class="input-group-append">
                <span class="input-group-text">Valor Dívida</span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5 d-flex flex-row justify-content-center">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
</div>
</form>

<?php include (FOOTER_TEMPLATE); ?>
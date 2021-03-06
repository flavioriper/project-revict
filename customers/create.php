<!--Create Page template-->
<?php 
    require_once '../config.php';
    require 'functions.php';
    insert();
?>
<?php include (HEADER_TEMPLATE); ?>

<div class="row justify-content-end" style="height: 5em;">
    <div class="col-md-4 col-sm-12">
        <span id="success-alert"></span>
    </div>
</div>
<form action="create.php" id="create-req" method="post">
<div class="row m-md-5 p-md-5">
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="name" name ="customer['name']" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' placeholder="Full Name" aria-describedby="basic-addon2" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="phone" name ="customer['phone']" placeholder="Numbers only" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Phone</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="cpf" name ="customer['cpf']" placeholder="Numbers only" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">CPF</span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="adress" name ="customer['adress']" placeholder="Rua Exemplo, 123" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Adress</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="zip" name ="customer['zip']" placeholder="Numbers only" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">ZIP code</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <input type="number" class="form-control" id="bill" name ="customer['bill']" placeholder="Total Bill" required>
            <div class="input-group-append">
                <span class="input-group-text">Total Bill</span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5 d-flex flex-row justify-content-center">
    <button type="submit" class="btn btn-outline-secondary">Save</button>
</div>
</form>

<?php include (FOOTER_TEMPLATE); ?>
<script src="../js/create-validation.js"></script>
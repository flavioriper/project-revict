<!--Update list template-->
<div class="row" style="height: 4em;">
    <div class="col-md-4">
        <span id="success-alert"></span>
    </div>
</div>
<form action="update.php" id="update-req" method="post">
<div class="row mt-md-3 px-md-5 mx-md-5 justify-content-end">
    <div class="col-md-2 col-sm-2">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name ="customer['id']" value="<?php echo $user->getId(); ?>" readonly>
        </div>
    </div>
</div>
<div class="row px-md-5 mx-md-5">
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="name" name ="customer['name']" value="<?php echo $user->getName(); ?>" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="phone" name ="customer['phone']" value="<?php echo $user->getPhone(); ?>" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Telefone</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="cpf" name ="customer['cpf']" value="<?php echo $user->getCpf(); ?>" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">CPF</span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="adress" name ="customer['adress']" value="<?php echo $user->getAdress(); ?>" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Endereço</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="zip" name ="customer['zip']" value="<?php echo $user->getZip(); ?>" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">CEP</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <input type="number" class="form-control" id="bill" name ="customer['bill']" value="<?php echo $user->getBill(); ?>" required>
            <div class="input-group-append">
                <span class="input-group-text">Valor Dívida</span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5 d-flex flex-row justify-content-center">
    <button type="submit" class="btn btn-outline-secondary">Save</button>
</form>
<form action="update.php" id="delete-req" method="post">
    <input type="number" name="id-delete" value="<?php echo $user->getId(); ?>" style="display:none;">
    <button type="submit" class="btn btn-outline-danger ml-5 mr-5">Delete</button>
    </form>
</div>
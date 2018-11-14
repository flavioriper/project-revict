 <?php $user = DaoCustomers::getInstance()->read_id($_POST['id']); ?>
 <form action="update.php" method="post">
 <div class="row mt-5">
    <div class="input-group mb-3 col-md-3">
        <input type="text" class="form-control" name ="id" value="<?php echo $user->getId(); ?>" readonly>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">ID</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="input-group mb-3 col-md-6">
        <input type="text" class="form-control" name ="up-name" value="<?php echo $user->getName(); ?>" required>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">Nome</span>
        </div>
    </div>
    <div class="input-group mb-3 col-md-3">
        <input type="text" class="form-control" name ="phone" value="<?php echo $user->getPhone(); ?>" required>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">Telefone</span>
        </div>
    </div>
    <div class="input-group mb-3 col-md-3">
        <input type="text" class="form-control" name ="cpf" value="<?php echo $user->getCpf(); ?>" required>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">CPF</span>
        </div>
    </div>
    <div class="input-group mb-3 col-md-12">
        <input type="text" class="form-control" name ="adress" value="<?php echo $user->getAdress(); ?>" required>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">Endereço</span>
        </div>
    </div>
    <div class="input-group mb-3 col-md-4">
        <input type="text" class="form-control" name ="zip" value="<?php echo $user->getZip(); ?>" required>
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">CEP</span>
        </div>
    </div>
    <div class="input-group col-md-8">
        <input type="number" class="form-control" name ="bill" value="<?php echo $user->getBill(); ?>" required>
    </div>
</div>
<div class="row d-flex flex-row justify-content-center">
    <button type="submit" class="btn btn-outline-success ml-5 mr-5">Salvar</button>
</form>
    <form action="update.php" method="post">
    <input type="number" name="id-delete" value="<?php echo $user->getId(); ?>" style="display:none;">
    <button type="submit" class="btn btn-outline-danger ml-5 mr-5">Excluir</button>
    </form>
</div>
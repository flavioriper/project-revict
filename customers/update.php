<?php 
    require_once '../config.php';
    require_once 'functions.php';
    require_once 'dao_customers.php';
    require_once 'pojo_customers.php';
    edit();
    delete();
?>
<?php include (HEADER_TEMPLATE); ?>

<div class="d-flex flex-row-reverse">
    <div class="p-2">
        <form action ="update.php" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="id" placeholder="Digite o ID">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Find</button>
            </div>
        </div>
        </form>
    </div>
</div>
<hr />
<?php 
    if (isset($_POST['id'])) {
        $user = viewListUpdate($_POST['id']);
        if ($user->getId() != 0) {
            include('../misc/update_list.php');
        } else {
            echo "Nenhum registro encontrado!";
        }
    } 
 ?>
<?php include (FOOTER_TEMPLATE); ?>
<script src="../js/update-validation.js"></script>
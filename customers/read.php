<?php 
    require_once '../config.php';
    include (HEADER_TEMPLATE);
    require_once 'functions.php';

    $user = readAll();
?>

<div class="row pt-md-5">
    <div class="col-md-12 scrollbar">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">CPF</th>
                <th scope="col">Endereço</th>
                <th scope="col">CEP</th>
                <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr><?php foreach ($user as $user) { ?>
                    <th scope="row"><?php echo $user->getId() ?></th>
                    <td><?php echo $user->getName() ?></td>
                    <td><?php echo $user->getPhone() ?></td>
                    <td><?php echo $user->getCpf() ?></td>
                    <td><?php echo $user->getAdress() ?></td>
                    <td><?php echo $user->getZip() ?></td>
                    <td><?php echo $user->getBill() ?></td>
                </tr><?php }?>
            </tbody>
        </table>
    </div>
</div>

<?php include (FOOTER_TEMPLATE); ?>
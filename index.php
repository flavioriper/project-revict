<?php 
    require_once 'config.php';
    require_once ABSPATH . 'connection.php';
    require_once ABSPATH . 'customers/functions.php';

?>
<?php include (HEADER_TEMPLATE); ?>

<div class="text-center cover-container d-flex w-100 h-100 p-3 mx-auto flex-column mt-5">
    <main role="main mt-5" class="inner cover">
        <h1 class="cover-heading mt-5">P-REVICT APP</h1>
        <p class="lead mb-5">It's a sample APP project with the basic CRUD business rule with POO</p>
        <h2 class="cover-heading"><?php echo totalCount(); ?></h2>
        <p class="lead">Users registereds</p>
    </main>
</div>

<?php include (FOOTER_TEMPLATE); ?>
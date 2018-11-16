<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/custom.css">
    <style>
        .scrollbar {
        box-sizing: border-box !important;
        height: 550px !important;
        overflow-y: auto !important;
}
    </style>
    <title>Revict Project</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>">Revict-Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASEURL; ?>customers/create.php">Create<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL; ?>customers/read.php">Read</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL; ?>customers/update.php">Update</a>
                </li>
                </ul>
            </div>
        </nav>  
    </header>
  <main class="container">
<?php

include_once("config/url.php");
include_once("config/process.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--fontweasome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-violet">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Logo do app Agenda">
        </a>
        <div>
            <div class="navbar-nav">
                <a href="<?= $BASE_URL ?>index.php" class="nav-link btn btn-primary mr-1" id="home-link"><i class="far fa-calendar-alt"></i> Agenda</a>
                <a href="<?= $BASE_URL ?>create.php" class="nav-link btn btn-primary" ><i class="fas fa-calendar-plus"></i> Novo Contato</a>
            </div>
        </div>
    </nav>
</header>
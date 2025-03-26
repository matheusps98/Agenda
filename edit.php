<?php
include_once("templates/header.php");
?>


<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact["id"] ?>">
    <div class="form-group">
        <label for="name">Nome do Contato:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $contact["name"] ?>" placeholder="Digite o nome do contato" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone do Contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact["phone"] ?>" placeholder="Digite o telefone" required>
    </div>
    <div class="form-group">
        <label for="observations">Observações:</label>
    <textarea name="observations" class="form-control" id="observations" row="5" placeholder="Insira as observações"><?= $contact["observations"] ?></textarea>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
    </form>
</div>


 <?php
include_once("templates/footer.php");
?>
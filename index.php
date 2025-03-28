<?php
include_once("templates/header.php");
?>


<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 class="mt-3" id="main-title">Minha Agenda</h1>
    <?php if(count($contacts) > 0): ?>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
               <th scope="col" class="col-id">ID</th>
               <th scope="col">Nome</th> 
               <th scope="col">Telefone</th> 
               <th scope="col" class="text-acoes">Ações</th> 
            </tr>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td scope="row"><?= $contact["id"] ?></td>
                        <td scope="row"><?= $contact["name"] ?></td>
                        <td scope="row"><?= $contact["phone"] ?></td>
                        <td class="actions">
                          <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>  
                          <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>  
                         <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                            <input type="hidden" name="type" value="delete">
                            <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                             <button type="submit" class="delete-btn"><i class="fas fa-trash delete-icon"></i></button>
                         </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </thead>
    </table>
    <?php else: ?>
    <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar um novo</a>.</p>
    <?php endif; ?>
</div>


 <?php
include_once("templates/footer.php");
?>
<?php

include_once("templates/header.php")

?>

<div class="container">
    <?php include_once("templates/backbtn.php"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL?>/config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['Id']?>">
        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="<?= $contact["Name"]?>" required>
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact["Phone"]?>" required>
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Digite as observações" rows="3"><?= $contact["Observations"]?></textarea>
            
            

        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>        
    </form>
</div>



<?php

include_once("templates/footer.php")

?>


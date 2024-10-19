<?php

include_once("templates/header.php")

?> 

<div class="container">
    <!-- <p id="msg">Testando mensagem</p> -->
        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><?= $printMsg?></p>            
        <?php endif;?>

        <h1 id="main-title">Minha Agenda</h1>
        <?php if(count($contacts) > 0): ?>
            <!-- Criando tabela que apresenta dos dados -->
             <table class="table table-hover" id="contacts-table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <!-- Criando um loop para verificar os dados disponiveis e apresenta-los -->
                <tbody>
                    <?php foreach($contacts as $contact):?>
                        <tr>
                        <td scopo="row" class="col-id"><?= $contact['Id']?></td>
                        <td scopo="row"><?= $contact['Name']?></td>
                        <td scopo="row"><?= $contact['Phone']?></td>
                        <td class="actions">
                            <a href="#"><i class="fas fa-eye check-icon"></i></a>
                            <a href="#"><i class="far fa-edit edit-icon"></i></a>
                            <button class="delete-btn" type="submit"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
             </table>
        <?php else:?>
            <p id="empty-list-text">
                Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL?>/create.php">Clique aqui para adicionar novos contatos</a>.
            </p>
        <?php endif;?>
    </div>
    
<?php

include_once("templates/footer.php")

?>   
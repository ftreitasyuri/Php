<?php

include_once("templates/header.php");
?> 
<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.php");?>
    <h1 id="main-title"><?= $contact["Name"]?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $contact["Phone"]?></p>
    <p class="bold">Observações:</p>
    <p><?= $contact["Observations"]?></p>
</div>
<?php

include_once("templates/footer.php")

?>   
<?php

include_once("templates/header.php");
?>

<main>
    <div id="title-container">
        <h1>Blog SmartTech</h1>
        <p>O seu blog de programação!</p>
    </div>
    <div id="posts-container">
        <!-- Criando o forEach para percorrer o array posts que foi incluido no Header -->
        <?php foreach ($posts as $post): ?>
            <!-- Criando uma div para imprimir o conteúdo de cada post do array -->
            <div id="post-box">
                <!-- Chamando as imagens da pasta img, baseado na url e passando o nome da imagem e o titulo como parâmetro -->
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title']?>">
                <!-- Criando o titulo do post com base nos parâmetros -->
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>posts.php?id=<?= $post['id'] ?>"><?= $post['title']?></a>
            
                </h2>
                <!-- Criando a descrição do post com os parâmetros -->
                <p class="post-description">
                    <?= $post['description'] ?>
                </p>
                <!-- Criando a visualização das tags do array -->
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag):?>
                        <a href="#"><?= $tag?></a>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
include_once("templates/footer.php");

?>




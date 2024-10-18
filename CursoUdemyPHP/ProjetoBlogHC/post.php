<?php
include_once("templates/header.php");


$currentPost = null;

if (isset($_GET['id'])) {

  $postId = $_GET['id'];


  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
// echo $postId;
?>
<!-- conteúdo HTML -->
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">

      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, labore! Consequatur est a nisi quisquam quo nostrum doloribus delectus mollitia accusantium sit dicta atque laborum reprehenderit sint sequi, placeat sapiente.
        Sunt doloremque, praesentium voluptates minima sed quo eius illum incidunt, laborum exercitationem perferendis molestias? Laudantium id natus ab a, obcaecati incidunt qui fugiat, velit quia nobis earum nihil. Temporibus, eaque?
        Sapiente dicta aliquid, nam nesciunt eos atque reiciendis. Expedita nemo tempore quisquam, amet ducimus vitae deserunt quidem modi officiis doloribus debitis rem reiciendis eligendi. Magnam quibusdam possimus consequatur amet alias.
        Commodi, provident laudantium. Numquam quos maxime iste? Aperiam ex, tempore corrupti est laudantium vero quibusdam, culpa dolorem laboriosam harum asperiores illum quis. Harum eaque iure at maxime ea dignissimos aperiam?
        Itaque asperiores praesentium autem explicabo dolores quam sint ipsum eum facilis atque saepe a, ea numquam possimus dolorem sed alias? Temporibus laborum, cum quod quibusdam fuga distinctio nisi accusantium qui.</p>

      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, labore! Consequatur est a nisi quisquam quo nostrum doloribus delectus mollitia accusantium sit dicta atque laborum reprehenderit sint sequi, placeat sapiente.
        Sunt doloremque, praesentium voluptates minima sed quo eius illum incidunt, laborum exercitationem perferendis molestias? Laudantium id natus ab a, obcaecati incidunt qui fugiat, velit quia nobis earum nihil. Temporibus, eaque?
        Sapiente dicta aliquid, nam nesciunt eos atque reiciendis. Expedita nemo tempore quisquam, amet ducimus vitae deserunt quidem modi officiis doloribus debitis rem reiciendis eligendi. Magnam quibusdam possimus consequatur amet alias.
        Commodi, provident laudantium. Numquam quos maxime iste? Aperiam ex, tempore corrupti est laudantium vero quibusdam, culpa dolorem laboriosam harum asperiores illum quis. Harum eaque iure at maxime ea dignissimos aperiam?
        Itaque asperiores praesentium autem explicabo dolores quam sint ipsum eum facilis atque saepe a, ea numquam possimus dolorem sed alias? Temporibus laborum, cum quod quibusdam fuga distinctio nisi accusantium qui.</p>
    </div>
  </div>

  <!-- Criando barra lateral -->
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>

  </aside>
</main>
<!-- categories -->



<!-- rodape -->
<?php
include_once("templates/footer.php");

?>
<?php
  include_once("templates/header.php");

  
  $currentPost = null; 

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }
    // echo $postId;
?>
<!-- conteúdo HTML -->

<h3><?= $currentPost['title'] ?></h3>

<!-- rodape -->
<?php 
include_once("templates/footer.php");

?>


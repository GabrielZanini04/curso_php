<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    } else {
        header("Location: " . $BASE_URL);
    }
?>

  <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost['title'] ?> </h1>
        <p id="post-description"> <?= $currentPost['description'] ?> </p>
        <div class="img-container"> 
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex repellendus quae impedit laudantium soluta similique saepe, consequatur inventore, unde, sunt possimus praesentium molestiae quod pariatur fuga sequi omnis perferendis nam!
        Eligendi fugit voluptatum itaque. Debitis alias saepe pariatur. Rerum quis tempore amet a cumque minus ipsam voluptatum cum laboriosam ipsum, alias laudantium. Saepe nobis nam tenetur nemo maiores praesentium rerum!
        Adipisci, nam dolorem? Excepturi architecto corrupti alias expedita. Placeat, itaque. Eos beatae culpa quae maiores architecto quasi tempore nostrum saepe amet quos, nesciunt ipsum suscipit deleniti quam officiis? Voluptatem, animi!
        Quos rem vero adipisci et, sed incidunt, velit quo odio officiis ad vitae. Eos repudiandae sit placeat nisi quisquam illo, officia illum quo odio sunt similique, nihil accusamus, voluptates unde.
        Vitae alias neque, sequi obcaecati incidunt culpa id error aperiam iure, hic voluptate, eaque ab explicabo? Quia fugit velit nulla, nemo eveniet vero, fugiat consequuntur tempora, iste blanditiis tempore sequi.</p>
         <p class="post-content"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex repellendus quae impedit laudantium soluta similique saepe, consequatur inventore, unde, sunt possimus praesentium molestiae quod pariatur fuga sequi omnis perferendis nam!
        Eligendi fugit voluptatum itaque. Debitis alias saepe pariatur. Rerum quis tempore amet a cumque minus ipsam voluptatum cum laboriosam ipsum, alias laudantium. Saepe nobis nam tenetur nemo maiores praesentium rerum!
        Adipisci, nam dolorem? Excepturi architecto corrupti alias expedita. Placeat, itaque. Eos beatae culpa quae maiores architecto quasi tempore nostrum saepe amet quos, nesciunt ipsum suscipit deleniti quam officiis? Voluptatem, animi!
        Quos rem vero adipisci et, sed incidunt, velit quo odio officiis ad vitae. Eos repudiandae sit placeat nisi quisquam illo, officia illum quo odio sunt similique, nihil accusamus, voluptates unde.
        Vitae alias neque, sequi obcaecati incidunt culpa id error aperiam iure, hic voluptate, eaque ab explicabo? Quia fugit velit nulla, nemo eveniet vero, fugiat consequuntur tempora, iste blanditiis tempore sequi.</p>
    </div>
  </main>

  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
             <li> <a href="#"><?= $tag ?></a> </li>
            <?php endforeach; ?>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
             <li> <a href="#"><?= $category ?></a> </li>
            <?php endforeach; ?>
            </ul>
    </ul>
  </aside>

<?php
    include_once("templates/footer.php")
?>
<?php
include_once("templates/header.php");
if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img']?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minus expedita, odio reprehenderit accusantium perferendis? Nisi, perspiciatis iusto voluptatem ullam nesciunt adipisci molestiae dolores reprehenderit doloremque voluptates alias aliquid assumenda.
        Corporis molestiae ut iusto nesciunt beatae laborum earum dolorum neque. Perspiciatis nihil consequatur ipsum similique atque ab quaerat aliquam, iure, doloribus delectus amet. Molestiae ullam autem, esse voluptates maiores eligendi.
        Provident praesentium, porro iure ducimus odio dolores consequuntur tempore ea vero voluptate fugiat distinctio, maxime suscipit laborum? Rem eum doloremque vitae maxime fugit perferendis veritatis aliquid tempore, voluptates consequuntur quas.
        Amet, tenetur magnam reprehenderit iure doloremque sint, repudiandae maiores voluptatum necessitatibus aliquam deleniti et quasi quam nostrum, architecto accusamus voluptatem voluptate odit id non dignissimos quos at. Necessitatibus, porro officiis.
        Eveniet, assumenda quaerat inventore fugit architecto vitae illum beatae, maiores eum ducimus et laboriosam molestiae natus, nesciunt odit? Expedita illum non enim beatae laboriosam molestias nemo natus eligendi placeat repudiandae?</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minus expedita, odio reprehenderit accusantium perferendis? Nisi, perspiciatis iusto voluptatem ullam nesciunt adipisci molestiae dolores reprehenderit doloremque voluptates alias aliquid assumenda.
        Corporis molestiae ut iusto nesciunt beatae laborum earum dolorum neque. Perspiciatis nihil consequatur ipsum similique atque ab quaerat aliquam, iure, doloribus delectus amet. Molestiae ullam autem, esse voluptates maiores eligendi.
        Provident praesentium, porro iure ducimus odio dolores consequuntur tempore ea vero voluptate fugiat distinctio, maxime suscipit laborum? Rem eum doloremque vitae maxime fugit perferendis veritatis aliquid tempore, voluptates consequuntur quas.
        Amet, tenetur magnam reprehenderit iure doloremque sint, repudiandae maiores voluptatum necessitatibus aliquam deleniti et quasi quam nostrum, architecto accusamus voluptatem voluptate odit id non dignissimos quos at. Necessitatibus, porro officiis.
        Eveniet, assumenda quaerat inventore fugit architecto vitae illum beatae, maiores eum ducimus et laboriosam molestiae natus, nesciunt odit? Expedita illum non enim beatae laboriosam molestias nemo natus eligendi placeat repudiandae?</p>
    </div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href=""><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <li><a href=""><?= $category ?></a></li>
        <?php endforeach; ?> 
    </ul>
</aside>
<?php
include_once("templates/footer.php")
?>
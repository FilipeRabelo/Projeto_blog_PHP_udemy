<?php
include_once("templates/header.php");

if (isset($_GET["id"])) {

    $postId = $_GET["id"];
    $currentPost;

    foreach ($posts as $post) {

        if ($post["id"] == $postId) {
            $currentPost = $post;
        }
    }
}

?>

    <main id="post-container">
        <div class="content-container">

            <h1 id="main-title"><?= $currentPost["title"] ?></h1>

            <p id="post-description"><?= $currentPost["description"] ?></p>

            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
            </div>

            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatibus ea iste sint explicabo, cum quae adipisci saepe at consequatur
                quod deserunt reprehenderit aperiam quibusdam porro! Natus rerum vero nisi
                ipsa ea quia doloremque amet ullam deleniti accusantium in sunt minima totam
                iure rem deserunt, porro, fugit obcaecati magnam expedita, aliquid sit sint
                quaerat quo? Ipsam ipsum odit id accusamus eveniet commodi necessitatibus
                laudantium architecto delectus sapiente repudiandae, ullam asperiores rem velit
                officiis, esse voluptatibus quasi consectetur quia dicta expedita amet non ab.
                Voluptatibus ut nobis, iste sint debitis expedita quas quod cum, beatae numquam
                esse corrupti aspernatur eos neque consequuntur.
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatibus ea iste sint explicabo, cum quae adipisci saepe at consequatur
                quod deserunt reprehenderit aperiam quibusdam porro! Natus rerum vero nisi
                ipsa ea quia doloremque amet ullam deleniti accusantium in sunt minima totam
                iure rem deserunt, porro, fugit obcaecati magnam expedita, aliquid sit sint
                quaerat quo? Ipsam ipsum odit id accusamus eveniet commodi necessitatibus
                laudantium architecto delectus sapiente repudiandae, ullam asperiores rem velit
                officiis, esse voluptatibus quasi consectetur quia dicta expedita amet non ab.
                Voluptatibus ut nobis, iste sint debitis expedita quas quod cum, beatae numquam
                esse corrupti aspernatur eos neque consequuntur.
            </p>

        </div>

        <aside id="nav-container">
    
            <h3 id="tags-title">Tags</h3>
    
            <ul id="tags-list">
                <?php foreach ($currentPost["tags"] as $tag) : ?>
    
                   <li> <a href="#"><?= $tag ?></a></li>
    
                <?php endforeach; ?>
            </ul>
    
            <h3 id="categories-title">Categorias</h3>
    
            <ul id="categories-list">
                <?php foreach ($categories as $category ) : ?>
    
                    <li> <a href="#"><?= $category ?></a></li>
    
                <?php endforeach; ?>
            </ul>
    
        </aside>
        
    </main>





<?php
include_once("templates/footer.php");
?>
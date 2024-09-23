<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.partial.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/header.partial.php';


?>


<main>
    <h2>Les Derniers Articles</h2>
    <div class="cards-container">
        <?php foreach ($articles as $article): ?>
            <!-- <?php var_dump($article); ?> -->
            <div class="card">
                <img src="../assets/image/lavand.png" alt="Image 1" />
                <div class="card-image"></div>
                <div class="card-content">
                    <div class="card-header">
                        <h3><?= $article['title'] ?></h3>
                        <div class="btn-fav"></div>
                    </div>
                    <p>
                        <?= $article['content'] ?>
                    </p>
                    <button class="btn-read-more">Lire plus</button>
                    <div class="card-tags">
                        <button class="btn-tag">Santé</button>
                        <button class="btn-tag">Bien-être</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- /*.. nos Categories.. */ -->

    <div class="cards-categorie">
        <h2>Nos categories</h2>
        <div class="cards-container">
            <div class="cart">
                <div class="cart-image">
                    <img
                        src="../assets/image/chelsea-shapouri-r40EYKVyutI-unsplash 1.png"
                        alt="Image 2" />
                    <button class="btn-cat">Lire plus</button>
                    <div class="mask"></div>
                </div>
            </div>
            <div class="cart">
                <div class="cart-image">
                    <img
                        src="../assets/image/content-pixie-TxBQ7yLj6JU-unsplash 1.png"
                        height="100%" />
                    <button class="btn-cat">Lire plus</button>
                    <div class="mask"></div>
                </div>
            </div>
            <div class="cart">
                <div class="cart-image">
                    <img src="../assets/image/Recettes.png" alt="Image 2" />
                    <button class="btn-cat">Lire plus</button>
                    <div class="mask"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /*..  fin nos Categories.. */ -->

    <!-- /*.. nos Engagement.. */ -->
    <div class="engagement">
        <div class="engage">
            <h3>Nos Engagement</h3>

            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum,
                recusandae? Quae soluta fuga voluptatum est nihil cumque error, quia
                ab obcaecati, aperiam quisquam asperiores quod totam magni rem,
                facilis reiciendis.
            </p>
            <button class="btn-engag">Lire plus</button>
        </div>
        <img src="../assets/image/plantes.png" alt="" />
    </div>
</main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.partial.php'; ?>
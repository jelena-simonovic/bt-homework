<main class="container">
    <div class="container mt-5 mb-5 row">
        <div class="col-6"></div>
        <form class="col-6 mb-3" action="./products-page.php" method="get">
            <input class="col-8" type="text" name="filter">
            <button type="submit" class="btn btn-outline-secondary col-3">Search</button>
        </form>
        <div class="row">
            <aside class="col-2">
                <form action="./products-page.php" method="get">
                    <select name="sort-by" id="" class="col-12">
                        <option value=""> Filter by price </option>
                        <option value="price-asc"> Lower to higher </option>
                        <option value="price-desc"> Higher to lower </option>
                    </select> <br>
                    <button class="btn btn-outline-secondary col-12 mb-4" type="submit"> FILTER </button>
                </form>
                <form class="list-group" action="./products-page.php" method="get">
                    <div class="list-group-item text-center">
                        <p> CATEGORY </p>
                    </div>
                    <button class="list-group-item" type="submit" name="category[]" value="for_her">
                        Scents For HER
                    </button>
                    <button class="list-group-item" type="submit" name="category[]" value="for_him">
                        Scents For HIM
                    </button>
                    <button class="list-group-item" type="submit" name="category[]" value="unisex">
                        Unisex Scents
                    </button>

                </form> <br>
                <form class="list-group" action="./products-page.php" method="get">
                    <div class="list-group-item text-center">
                        <p> SCENT FAMILY </p>
                    </div>
                    <button class="list-group-item" type="submit" name="scent_family[]" value="fruity">
                        Fruity Scents
                    </button>
                    <button class="list-group-item" type="submit" name="category[]" value="fresh">
                        Fresh Scents
                    </button>
                    <button class="list-group-item" type="submit" name="category[]" value="musky">
                        Musky Scents
                    </button>
                    <button class="list-group-item" type="submit" name="category[]" value="woody">
                        Woody Scents
                    </button>
                    <button class="list-group-item" type="submit" name="category[]" value="spicy">
                        Spicy Scents
                    </button>
                </form>
            </aside>
            <div class="col-10">
                <div class="row">
                    <?php foreach ($products as $product) { ?>
                        <article class="text-center col-3 p-5" id="product">
                            <img class="card-img-top" src="<?php echo htmlspecialchars($product['img']); ?>" alt="product image">
                            <div class="card-body">
                                <span class="card-subtitle text-muted"><?php echo htmlspecialchars($product['brand']); ?></span>
                                <p class="card-title"><?php echo htmlspecialchars($product['title']); ?></p>
                                <p>$<?php echo htmlspecialchars($product['price']); ?></p>
                                <a class="btn btn-outline-secondary" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </div>
            <div class="top-button"> <a href="#"> Back to top </a></div>
        </div>
    </div>
    </div>
</main>
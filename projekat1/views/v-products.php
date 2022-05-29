<main class="container mt-5">
    <form class="row mb-5" action="./products-page.php" method="get">
        <select name="sort-by" id="" class="col-2">
            <option value=""> No filter </option>
            <option value="price-asc">By price - lower to higher </option>
            <option value="price-desc">By price - higher to lower </option>
        </select>
        <input class="col-8" type="text" name="filter">
        <button type="submit" class="btn btn-dark col-2">Search</button>
    </form>
    <div class="row">
        <?php foreach ($products as $product) { ?>
            <article class="single-product col-4 row mb-5">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="" width="100" height="100">
                </div>
                <div class='col-6'>
                    <span><?php echo htmlspecialchars($product['brand']); ?></span>
                    <p><?php echo htmlspecialchars($product['title']); ?></p>
                    <p>$<?php echo htmlspecialchars($product['price']); ?></p>
                    <a class="btn btn-secondary" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a>
                </div>
            </article>
        <?php } ?>
    </div>
</main>
</main>
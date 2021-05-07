<?php 
if(!isset($_SESSION)) {
    session_start();
}


session_reset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spartan Fresh</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/promo_slideshow.css">
    <link rel="stylesheet" href="css/product_card.css">
    <script src="js/promo_slide.js" defer></script>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
</head>
<?php 
include_once '/xampp/htdocs/component/head_nav/head_nav.php';
?>
<body>
    <div class="category-container">
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>fruit</span>
        </div>
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>Vegetable</span>
        </div>
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>protein</span>
        </div>
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>dairy</span>
        </div>
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>baked goods</span>
        </div>
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>sweets</span>
        </div>
        <div class="category-card">
            <img src="../resource/icon/category/default.png">
            <span>sweets</span>
        </div>
    </div>

    <div class="promo-slide-container">
        <div class="promo-slide">
            <img src="../resource/img/promotion/promo_1.png">
        </div>
        <div class="promo-slide">
            <img src="../resource/img/promotion/promo_2.png">
        </div>
        <div class="promo-slide">
            <img src="../resource/img/promotion/promo_3.png">
        </div>

        <button class="prev-slide" onclick="switchSlide(-1)">&#10094;</button>
        <button class="next-slide" onclick="switchSlide(1)">&#10095;</button>
    </div>


    <div class="featued-container">
        <div class="featued-info">
            <div class="featued-title">
                Deals
            </div>
            <button onclick="window.location.href='/categories/products_view/all_category_view.php';">
                More &#10095;
            </button>
        </div>
        <div class="featured-card-container">
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
        </div>
    </div>
    

    <div class="featued-container">
        <div class="featued-info">
            <div class="featued-title">
                Best Sellers
            </div>
            <button>
                More &#10095;
            </button>
        </div>
        <div class="featured-card-container">
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
            <div class="product-card-container">
                <img src="../resource/img/large/gala_apple.png">
                <span class="product-title">Kiwi Organic, 1 Each</span>
                <span class="unit-price">$1.39/lb</span>
                <div class="item-price-wrapper">
                    <span class="final-price">$2.7</span>
                    <div class="discount">50% Off</div>
                    <span class="before-price"><strike>$5.4</strike></span>
                </div>
                <button class="add-to-cart">
                    Add
                </button>
            </div>
        </div>
    </div>
</body>
</html>
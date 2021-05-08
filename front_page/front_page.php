<?php 
if(!isset($_SESSION)) {
    session_start();
}
require_once "/xampp/htdocs/component/product_card/product_card.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spartan Fresh</title>
    <link rel="stylesheet" href="http://localhost/front_page/css/layout.css">
    <link rel="stylesheet" href="http://localhost/front_page/css/promo_slideshow.css">
    <link rel="stylesheet" href="http://localhost/component/product_card/product_card.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://localhost/front_page/js/promo_slide.js" defer></script>
    <script src="http://localhost/component/product_card/product_card.js"></script>
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
            <button onclick="window.location.href='http\:\/\/localhost/categories/products_view/all_category_view.php';">
                More &#10095;
            </button>
        </div>
        <div class="featured-card-container">
            <?php 
            $card = new ProductCard();
            $card->generateCard(16);
            $card->generateCard(18);
            $card->generateCard(22);
            ?>
        </div>
    </div>
</body>
</html>
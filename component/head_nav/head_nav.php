<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once '/xampp/htdocs/component/db/db_config.php';
$pdo = pdo_connect_mysql();

$_SESSION['logged_in'] = 1;
$user_id = $_SESSION['user_id'];

?>

<link rel="stylesheet" href="/component/head_nav/head_nav.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script src="/component/head_nav/head_nav.js"></script>

<header>
    <div class="menu-bar-container">
        <div onclick="window.location.href='/front_page/front_page.php';" class="menu-bar-logo-wrapper">
            <div class="menu-bar-logo">
                <img src="../../resource/icon/logo.svg">
            </div>
        </div>
        <div class="menu-bar-search-wrapper">
            <form>
                <input type="text" placeholder="Search">
                <button type="submit">
                    <img src="../../resource/icon/search-icon.svg">
                </button>
            </form>
        </div>
        <div onclick="window.location.href='/user_center/user_center.php';" class="menu-bar-user-wrapper">
            <div class="user-info-wrapper">
                <div class="menu-bar-user-icon">
                    <img src="../../resource/icon/user-icon.svg">
                </div>
                <div class="user-name">
                    <span id="username-logged-in"></span>
                    <span id="username-not-logged-in">Log in</span>
                </div>
            </div>
        </div>
        <div onclick="window.location.href='/shopping_cart/src/cart.php';" class="menu-bar-cart-wrapper">
            <div class="cart-info-wrapper">
                <div class="menu-bar-cart-icon">
                    <img src="../../resource/icon/cart-icon.svg">
                </div>
                <span>Cart:&nbsp;</span>
                <span id="cart-item-count-text">0</span>
            </div>
        </div>
    </div>
</header>
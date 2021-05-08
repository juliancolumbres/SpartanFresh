$(document).ready(function () {
    hideLogInPrompt();
    $.ajax({
        url: 'http://localhost/component/function/update_cart_item_count.php',
        type: 'POST',
        success: function(response) {
            updateItemCount(response);
        }
    });
    $.ajax({
        url: 'http://localhost/component/function/update_username.php',
        type: 'POST',
        success: function(response) {
            updateUsername(response);
        }
    });
});

function updateItemCount(count) {
    document.getElementById('cart-item-count-text').innerHTML = count;
}

function updateUsername(name) {
    if (name == '/') {
        // Change user and cart buttons to show login prompt
        document.getElementById('username-click').onclick 
            = function() { showLogInPrompt() };
        document.getElementById('cart-click').onclick 
            = function() { showLogInPrompt() };
        // Change username to login
        document.getElementById('username-logged-in').style.display = 'none';
        document.getElementById('username-not-logged-in').style.display = 'block';
    }
    else {
        // Change user and cart buttons to actual links
        document.getElementById('username-click').onclick 
            = function() { window.location.href='http://localhost/user_center/user_center.php' };
        document.getElementById('cart-click').onclick 
            = function() { window.location.href='http://localhost/shopping_cart/src/cart.php' };
        // Display username and item count
        document.getElementById('username-logged-in').style.display = 'block';
        document.getElementById('username-logged-in').innerHTML = name;
        document.getElementById('username-not-logged-in').style.display = 'none';
    }
}

function showLogInPrompt() {
    document.getElementsByClassName('background-blur-container')[0].style.display = 'block';
    document.getElementsByClassName('login-prompt-container')[0].style.display = 'flex';
}

function hideLogInPrompt() {
    document.getElementsByClassName('background-blur-container')[0].style.display = 'none';
    document.getElementsByClassName('login-prompt-container')[0].style.display = 'none';
}
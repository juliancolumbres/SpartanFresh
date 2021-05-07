$(document).ready(function () {
    $.ajax({
        url: '/component/function/update_cart_item_count.php',
        type: 'POST',
        success: function(response) {
            updateItemCount(response);
        }
    });
    $.ajax({
        url: '/component/function/update_username.php',
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
        document.getElementById('username-logged-in').style.display = 'none';
        document.getElementById('username-not-logged-in').style.display = 'block';
    }
    else {
        document.getElementById('username-logged-in').style.display = 'block';
        document.getElementById('username-logged-in').innerHTML = name;
        document.getElementById('username-not-logged-in').style.display = 'none';
    }
}
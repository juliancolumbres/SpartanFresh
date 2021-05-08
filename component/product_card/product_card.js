var root = location.protocol + '//' + location.host;
var add_to_cart_url = root + '/component/function/add_to_cart.php';
var update_cart_item_count_url = root + '/component/function/update_cart_item_count.php';

$(document).ready(function() {
    $('.add-to-cart').click(function() {
        var product_id = $(this).data('id');
        $.ajax({
            url: add_to_cart_url,
            type: 'POST',
            data: {
                product_id: product_id
            },
            success: function(response) {
                if (response == 'not logged-in') {
                    alert('Please log in to start shopping');
                }
                else if (response == 'success') {
                    $.ajax({
                        url: update_cart_item_count_url,
                        success: function(response) {
                            document.getElementById('cart-item-count-text').innerHTML = response;
                        }
                    });
                }
                else if (response == 'out of stock') {
                    alert('Out-of-stock');
                }
            }
        });
    })
});
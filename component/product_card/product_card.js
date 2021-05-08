
$(document).ready(function() {
    $('.add-to-cart').click(function() {
        var product_id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/component/function/add_to_cart.php',
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
                        url: 'http://localhost/component/function/update_cart_item_count.php',
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
<?php 

    session_start();
    include 'function.php';
    $pdo = pdo_connect_mysql();

    // Routing
    // $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
    // include $page . '.php';

    $cart_id = 1;

    // Fetch items in cart using the cart id
    $stmt = $pdo->prepare("SELECT * FROM item_in_cart WHERE FK_cart_id = '$cart_id'");
    $stmt->execute();
    $items_in_cart = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch product information that are in cart
    $stmt = $pdo->prepare("SELECT product.* FROM item_in_cart, product WHERE product.product_id = item_in_cart.FK_product_id AND item_in_cart.FK_cart_id = '$cart_id'");
    $stmt->execute();
    $product_info = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $subtotal = 0.00;
    foreach ($items_in_cart as $item) {
        echo 'Q: ' . $item['quantity'] . ' FK: '. $item['FK_product_id'] . ' P: ' . $product_info[$item['FK_product_id'] - 1]['price'] . '<br>';
        
        $subtotal += $item['quantity'] * $product_info[$item['FK_product_id'] - 1]['price'];
        
    }

    echo 'Subtotal: ';
    echo $subtotal;
?>

<?=template_header('Shopping Cart')?>


<table>
    <thead>
        <tr>
            <td colspan="2">Item</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Total</td>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($items_in_cart)): ?>
            <<tr>
                <td colspan="5" style="text-align:center;">Your cart is empty!</td>
            </tr>
        <?php else: ?>
            <?php foreach ($items_in_cart as $item): ?>
                <tr>
                    <td>
                        <?php
                            $img = !empty($product_info[$item['FK_product_id'] - 1]['image']) ? $product_info[$item['FK_product_id'] - 1]['image'] : '../resource/img/default/product_large.png';
                            $img_id = !empty($product_info[$item['FK_product_id'] - 1]['image']) ? $product_info[$item['FK_product_id'] - 1]['product_name'] : 'Product image not available';
                        ?>
                        <img src="<?=$img?>" width="50" height="50" alt="<?=$img_id?>">
                    </td>
                    <td><?=$product_info[$item['FK_product_id'] - 1]['product_name']?></td>
                    <td>$<?=$product_info[$item['FK_product_id'] - 1]['price']?></td>
                    <td><?=$item['quantity']?></td>
                    <td>
                        <?php
                            $item_total = $item['quantity'] * $product_info[$item['FK_product_id'] - 1]['price'];
                        ?>
                        $<?=$item_total?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
            
    </tbody>
</table>


<?=template_footer()?>
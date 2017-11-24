<?php
$products = [
    array(
        'item-name' => 'book',
        'item-price' => 20
    ),
    array(
        'item-name' => 'car',
        'item-price' => 200
    ),
    array(
        'item-name' => 'pizza',
        'item-price' => 10
    ),
];
session_start();
?>
<div style="float:left; width: 30%;">
    <?php foreach ($products as $product) { ?> 
        <form method="POST" action="addItem.php">
            <p><?php print $product['item-name'] ?>, price <?php print $product['item-price'] ?></p>
            <input type="hidden" name="item-name" value="<?php print $product['item-name']; ?>"/>
            <input type="hidden" name="item-price" value="<?php print $product['item-price']; ?>"/>
            <button>Añadir</button>
        </form>
    <?php } ?>
</div>
<div style="float:left; width: 49%;">
    <?php if ($_SESSION['cart']) { ?>
        <?php foreach ($_SESSION['cart'] as $item) { ?>
            <p><?php print $item[0]; ?> <?php print $item[1]; ?></p>
        <?php } ?>
            <form action="reset.php" method="POST">
                <button>Borrar lista</button>
            </form>
    <?php } else { ?>
            <p>No hay items en la lista</p>
    <?php } ?>
</div>


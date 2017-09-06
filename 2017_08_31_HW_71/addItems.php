<?php

include 'autoloader.php';
session_start();

$cart = new Cart();
$pen = new Item("Pens", 2.5);
$paper = new Item("Paper", 22.75);
$pot = new Item("Pot", 16.3);
$pan = new Item("Pan", 12.15);

if(!empty($_GET['itemList']) && !empty($_GET['itemList'])) {
    print_r($_GET);
    echo "<br>";
    print_r($_GET['itemList']);
    echo "<br>";
    print_r($_GET['quantity']);
    $item = new Item($_GET['itemList']);
    $cart->addItem($item, $_GET['quantity']);
}

?>

<div class="container text-center">
    <h2>Select items to add to your cart:</h2>
    <form class="form-inline">
        <div class="form-group">
            <label class="sr-only">Select Item</label>
            <p class="form-control-static">Select Item: </p>
        </div>
        <select class="form-control" name="itemList">
            <option>Pen</option>
            <option>Paper</option>
            <option>Pot</option>
            <option>Pan</option>
        </select>
        <div class="form-group">
            <label class="sr-only">text</label>
            <p class="form-control-static">Select Quantity: </p>
        </div>
        <div class="form-group">
            <label for="quantity" class="sr-only">Quantity</label>
            <input type="number" class="form-control" id="quantity" placeholder="quantity" name="quantity" value="1">
        </div>
        <button type="submit" class="btn btn-default">Add to Cart</button>
    </form>
</div>
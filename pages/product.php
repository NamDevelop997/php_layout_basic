<?php
$arr_product = [
    [
        "name" => "Iphone 11",
        "content" => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nesciunt aliquid itaque repellendus quasi sunt ullam delectus. Reprehenderit, corrupti inventore.",
        "price" => 20
    ],
    [
        "name" => "Nasus 12",
        "content" => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nesciunt aliquid itaque repellendus quasi sunt ullam delectus. Reprehenderit, corrupti inventore.",
        "price" => 255
    ],
    [
        "name" => "Lenovo 102",
        "content" => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nesciunt aliquid itaque repellendus quasi sunt ullam delectus. Reprehenderit, corrupti inventore.",
        "price" => 999
    ],
    [
        "name" => "Asus12",
        "content" => " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nesciunt aliquid itaque repellendus quasi sunt ullam delectus. Reprehenderit, corrupti inventore.",
        "price" => 20444
    ]
];
?>


<div id="content">
    <?php
    foreach ($arr_product as $item) {
    ?>
        <div class="card text-left col-3 mr-2">
            <div class="card-body">
                <h4 class="card-title"><?php echo $item['name'] ?></h4>
                <p class="card-text"><?php echo $item['content'] ?></p>
                <p class="card-text">price: <?php echo $item['price'] ?></p>
            </div>
        </div>
    <?php } ?>
</div>
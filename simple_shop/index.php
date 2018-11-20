<?php
session_start();
require_once "database.php";
$database = new Database();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>

<?php if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) { ?>

    <div class="container">
        <h2>Giỏ hàng</h2>
        <p>Chi tiết giỏ hàng</p>
        <table class="table">
            <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá cả</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
            foreach ($_SESSION['cart_item'] as $key_cart => $val_cart_item) : ?>
            <tr>
                <td><?php echo $val_cart_item['id'] ?></td>
                <td><?php echo $val_cart_item['product_name'] ?></td>
                <td><img class="card-img-top" style="height: 25px; width: auto; display: block" src="images/<?php echo $val_cart_item['product_image'];?>" data-holder-rendered="true"></td>
                <td><?php echo number_format($val_cart_item['price'],0,",",".") ?></td>
                <td><?php echo $val_cart_item['quantity'] ?></td>
                <td><?php
                        $total_item = ($val_cart_item['quantity'] * $val_cart_item['price']);
                        echo number_format($total_item,0,",",".");
                    ?> VNĐ</td>
                <th>
                    <form name="remove<?php echo $val_cart_item['id']?>" action="process.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $val_cart_item['id']?>">
                        <input type="hidden" name="action" value="remove">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Xóa</button>
                    </form>
                </th>
            </tr>
            <?php
            $total += $total_item ;
            endforeach; ?>
            </tbody>
        </table>
        <div>Tổng hóa đơn thanh toán: <strong><?php echo number_format($total,0,",",".");?></strong> VNĐ</div>
    </div>

<?php } else { ?>
    <div class="container">
        <h2>Giỏ hàng</h2>
        <p>Giỏ hàng của bạn đang rỗng</p>
        <br>
    </div>
<?php } ?>

<div class="container">
    <div class="row">
        <?php
            $sql = "SELECT * FROM products";
            $products = $database->runQuery($sql);
        ?>

        <?php if (!empty($products)) : ?>
            <?php foreach ($products as $product) :?>
                <div class="col-md-6">
                    <form name="product<?php echo $product['id'];?>" action="process.php" method="post">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/<?php echo $product['product_image'];?>" data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text"><?php echo $product['product_name'];?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-inline">
                                        <input type="text" class="form-control" name="quantity" value="1">
                                        <input type="hidden" name="action" value="add">
                                        <input type="hidden" name="product_id" value="<?php echo $product['id'];?>">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php endif;?>
    </div>
</div>

</body>
</html>
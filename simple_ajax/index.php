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
        <tr>
            <td>1</td>
            <td>camera</td>
            <td>camera.jpg</td>
            <td>150000</td>
            <td>2</td>
            <td>300000</td>
            <th><a href="#">Xóa</a></th>
        </tr>
        <tr>
            <td>2</td>
            <td>camera</td>
            <td>hard-drive.jpg</td>
            <td>2000000</td>
            <td>2</td>
            <td>4000000</td>
            <th><a href="#">Xóa</a></th>
        </tr>
        </tbody>
    </table>
    <div>Tổng hóa đơn thanh toán: <strong>4300000</strong></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form name="product1" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/camera.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">Sản phẩm 1</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <button type="submit" class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form name="product2" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/laptop.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">Sản phẩm 1</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <button type="submit" class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form name="product3" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/hdd.png" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">Sản phẩm 1</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <button type="submit" class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form name="product4" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/smartwatch.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">Sản phẩm 1</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <button type="submit" class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
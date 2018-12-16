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
    <?php
        require_once 'database.php';
        $db = new Database();
        $conn = Database::$connection;
        $sql = "SELECT * FROM products LIMIT 6";
        $products = $conn->query($sql);

        if ($products->num_rows > 0) {
            while($row = $products->fetch_assoc()) {
                $data[] = $row;
            }
        }
    ?>

    <div class="row">
        <?php
        foreach ($data as $value) {?>
            <div class="col-md-4">
                <form>
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/camera.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text"><?php echo $value['name']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-inline">
                                    <input type="text" class="form-control" name="quantity" value="1" style="width: 30%">
                                    <button class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        <?php }
        ?>
    </div>
    <div style="margin: 10px; text-align: center">
        <button id="load-more" type="button" class="btn btn-vimeo">Load more</button>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#load-more').on('click', function(e) {
            alert('click');
            e.preventDefault();
            var params = {};
            params.offset = $('.row').children('.col-md-4').length;
            params.limit = 3;
            params.type = 'product';

            jQuery.ajax({
                url : 'http://localhost/homework/simple_ajax/ajax.php',
                data: params,
                type: 'POST',
                dataType: 'json',
                beforeSend: function() {
                    alert('beforeSend');
                },
                success: function(data) {
                    alert('success');
                    console.log(data);
                    if (data.html) {
                        $('.row').append(data.html);
                    } else {
                        $('#load-more').hide();
                        alert('load more completed');
                    }

                },
                error: function (xhr) {
                    alert('error');
                },
                complete: function (xhr, status) {
                    alert('complete');
                }
            });


        });


    });
</script>

</body>
</html>
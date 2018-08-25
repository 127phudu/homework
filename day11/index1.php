<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<?php
$table = array();
$table[] = array('product_id' => 1, 'product_name' => 'bike', 'product_price' => 1000000);
$table[] = array('product_id' => 2, 'product_name' => 'motorbike', 'product_price' => 20000000);
$table[] = array('product_id' => 3, 'product_name' => 'car', 'product_price' => 300000000);
{?>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        </thead>
        <?php
            foreach ($table as $key => $value){
                {?>
                    <tr>
                        <td><?php echo $value['product_id']?></td>
                        <td><?php echo $value['product_name']?></td>
                        <td><?php echo $value['product_price']?></td>
                    </tr>
                <?php }
            }
        ?>

    </table>
<?php }

?>


</body>
</html>
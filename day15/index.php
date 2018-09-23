<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php


$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "codeme.edu.vn";

// Create connection
$connection = new mysqli($serverName, $userName, $password, $dbName);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM article where id = 5";
$result = $connection->query($sql);

echo '<pre>';
print_r($result);
echo '</pre>';

?>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <?php
            while($field = $result->fetch_field()){ ?>
                <th> <?php echo $field->name?> </th>
            <?php }
            ?>
        </tr>
        </thead>

        <tbody>
        <?php
        while($row = $result->fetch_row()){ ?>
            <tr>
                <?php
                foreach($row as  $value){?>
                    <td> <?php echo $value?></td>
                <?php }
                ?>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>




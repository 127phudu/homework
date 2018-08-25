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
    if(!empty($_REQUEST)){
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }
?>


<div class="container" style="margin: 50px auto">
    <div class="row">
        <form name="dang-ky" action="processs.php" method="post">
            <div class="form-group">
                <label for="name">Họ tên</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="phoneNumber">SĐT</label>
                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber">
            </div>
            <div class="form-group">
                <label for="maXacThuc">Mã xác thực</label>
                <input type="text" name="maXacThuc" class="form-control" id="maXacThuc">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Mật khẩu</label>
                <input type="text" name="password" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="intro">Giới thiệu bản thân</label>
                <input type="text" name="intro" class="form-control" id="intro">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</div>



</body>
</html>
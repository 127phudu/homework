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

    <style type="text/css">
        body{
            margin: 10px;
        }
        .form{
            margin-left: 30px;
            padding: 15px;
            background-color: rgba(98, 105, 156, 0.15);
            display: inline-block;
        }
        .general{
            border: 1px solid orange;
            display: inline-block;
        }
        .general p{
            text-align: center;
            margin: 0px 15px;
            padding: 15px 0px;
        }
        .table thead{
            background-color: rgba(62, 62, 62, 0.31);
        }
        .table thead tr th{
            border: none;
            text-align: center;
        }
        .table tbody tr td{
            text-align: center;

        }
    </style>
</head>
<body>

<div class="form">
    <form name="hr" action="index2.php" method="post">
        <div class="form-group">
            <label>Số tiền vay (VNĐ)</label>
            <input type="text" name="tien-vay" class="form-control" value= <?php echo isset($_POST['tien-vay']) ? $_POST['tien-vay'] : 100000000 ?>>
        </div>
        <div class="form-group">
            <label>Lãi suất</label>
            <input type="text" name="tong-lai-suat" class="form-control" value= <?php echo isset($_POST['tong-lai-suat']) ? $_POST['tong-lai-suat'] : 12 ?>>
        </div>
        <div class="form-group">
            <label>Thời hạn vay (tháng)</label>
            <input type="text" name="thoi-han" class="form-control" value= <?php echo isset($_POST['thoi-han']) ? $_POST['thoi-han'] : 12 ?>>
        </div>

        <button type="submit" class="btn btn-default">Tính</button>
    </form>
</div>

<?php

    $tien_vay = isset($_POST['tien-vay']) ? $_POST['tien-vay'] : 100000000 ;
    $tong_lai_suat = isset($_POST['tong-lai-suat']) ? $_POST['tong-lai-suat'] : 12;
    $thoi_han = isset($_POST['thoi-han']) ? $_POST['thoi-han'] : 12;
    $lai_suat_hang_thang = $tong_lai_suat / 12;
    $goc_tra_hang_thang = $tien_vay / $thoi_han;
    $tien_tra_thang_dau = $goc_tra_hang_thang + $tien_vay * $lai_suat_hang_thang / 100;
    $tien_con_no = $tien_vay;
    $tong_lai_phai_tra = 0;

    for($i = 0; $i < $thoi_han; $i++ ){
        $tong_lai_phai_tra += ($tien_con_no*$lai_suat_hang_thang/100);
        $tien_con_no = $tien_con_no - $goc_tra_hang_thang;
    }
    $tong_tien_phai_tra = $tien_vay + $tong_lai_phai_tra;
    $tien_con_no = $tien_vay;
?>

<div class="general">
    <p style="padding-top: 35px">Số tiền trả tháng đầu</p>
    <p style="padding-top: 0px"><?php echo number_format($tien_tra_thang_dau) . ' VNĐ'?></p>
    <p style="border-top: 1px solid rgba(9,9,20,0.29)">Tổng lãi phải trả</p>
    <p style="padding-top: 0px"><?php echo number_format($tong_lai_phai_tra) . ' VNĐ'?></p>
    <p style="border-top: 1px solid rgba(9,9,20,0.29)">Tổng số tiền phải trả</p>
    <p style="padding-top: 0px"><?php echo number_format($tong_tien_phai_tra) . ' VNĐ'?></p>
</div>

<div style="height: 15px"></div>

<div class="table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kì hạn</th>
                <th>Lãi phải trả</th>
                <th>Gốc phải trả</th>
                <th>Số tiền phải trả</th>
                <th>Số tiền còn lại</th>
            </tr>
        </thead>

        <tbody>
        <?php
            for ($i = 1; $i <= $thoi_han; $i++){
                $lai_hang_thang = $tien_con_no * $lai_suat_hang_thang / 100;
                $tien_con_no = $tien_con_no - $goc_tra_hang_thang;
                $tien_tra_hang_thang = $lai_hang_thang + $goc_tra_hang_thang
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo number_format($lai_hang_thang); ?></td>
                        <td><?php echo number_format($goc_tra_hang_thang); ?></td>
                        <td><?php echo number_format($tien_tra_hang_thang); ?></td>
                        <td><?php echo number_format($tien_con_no); ?></td>
                    </tr>
                <?php
            }
        ?>
        </tbody>

    </table>
</div>

</body>
</html>
<?php
require_once 'database.php';
$db = new Database();
$offset = isset($_POST['offset']) ? $_POST['offset'] : 0;
$limit = isset($_POST['limit']) ? $_POST['limit'] : 0;

$conn = Database::$connection;
$sql = "SELECT * FROM products LIMIT $offset,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$html = '';
if (!empty($data)) {
    foreach($data as $value) {
        $html .= '<div class="col-md-4">
                <form>
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 315px; width: 100%; display: block" src="images/camera.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text">'. $value['name'] .'</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-inline">
                                    <input type="text" class="form-control" name="quantity" value="1" style="width: 30%">
                                    <button class="btn btn-sm btn-outline-secondary" style="margin-left: 20px">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>';
    }
}


$respond = array();
$respond['success'] = 1;
$respond['html'] = $html;
echo json_encode($respond);
exit();
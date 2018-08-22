<?php
//Khai báo mảng kiểu 1
$ar = array(1,2,3,4,5);

//Khai báo mảng kiểu 2
$ar = array();
$ar[] = 1;
$ar[] = 2;
$ar[] = 3;
$ar[] = 4;
$ar[] = 5;

//Khai báo mảng kiểu 3
$ar = array();
$ar[4] = 1;
$ar[7] = 2;
$ar['abc'] = 3;


echo '<pre>';
print_r($ar);
echo '</pre>';

//Mảng phức tạp (mảng lồng nhau);

$country = array();
$country[] = array('city_name' => 'ha noi', 'quan' => array('cau giay', 'thanh xuan', 'hoan kiem'));
$country[] = array('city_name' => 'ho chi minh', 'quan' => array('quan 1', 'quan 2', 'quan 3'));
$country[] = array('district_name' => 'Thanh hoa', 'huyen' => array('vinh loc' => array(), 'thach thanh' => array()));
$country[2]['huyen']['vinh loc'] = array('vinh tan', 'vinh thinh');
echo '<pre>';
print_r($country);
echo '</pre>';

?>
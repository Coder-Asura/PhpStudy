<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 18:04
 * php 数组
 */

//定义数组
$cars = array("Volvo", "BMW", "SAAB");
//或者直接按索引创建
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "SAAB";
//索引
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
//数组长度
echo count($cars);
echo "<br>";

//遍历数组
$arrlength = count($cars);
for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";

//关联数组
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
//或者手动分配索引
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

//遍历关联数组
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

//排序
//sort() - 以升序对数组排序
//rsort() - 以降序对数组排序
//asort() - 根据值，以升序对关联数组进行排序
//ksort() - 根据键，以升序对关联数组进行排序
//arsort() - 根据值，以降序对关联数组进行排序
//krsort() - 根据键，以降序对关联数组进行排序

$cars = array("Volvo", "BMW", "SAAB");
//按字母升序排序
sort($cars);

$numbers = array(3, 5, 1, 22, 11);
sort($numbers);

$cars = array("Volvo", "BMW", "SAAB");
rsort($cars);

$numbers = array(3, 5, 1, 22, 11);
rsort($numbers);

$age = array("Bill" => "35", "Steve" => "37", "Peter" => "43");
asort($age);

ksort($age);

arsort($age);

krsort($age);
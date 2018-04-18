<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 17:08
 *
 * php 常量
 */


//如需设置常量，请使用 define() 函数 - 它使用三个参数：
//
//首个参数定义常量的名称
//第二个参数定义常量的值
//可选的第三个参数规定常量名是否对大小写不敏感。默认是 false。
define("ASURA", "asura");
define("ASURA2", "Asura2", false);
define("ASURA3", "asura2", true);

echo ASURA;
echo "<br>";
echo ASURA2;
echo "<br>";
echo ASURA3;
echo "<br>";
echo asura3;
echo "<br>";

$x = (ASURA3 === ASURA2);
echo var_dump($x);
echo "<br>";

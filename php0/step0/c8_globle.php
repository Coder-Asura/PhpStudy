<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 18:13
 * php 全局变量
 */

$x = 75;
$y = 25;

//$GLOBALS — 引用全局作用域中可用的全部变量
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";

//$_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//返回当前页面的完整 URL（不可靠，因为不是所有用户代理都支持）。
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

// $_REQUEST 用于收集 HTML 表单提交的数据。
//<html>
//<body>
//
/*<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">*/
//Name: <input type="text" name="fname">
//<input type="submit">
//</form>
//
//<?php
//$name = $_REQUEST['fname'];
//echo $name;
//?>
<!---->
<!--</body>-->
<!--</html>-->

<!--PHP $_POST 广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。-->
<!--<html>-->
<!--<body>-->
<!---->
<!--<form method="post" action="--><?php //echo $_SERVER['PHP_SELF'];?><!--">-->
<!--    Name: <input type="text" name="fname">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<?php
//$name = $_POST['fname'];
//echo $name;
//?>
<!---->
<!--</body>-->
<!--</html>-->

<!--PHP $_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据。-->
<!--<html>-->
<!--<body>-->
<!---->
<?php
//echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
//?>
<!---->
<!--</body>-->
<!--</html>-->
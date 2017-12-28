<?php
    //1.引入我们的mvc类
    require_once('Model.php');  //导入模型类
    require_once('View.php');   //导入视图类
    require_once('Controller.php'); //导入控制器类

    //2.调用指定控制器中的指定方法，使应用运行起来
    $c = isset($_GET['c']) ? $_GET['c'] : 'Controller';
    $a = isset($_GET['a']) ? $_GET['a'] : 'displayInfo';
    $controller = new $c();
    $controller->$a();

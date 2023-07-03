<?php 
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/thong_ke.php";
    check_login();

    extract($_REQUEST);
    if(isset($_REQUEST['chart'])){
        $item=thong_ke_hang_hoa();
        $view_name="chart.php";
    }else{
        $item=thong_ke_hang_hoa();
        // print_r($item);
        $view_name="list.php";

    }
    require "../layout.php";
?>
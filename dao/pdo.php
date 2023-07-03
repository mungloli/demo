<?php
function pdo_get_connection(){
    $hostname='localhost';
    $dbname='xsshop';
    $username = 'root';
    $password = '';
    try{
        $connect = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }catch(PDOException $e){
        $e->getMessage();
    }
    
}

 // Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}

 //Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}

 // Thực thi câu lệnh sql truy vấn một bản ghi
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}

 // Thực thi câu lệnh sql truy vấn một giá trị
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $connect = pdo_get_connection();
        $stmt = $connect->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($connect);
    }
}

?>
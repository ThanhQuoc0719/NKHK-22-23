<?php
    $host = "localhost";
    $namehost = "root";
    $pass = "";
    $csdl = "nk-kh";

    $connect=mysqli_connect($host,$namehost,$pass,$csdl) or die ("Không thể kết nối Database");
    mysqli_query($connect,"SET NAMES 'UTF8'");
?>
<?php
    require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./access/css/index.css">
    <link rel="stylesheet" href="./access/css/admin.css">
    <link rel="stylesheet" href="./access/fontawesome/css/all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php require_once('headerAdmin.php') ?>
        <?php require_once('topics.php') ?>
            <div class="div-btn">
                <button class="btn-insert">Thêm</button>
            </div>
            <?php
                require_once('content.php');
            ?>
    </div>
    <!--bảng thêm-->
    <div class="container-add">
                <div class="content-add">
                <p class="header-add">Nhập các thông tin</p>
                <i class="fa-solid fa-xmark btn-close"></i>
                    <table class="table-insert-topics">
                    <tr>
                        <td class="width40"><label for="lb_topic">Chủ đề</label></td>
                        <td>
                            <input type="text" id="lb_topic" class="input_content"  placeholder="Chủ đề">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label for="lb_tenma">Mã bài</label></td>
                        <td>
                            <input type="text" id="lb_tenma" class="input_content" placeholder="Mã bài">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label class ="" for="lb_name">Tên bài</label></td>
                        <td>
                            <input type="text" id="lb_name" class="input_content" placeholder="Tên bài">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label class ="" for="lb_teacher">Người hướng dẫn</label></td>
                        <td>
                            <input type="text" id="lb_teacher" class="input_content" name="" placeholder="Người hướng dẫn">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label class ="" for="lb_student">Người thực hiện</label></td>
                        <td>
                            <input type="text" id="lb_student" class="input_content" name="" placeholder="Người thực hiện">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea id="lb_content" rows="4" cols="50" class="input_content" placeholder="Nội dung"></textarea>
                        </td>
                    </tr>
                    
                </table>
                <div class="container-agree">
                    <button class="btn-agree">Thêm</button>
                </div>
            </div>            
            </div>
<!-- xóa -->
    <div class="div-delete div-delete-0 table_thongbao">
        <div class="content-delete">
            <div class="thongbao">
                <p class="text-thongbao"> Bạn có chắc chắn muốn xóa không?</p>
            </div>
            <div class="btn-message-delete">
                <div class="btn-message btn-mesage-agree">Đồng ý</div>
                <div class="btn-message btn-mesage-cancel">Hủy</div>
            </div>
        </div>
    </div>
<!-- add topic -->
    <div class="div-add-topic">
        <div class="content-add-topic">
            <p class="header-add">Nhập đề tài</p>
            <input type="text" class="input-topic">
            <div class="container-btn-addtopic">
                <button class="btn-addtopic">Xác nhận</button>
            </div>
        </div>
    </div>
<!--update-->
<div class="container-update">
                <div class="content-update">
                <p class="header-add">Nhập các thông tin</p>
                <i class="fa-solid fa-xmark btn-close-up"></i>
                    <table class="table-update-topics">
                    <tr>
                        <td class="width40"><label for="lb_topic-up">Chủ đề</label></td>
                        <td>
                            <input type="text" id="lb_topic-up" class="input_content-up"  placeholder="Chủ đề">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label class ="" for="lb_name-up">Tên bài</label></td>
                        <td>
                            <input type="text" id="lb_name-up" class="input_content-up" placeholder="Tên bài">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label class ="" for="lb_teacher-up">Người hướng dẫn</label></td>
                        <td>
                            <input type="text" id="lb_teacher-up" class="input_content-up" name="" placeholder="Người hướng dẫn">
                        </td>
                    </tr>
                    <tr>
                        <td class="width40"><label class ="" for="lb_student-up">Người thực hiện</label></td>
                        <td>
                            <input type="text" id="lb_student-up" class="input_content-up" name="" placeholder="Người thực hiện">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea id="lb_content-up" rows="4" cols="50" class="input_content-up" placeholder="Nội dung"></textarea>
                        </td>
                    </tr>
                    
                </table>
                <div class="container-agree-up">
                    <button class="btn-agree-up">Update</button>
                </div>
            </div>            
            </div>  
<!-- watch detail  -->
<div class="container-watch-detail">
        <div class="content-watch">
        <p id="article-title" class="header-watch">Khoa học</p>
        <i class="fa-solid fa-xmark btn-close-watch"></i>
            <table class="table-watch">
                <tr>
                    <td class="width40"><label for="">Mã bài</label></td>
                    <td>
                        <p id="watch-postcode" class="input_content-watch"></p>
                    </td>
                </tr>
            <tr>
                <td class="width40"><label for="">Chủ đề</label></td>
                <td>
                    <p id="watch_topic" class="input_content-watch"></p>
                </td>
            </tr>
            <tr>
                <td class="width40"><label class ="" for="">Người hướng dẫn</label></td>
                <td>
                    <p id="watch_teacher" class="input_content-watch"></p>
                </td>
            </tr>
            <tr>
                <td class="width40"><label class ="" for="">Người thực hiện</label></td>
                <td>
                    <p id="watch_student" class="input_content-watch"></p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="watch_content" rows="4" cols="50" class="input_content-watch" disabled></textarea>
                </td>
            </tr>
            
        </table> 
        </div>            
    </div>

</body>
<script src="access/js/thembai.js"></script>
<script src="access/js/xoabai.js"></script>
<script src="access/js/addtopic.js"></script>
<script  src="access/js/update.js"></script>
<script src="access/js/watcharticle.js"></script>
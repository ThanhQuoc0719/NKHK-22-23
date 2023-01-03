<?php
    require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./access/css/base.css">
    <link rel="stylesheet" href="./access/css/index.css">
    <link rel="stylesheet" href="./access/css/detailarticle.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="grid">
            <div class="container__title">
                <div class="grid__row">
                    <div class="grid__column-3"><img src="./access/img/coDang.jpeg" alt="Ảnh Đảng"></div>
                    <div class="grid__column-9">
                        <div class="text__banner">
                            <div> <span> Dự án nghiên cứu KHKT - KN năm học 2022 - 2023</span>
                                <span> Dự án nghiên cứu KHKT - KN năm học 2022 - 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container__content">
                <?php
                    $comm ="SELECT A.id_article_title, A.article_title, A.article_content, A.date_submitted, A.name_student, A.name_teacher, B.theme FROM detail_topic AS A, topic AS B WHERE A.id_topic=B.id_topic AND id_article_title='".$_GET['id_article_title']."'";
                    $sql= mysqli_query($connect,$comm);
                    if($row=mysqli_fetch_array($sql))
                    {
                        echo '<div class="article__title"><p>'.$row['article_title'].'</p></div>
                        <div class="content-article">
                            <div class="row-article">
                                <div class="column-20">Chủ đề</div>
                                <div>'.$row['theme'].'</div>
                            </div>
                            <div class="row-article">
                                <div class="column-20">Ngày đăng</div>
                                <div>'.$row['date_submitted'].'</div>
                            </div>
                            <div class="row-article">
                                <div class="column-20">Người hướng dẫn</div>
                                <div>'.$row['name_teacher'].'</div>
                            </div>
                            <div class="row-article">
                                <div class="column-20">Người thực thi</div>
                                <div>'.$row['name_student'].'</div>
                            </div>
                        </div>
                        <div class="container-article-content">
                            <p class="article-content">'.$row['article_content'].'</p>
                        </div>';
                    }
                ?>
                <!-- <div class="article__title"><a>Nga giải phóng thị trấn chiến lược, bao vây thành trì của Ukraine ở Donetsk</a></div>
                <div class="content-article">
                    <div class="row-article">
                        <div class="column-20">Đề tài</div>
                        <div>Nghiên cưu khoa học</div>
                    </div>
                    <div class="row-article">
                        <div class="column-20">Ngày đăng</div>
                        <div>27/07/2</div>
                    </div>
                    <div class="row-article">
                        <div class="column-20">Người hướng dẫn</div>
                        <div>áhdkajn</div>
                    </div>
                    <div class="row-article">
                        <div class="column-20">Người thực thi</div>
                        <div>kacájklja</div>
                    </div>
                </div>
                <div class="container-article-content">
                    <p class="article-content">Lãnh đạo UBND tỉnh Đồng Tháp cho biết với phương châm "còn nước còn tát", lực lượng cứu hộ đang chạy đua với thời gian để hy vọng cứu được bé trai bị lọt vào trụ bê-tông.

                        Đến trưa 2-1, lực lượng chức năng ở Đồng Tháp vẫn đang nỗ lực dùng các giải pháp để cứu bé Thái Lý Hạo Nam (SN 2012; ngụ xã Phú Lợi, huyện Thanh Bình, tỉnh Đồng Tháp) thoát khỏi trụ bê-tông sâu 35 m.</p>
                </div> -->
            </div>
        </div>
    </div>
</body>
</html>